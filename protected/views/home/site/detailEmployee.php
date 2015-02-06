<!DOCTYPE html>
<html>
<head>
    <title><?php echo $model->name; ?></title>
	<meta name="viewport" content="width=device-width" />
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/style.css">
     <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="http://hdonline.vn/template/frontend/js/jquery.hoverIntent.js"></script> 

      <?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/css/js/bootstrap.min.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/css/js/slides.min.jquery.js');
    ?>
</head>

    
<body style="background: transparent url(<?php echo Yii::app()->request->baseUrl; ?>/css/img/front2.png)">

     

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner"  itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  <div class="wrap container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <span class="site-title" itemprop="headline">
    <a href="../../../index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/ip-logo.png" width="96"></a>
    </span>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
     <ul class="header-menu">
     <li class="active"><a href="<?php echo $this->createUrl('/site/teams')?>">Team</a></li>
     <li><a href="<?php echo $this->createUrl('/site/projects')?>">Project</a></li>
     <li><a href="#"></a></li>
     <li><a href="#"></a></li>
     <li><a href="#"></a></li>
     <li><a href="#"></a></li>
     <li><a href="#"></a></li>
     </ul>
    </nav>
  </div>
</header>



<div class="site-inner">
<main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div class="top-content container">
    <div id="profile-head" style="min-height: 250px; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/css/img/cover.png)   ">
        <div id="profile-head-avatar" style="margin-top: 90px " >
          <a href="#" id="zoom_avatar" >
       <img alt="avatar" id="profile-picture" src="<?php echo Yii::app()->request->baseUrl.$model->logo ?>" ></a>
    </div>
      <div id="profile-info">
        <div id="profile-name">
            <div id="profile-name-container"  style="margin-top: 5px">
                <a href="#" class="link-profile-name"><span dir="ltr" style="font-weight: bold" ><?php echo $model->name ?></span></a>
            <p class="profile-slogan">"Hãy theo đuổi đam mê, thành công sẽ theo đuổi bạn".</p>
          </div>
        </div>
    </div>
  </div>


<ul class="page_tabs row">  
<li class="active" id="pnav_about">  
<a href="#"> Giới thiệu </a> </li> 
 <li id="pnav_team">  
 <a href="#"> Team </a> 
 </li>  
 </ul>
</div>


<div class="main-content container">
     <div class="col-md-4 colum" >
        <div class="left_colum" style="border: 1px solid; background: #FF99CC">
             <div class="pin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/pin.png"></div>
        <h3 class="section_title">Thông tin cá nhân</h3>
        <ul class="list-item">
          <li>
            <b>Họ và tên:</b> <?php echo $model->name ?>
          </li>
          <li>
            <b>Ngày sinh:</b> <?php echo $model->birthdate ?>
          </li>
          <li>
            <b>Quê quán:</b>  <?php echo $model->address ?>
          </li>
          <li>
            <b>Giới tính:</b> <?php echo $model->sex ?>
          </li>
<!--          <li>
            <b>Tình trạng:</b> Độc thân
          </li>-->
          <li>
            <b>Sinh viên:</b> <?php echo $model->school->name ?>
          </li>
        </ul>
         </div>
         </div>
     <div class="col-md-8" style="padding: 0;"> 
         <div class="top-profile">
          <div class="col-md-6 colum">
        <div class="right_colum" style="background: #1aa049;">
           <div class="pin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/pin.png"></div>
        <h3 class="section_title">Thông tin liên lạc</h3>
        <ul class="list-item">
         
          <li>
            <b>Email:</b> <?php echo $model->mail ?>
          </li>
        
          <li>
            <b>Skype:</b> <?php echo $model->skype ?>
          </li>
            <li>
            <b>Facebook:</b> <?php echo $model->facebook ?>
          </li>
           <li>
            <b>Số điện thoại:</b> <?php echo $model->phone ?>
          </li>
           <li>
            <b>Địa Chỉ Hiện Tại:</b> <?php echo $model->now_address ?>
          </li>
        </ul>
         </div>
         </div>

       <div class="col-md-6 colum">
        <div class="right_colum" style="background: #f2ec24;">
        <div class="pin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/pin.png"></div>
        <h3 class="section_title">Thông tin công việc</h3>
        <ul class="list-item-2">
         <li>
            <b>Team:</b> <?php  echo $emwork->team->name ?>
          </li>
          <li>
           <b>Vị trí:</b>  <?php  echo $emwork->position->name ?>
          </li>
          <li>
            <b>Ngày vào TVi:</b>  <?php  echo $emwork->intership_start ?>
          </li>
          <li></li>
          <li></li>

        </ul>
         </div>
         </div>
         </div>
         <div class="bottom-profile">
      <div class="col-md-6 colum">
           <div class="right_colum" style="background: #3392ca;"> 
           <div class="pin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/pin.png"></div>
            <h3 class="section_title">Thành tích nổi bật</h3>
            <ul class="list-item-2" style="min-height: 100px">
                
                   <?php foreach ($emawa as $emawa)
                {
                    ?>
                     <li>
            <?php echo $emawa->ktkl->name ?>&nbsp;&nbsp;<?php echo $emawa->date ?>
                         
          </li>
                    <?php 
                    
                    } ?>
       
         
        </ul>
            </div>
         </div>
     
     <div class="col-md-6 colum">
            <div class="right_colum" style="background: #e0353f;">
            <div class="pin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/pin.png"></div>
            <h3 class="section_title">Dự án thực hiện</h3>
            <ul class="list-item-2" style="min-height: 100px">
                <?php foreach ($empro as $empro)
                {
                    ?>
                     <li>
            <?php echo $empro->project->name ?>
          </li>
                    <?php 
                    
                    } ?>
         
       
        </ul>
         </div>
         </div>
         </div>
     </div>
 </div>


  </main>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/bootstrap.min.js"></script>

</body> 
    
</html>


