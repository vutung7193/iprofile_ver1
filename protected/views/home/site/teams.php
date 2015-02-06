<!DOCTYPE html>
<html>
<head>
  <title>Iprofile - Team</title>
  <meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width" />
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/tree.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css/jquery.cluetip.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/jquery.hoverIntent.js"></script> 
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/jquery.cluetip.js"></script>
  <style>
      .tvi_home li a {min-width: 144px!important}
  </style>
</head>
<body>



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
            <a href="../../index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/ip-logo.png" width="96"></a>
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


    <div id="iprofile_home" style="width: 1300px;">

  <div id="wrapper">

   <div class="tree tvi_home">
    <ul>
      <li>
        <a href="#">Tinh Vân Incubator</a>
        <ul>
            <?php 
            foreach ($model as $model)
            {
                 ?>   <li>
            <a href="<?php echo $this->createUrl('/site/team', array('id' =>$model->id)) ?>"><?php echo $model->name?></a>
            
         </li>
         <?php
            }
            
            ?>
            
            
<!--          <li>
            <a href="#">S Team</a>
            
         </li>
         <li>
          <a href="#">PHP Team</a>
       </li>
       <li>
        <a href="#">Mobile Team</a>
     </li>
     <li>
      <a href="#">Game Studio</a>
     </li>
      <li>
      <a href="#">Design Team</a>
     </li>
      <li>
      <a href="#">Marketing</a>
     </li>
      <li>
      <a href="#">PR Team</a>
     </li>
      <li>
      <a href="#">QA / Tester</a>
     </li>-->
 </ul>
</li>
</ul>
</div>



</div>
</div>



<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();  
    for(i=1;i<20;i++){
      jtID = $('a.jt' + i);
      jtID.cluetip ({cluetipClass: 'rounded', arrows: false, local: true, hideLocal: false});
    }
  });
</script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>


