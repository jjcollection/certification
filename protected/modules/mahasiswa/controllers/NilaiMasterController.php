<?php

class NilaiMasterController extends Controller {

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
                'actions' => array('index', 'view', 'admin'),
                'expression' => '$user->getLevel()==3',
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'expression' => '$user->getLevel()==3',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('delete'),
                'expression' => '$user->getLevel()==3',
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
        $this->layout = 'mainMahasiswa';
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->layout = 'mainMahasiswa';
        $model = new NilaiMaster;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $na = ($nPenguji * 0.3) + ($nPembimbing * 0.5) + ($nperusahaan * 0.2);
        $model->na = $na;
        if($na <=50)
        {
            $model->Index='D';
        }
        else if($na >=50 && $na<=69)
        {
            $model->Index='C';
        }
        else if($na >=70 && $na<=79)
        {
            $model->Index='B';
        }
        else if($na >=80 && $na<=100)
        {
            $model->Index='A';
        }

        if (isset($_POST['NilaiMaster'])) {
            $model->attributes = $_POST['NilaiMaster'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idNilaiMaster));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $this->layout = 'mainMahasiswa';
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['NilaiMaster'])) {
            $model->attributes = $_POST['NilaiMaster'];
            $model->tglPenilaian = date('Y-m-d H:i:s');
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idNilaiMaster));
        }

        $this->render('update', array(
            'model' => $model,
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
        $this->layout = 'mainMahasiswa';
        $dataProvider = new CActiveDataProvider('NilaiMaster');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {

        $this->layout = 'mainMahasiswa';
        $modelPelaksanaan = new Pelaksanaan('search');
        $modelPelaksanaan->unsetAttributes();  // clear any default values

        $model = new NilaiMaster('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['NilaiMaster'], $_GET['NilaiMaster']))
            $model->attributes = $_GET['NilaiMaster'];
        $modelPelaksanaan->attributes = $_GET['Pelaksanaan'];

        $this->render('admin', array(
            'model' => $model,
            'modelPelaksanaan' => $modelPelaksanaan,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return NilaiMaster the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = NilaiMaster::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param NilaiMaster $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'nilai-master-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
