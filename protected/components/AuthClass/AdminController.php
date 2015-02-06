<?php
class AdminController extends CController
{
    public $layout='column1';
    public $menu=array();
    public $breadcrumbs=array();
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
    public function accessRules()
    {
        return array(
            array('allow',
                'users'=>array('*'),
                'actions'=>array('login'),
            ),
            array('allow',
                'users'=>array('@'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
    
    protected function registerAssets() {
        Yii::app()->clientScript->registerCoreScript('jquery');
        $this->registerJs('webroot.js.jstree', 'jquery.jstree.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/json2.js');
    }

    protected static function registerCssAndJs($folder, $jsfile, $cssfile) {
        $sourceFolder = YiiBase::getPathOfAlias($folder);
        $publishedFolder = Yii::app()->assetManager->publish($sourceFolder);
        Yii::app()->clientScript->registerScriptFile($publishedFolder . $jsfile, CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerCssFile($publishedFolder . $cssfile);
    }

    protected static function registerJs($folder, $jsfile) {
        $sourceFolder = YiiBase::getPathOfAlias($folder);
        $publishedFolder = Yii::app()->assetManager->publish($sourceFolder);
        Yii::app()->clientScript->registerScriptFile($publishedFolder . '/' . $jsfile);
        return $publishedFolder . '/' . $jsfile;
    }

  

    
}