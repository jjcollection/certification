<?php

class AbsensiController extends Controller {

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
            'postOnly + delete', // we only allow deletion via POST request
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
    public function actionCreate($id,$idPendaftaran) {
        $this->layout = 'mainMahasiswa';
        $modelNilaiMaster= $this->loadModelNilaiMaster($idPendaftaran);
        
        $model = new Absensi;
        $model->idPertemuan = $id;
        $model->idUser = Yii::app()->user->id;
        $model->statusKehadiran = 1;
        $model->tglAbsen = date('Y-m-d H:i:s');
        $model->idPendaftaran=$idPendaftaran;
        if($model->validate())
        {
             $model->save();
             $jml = Absensi::model()->countByAttributes(array('idPendaftaran'=>$idPendaftaran));
             //echo $count;
             //exit();
             $modelNilaiMaster->absensi=(30/100)*($jml/2)*100;
             $modelNilaiMaster->save();
             
        }
       
        $model->unsetAttributes();  // clear any default values
        $this->redirect(Yii::app()->request->getUrlReferrer());
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

        if (isset($_POST['Absensi'])) {
            $model->attributes = $_POST['Absensi'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idAbsensi));
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
        $dataProvider = new CActiveDataProvider('Absensi');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $this->layout = 'mainMahasiswa';
        $modelPendaftaran = new Pendaftaran('search');
        
        $modelPendaftaran->unsetAttributes();  // clear any default values
        if (isset($_GET['Pendaftaran']))
            $modelPendaftaran->attributes = $_GET['Pendaftaran'];


        $model = new Absensi('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Absensi']))
            $model->attributes = $_GET['Absensi'];

        $this->render('admin', array(
            'model' => $model,
            'modelPendaftaran' => $modelPendaftaran,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Absensi the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Absensi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    
     public function loadModelNilaiMaster($id) {
        $model = NilaiMaster::model()->find("idPendaftaran=$id");
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Absensi $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'absensi-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
