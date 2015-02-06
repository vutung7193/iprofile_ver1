<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

<!--    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?> <span style="font-size: 13px"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php" >Back To UserView</a></span></div>
    </div>-->
    <!-- header -->
    <div id="mainMbmenu">
        <?php
        $this->widget('application.extensions.mbmenu.MbMenu', array(
            'items' => array(
//                array('label' => 'Home', 'url' => array('/site/index')),
                       array('label' => 'Front-End', 'url' => array('../index.php')),
                      array('label' => 'Ngành', 'url' => array('/major/admin')),
                      array('label' => 'Trường', 'url' => array('/school/admin')),
                       array('label' => 'Team', 'url' => array('/team/admin')),
                 array('label' => 'Vị Trí', 'url' => array('/position/admin')),
                      array('label' => 'Công Ty', 'url' => array('/company/admin')),
                       array('label' => 'Dự Án', 'url' => array('/project/admin')),
                      array('label' => 'KhenThưởng', 'url' => array('/Ktkl/admin')),
                      array('label' => 'ĐàoTạo', 'url' => array('/Trainning/admin')),
                      array('label' => 'Tin Tức', 'url' => array('/news/admin')),

//                      array('label' => 'User', 'url' => array('/user/changepassword')),

          
                      array('label' => 'Nhân Viên','url' => array('/employee/admin'), 'items' => array(
                     
                        array('label' => 'Nhân Viên - Tài Sản', 'url'=>array('/employeeAsset/admin')),
                        array('label' => 'Nhân Viên - Hồ Sơ', 'url'=>array('/employeeCv/admin')),
                        array('label' => 'Nhân Viên - Dự Án', 'url'=>array('/employeeProject/admin')),
                        array('label' => 'Nhân Viên - Leader', 'url'=>array('/employeeLeader/admin')),
                        array('label' => 'Nhân Viên - KhenThưởng', 'url'=>array('/employeeKtkl/admin')),
                        array('label' => 'Nhân Viên - Đào Tạo', 'url'=>array('/employeeTrainning/admin')),
                        array('label' => 'Nhân Viên - Công Việc', 'url'=>array('/employeeWork/admin')),
               )),
                
//                  array('label' => 'Manage employee', 'url' => array('/employeeAsset/admin')),
//                  array('label' => 'Manage employee', 'url' => array('/employeeCv/admin')),
//                  array('label' => 'Manage employee', 'url' => array('/employeeKtkl/admin')),
                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Exit (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ));
        ?>
    </div>
    <!-- mainmenu -->

    <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        ));
    ?><!-- breadcrumbs -->

    <?php echo $content; ?>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by <a href="http://thucphamchucnangusa.com">Vũ Tùng</a>.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>