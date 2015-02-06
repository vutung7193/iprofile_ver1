<?php

class EmployeeController extends AdminController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new employee;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['employee']))
		{
			$model->attributes=$_POST['employee'];
//                          $model->avatarUpload=CUploadedFile::getInstance($model,'logo');
			if($model->save())
//                              $model->logo->saveAs('path/to/localFile');
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
        

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['employee']))
		{
			$model->attributes=$_POST['employee'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('employee');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
                
                
                
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new employee('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['employee']))
			$model->attributes=$_GET['employee'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return employee the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=employee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param employee $model the model to be validated
	 */
	
        
        
         public function actionUpload()
        {

            header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", FALSE);
            header("Pragma: no-cache");

            // Settings
            $targetDir = Yii::getPathOfAlias('webroot') . DIRECTORY_SEPARATOR . 'Upload' . DIRECTORY_SEPARATOR . date('Y-m-d');

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, TRUE);
            }
            $cleanupTargetDir = TRUE; // Remove old files
            $maxFileAge       = 5 * 3600; // Temp file age in seconds

            // 5 minutes execution time
            @set_time_limit(5 * 60);

            // Uncomment this one to fake upload time
            // usleep(5000);

            // Get parameters
            $chunk    = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
            $chunks   = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
            $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

            // Clean the fileName for security reasons
            $fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

            // Make sure the fileName is unique but only if chunking is disabled
            if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
                $ext        = strrpos($fileName, '.');
                $fileName_a = substr($fileName, 0, $ext);
                $fileName_b = substr($fileName, $ext);

                $count = 1;
                while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                    $count++;

                $fileName = $fileName_a . '_' . $count . $fileName_b;
            }

            $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

            // Create target dir
            if (!file_exists($targetDir))
                @mkdir($targetDir);

            // Remove old temp files
            if ($cleanupTargetDir && is_dir($targetDir) && ($dir = opendir($targetDir))) {
                while (($file = readdir($dir)) !== FALSE) {
                    $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                    // Remove temp file if it is older than the max age and is not the current file
                    if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
                        @unlink($tmpfilePath);
                    }
                }

                closedir($dir);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');


            // Look for the content type header
            if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
                $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

            if (isset($_SERVER["CONTENT_TYPE"]))
                $contentType = $_SERVER["CONTENT_TYPE"];

            // Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
            if (strpos($contentType, "multipart") !== FALSE) {
                if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                    // Open temp file
                    $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
                    if ($out) {
                        // Read binary input stream and append it to temp file
                        $in = fopen($_FILES['file']['tmp_name'], "rb");

                        if ($in) {
                            while ($buff = fread($in, 4096))
                                fwrite($out, $buff);
                        } else
                            die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                        fclose($in);
                        fclose($out);
                        @unlink($_FILES['file']['tmp_name']);
                    } else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            } else {
                // Open temp file
                $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
                if ($out) {
                    // Read binary input stream and append it to temp file
                    $in = fopen("php://input", "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    } else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                    fclose($in);
                    fclose($out);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            }

            // Check if file has been uploaded
            if (!$chunks || $chunk == $chunks - 1) {
                // Strip the temp .part suffix off
                rename("{$filePath}.part", $filePath);
                //Save o day
                $info                 = pathinfo($filePath);
                $employee              = new employee();
                $employee->name       = $info['filename'];
                $employee->logo      = '/Upload/' . date('Y-m-d') . '/' . $info['basename'];
//                $team->categoryId  = $_REQUEST['categoryId'];
//                $product->dateCreated = date('U');
//                $product->status=1;
//                $product->save();

                echo json_encode(array(
                    'jsonrpc' => '2.0',
                    'result'  => $filePath,
//                    'link'   => Yii::app()->params['domain'] . '/file/download/' . $_REQUEST['contentTypeId'] . '/' . $_REQUEST['linkId'] . '/' . $fileId,
                ));
                die;
            }
            // Return JSON-RPC response
            die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
        }
        
        
        protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
