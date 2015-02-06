<!DOCTYPE html>
<html>
<head>
  <title><?php echo $model->name?></title>
  <meta name="viewport" content="width=device-width" />
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseurl?>/css/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseurl?>/css/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseurl?>/css/css/tree.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseurl?>/css/css/jquery.cluetip.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseurl?>/css/js/jquery.hoverIntent.js"></script> 
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseurl?>/css/js/jquery.cluetip.js"></script>
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
            <a href="../../../index.php"><img src="<?php echo Yii::app()->request->baseurl?>/img/ip-logo.png" width="96"></a>
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


    <div id="iprofile_home" style="width: 1366px">

  <div id="wrapper">

   <div class="tree">
    <ul>
      <li>
          <a href="#" ><?php echo $model->name; ?>
              
<!--              <ul>
              <li>
            <div class="profile_member_info">
                   <span>Leader STeam: Phạm Kiều Thanh</span>
                 
                  
                      
                      <span><b>Tham Gia:</b> <?php // echo $em->date_start ?></span>
                      <span><b>Kết Thúc:</b> <?php // echo $em->date_end ?></span>
                      <span><b>Vai Trò:</b> <br><?php // echo $em->roles ?></span>
                 </div>
     </li>
              </ul>-->
              
          
          </a>
     
        <ul>
<?php 
foreach($em as $em){
    ?>
              <li>
            <a href="<?php echo $this->createUrl('/site/detailEmployee', array('id' =>$em->employee_id)) ?>"><?php echo $em->employee->name ?></a>
            <ul>
              <li>
                <a class="tvi-member" href="#">
<!--                    <div class="responsivewrapper" style="background-image: url( <?php echo Yii::app()->request->baseUrl . $em->employee->logo ?> ) ">

                  </div>-->
                  <div class="profile_member_info">
                   <!--<span>Leader STeam: Phạm Kiều Thanh</span>-->
                 
                   
                      
                      <span><b>Tham Gia:</b> <?php echo $em->date_start ?></span>
                      <span><b>Kết Thúc:</b> <?php echo $em->date_end ?></span>
                      <span><b>Vai Trò:</b> <br><?php echo $em->roles ?></span>
                 </div>
               </a>
             </li>
           </ul>
         </li>
            
            <?php
}


?>

     </ul>
   </li>
 </ul>
</li>
</ul>
</div>



</div>
</div>

<!--    <div id ='project_detail'>
        <div  ><?php echo $model->name ?> - DeTail</div>
        
        
    </div>-->
<div class="localvisible1" style="display: none;">
  <div class="responsivewrapper" style="background-image: url(img/chibi/bau-duc.png)">
  </div>
  <div class="profile_member_info">
   <ul>
     <li>Giám Đốc Nguyễn Minh Đức</li>
     <li>Sinh nhật: 5/10/1986</li>
   </ul>
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

<script type="text/javascript" src="<?php echo Yii::app()->request->baseurl?>/css/js/bootstrap.min.js"></script>

</body>
</html>


