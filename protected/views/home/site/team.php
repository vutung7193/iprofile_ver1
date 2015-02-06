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
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseurl?>/js/jquery.hoverIntent.js"></script> 
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseurl?>/js/jquery.cluetip.js"></script>
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
         <li><a href="<?php echo $this->createUrl('/site/teams')?>">Projects</a></li>
          <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
        
       </ul>
     </nav>
   </div>
 </header>


    <div id="iprofile_home" style="min-width: 1300px;">

  <div id="wrapper">

   <div class="tree">
    <ul>
      <li>
        <a href="#"><?php echo $model->name?></a>
        <ul>
<?php 
foreach($em as $em){
    ?>
              <li>
            <a href="<?php echo $this->createUrl('/site/detailEmployee', array('id' =>$em->employee_id)) ?>"><?php 
            
            $emlead = employeeLeader::model()->findAll("employee_id = {$em->employee_id}");
            
            if(empty($emlead))
                
            
            echo $em->employee->name ;
                else 
            {
                    ?>
                <span style="font-weight: bold; color: red">
                <?php 
                echo $em->employee->name ;
               ?>
                </span>
                <?php 
                
            }
                ?></a>
            <ul>
              <li>
                <a class="tvi-member" href="#">
                    <div class="responsivewrapper" style="background-image: url( <?php echo Yii::app()->request->baseUrl . $em->employee->logo ?> ) ">

                  </div>
                  <div class="profile_member_info">
                   <!--<span>Leader STeam: Phạm Kiều Thanh</span>-->
                   <span>Ngày vào TVi: <?php echo $em->intership_start ?></span>
                   <span>Sinh nhật: <?php echo $em->employee->birthdate ?></span>
                 </div>
               </a>
             </li>
           </ul>
         </li>
            
            <?php
}


?>
<!--            
          <li>
            <a href="#">Phạm Kiều Thanh</a>
            <ul>
              <li>
                <a class="tvi-member" href="#">
                  <div class="responsivewrapper" style="background-image: url(img/chibi/thanh-kieu.png)">
                  </div>
                  <div class="profile_member_info">
                   <span>Leader STeam: Phạm Kiều Thanh</span>
                   <span>Ngày vào TVi: 19/10/2013</span>
                   <span>Sinh nhật: 8/1/1992</span>
                 </div>
               </a>
             </li>
           </ul>
         </li>
         <li>
          <a href="#">Lê Đức Việt</a>
          <ul>
            <li>
              <a class="tvi-member" href="#">
                <div class="responsivewrapper" style="background-image: url(img/chibi/viet.png)">
                </div>
                <div class="profile_member_info">
                 <span>Lê Đức Việt </span>
                 <span>Ngày vào TVi: ...</span>
                 <span>Sinh nhật: ...</span>
               </div>
             </a>
           </li>
         </ul>
       </li>
       <li>
        <a href="#">Nguyễn Văn Đỉnh</a>
        <ul>
          <li>
          <a class="tvi-member" href="#">
              <div class="responsivewrapper" style="background-image: url(img/chibi/dinh.png)">
              </div>
              <div class="profile_member_info">
               <span>Nguyễn Văn Đỉnh</span>
               <span>Ngày vào TVi: ...</span>
               <span>Sinh nhật: ...</span>
             </div>
           </a>
         </li>
       </ul>
     </li>
     <li>
      <a href="#">Hoàng Đình Công</a>
      <ul>
        <li>
          <a class="tvi-member" href="#">
            <div class="responsivewrapper" style="background-image: url(img/chibi/cong.png)">
            </div>
            <div class="profile_member_info">
             <span>Hoàng Đình Công</span>
             <span>Ngày vào TVi: ...</span>
             <span>Sinh nhật: ...</span>
           </div>
         </a>
       </li>-->
     </ul>
   </li>
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


