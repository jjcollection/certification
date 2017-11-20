<?php

class ProfilDosenController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->layout = 'mainAdmin';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->layout = 'mainAdmin';
        $modelUser = new User;
        $model = new ProfilDosen;
        if (isset($_POST['User'], $_POST['ProfilDosen'])) {
            
            $modelUser->attributes = $_POST['User'];
            $model->attributes = $_POST['ProfilDosen'];
            $dua = $modelUser->password;
            $modelUser->username=$model->kodeDosen;
            $modelUser->email=$model->email;
            $modelUser->saltPassword = $modelUser->generateSalt();
            $modelUser->password = $modelUser->hashPassword($dua, $modelUser->saltPassword);
            $modelUser->level_id = 2;
          
            if ($model->validate() && $modelUser->save()) {
                $model->idUser = $modelUser->id;
                $model->save();
                $this->redirect(array('profilDosen/admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'modelUser' => $modelUser,
        ));
    

    }


    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        
        $this->layout = 'mainAdmin';
        $model = $this->loadModel($id);
        $modelUser = $this->loadModelUser($model->idUser);
        if (isset($_POST['User'], $_POST['ProfilDosen'])) {
            
            $modelUser->attributes = $_POST['User'];
            $model->attributes = $_POST['ProfilDosen'];
            $dua = $modelUser->password;
            $modelUser->username=$model->kodeDosen;
            $modelUser->email=$model->email;
            $modelUser->saltPassword = $modelUser->generateSalt();
            $modelUser->password = $modelUser->hashPassword($dua, $modelUser->saltPassword);
            $modelUser->level_id = 2;
          
            if ($model->validate() && $modelUser->save()) {
                $model->idUser = $modelUser->id;
                $model->save();
                $this->redirect(array('view', 'id' => $model->kodeDosen));
            }
        }
         
         $this->render('update', array(
            'model' => $model,
            'modelUser' => $modelUser,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->layout = 'mainAdmin';
        $dataProvider = new CActiveDataProvider('ProfilDosen');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $this->layout = 'mainAdmin';
        $model = new ProfilDosen('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ProfilDosen']))
            $model->attributes = $_GET['ProfilDosen'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ProfilDosen the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ProfilDosen::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    
    public function loadModelUser($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ProfilDosen $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'profil-dosen-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
