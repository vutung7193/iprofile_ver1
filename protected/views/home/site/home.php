<!DOCTYPE html>
<html>
<head>
	<title>TVI-Iprofile </title>
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
          <a href="http://localhost/iprofile/"><img src="img/ip-logo.png" width="96"></a>
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


 <div id="iprofile_home">
  <div id="wrapper">
    <ul>
      <li>
        <a target="_blank" href="http://vuonuomtinhvan.com" class="label tvi" title="Vườn ươm Tinh Vân">
        <p><img src="<?php echo Yii::app()->request->baseUrl ?>/css/img/logoTVi.png"></p>
        Tinh Vân Incubator</a>
    <ul class="branch lv">
        <li class="entry director">
            <a href="#" rel="div.localvisible1" class="jt1 label" title="Giám đốc Nguyễn Minh Đức">Bầu Đức</a>
       <ul class="branch lv1">
           
           <?php
           foreach ($team as $team)
           {
               ?>
             <li class="entry">
            <a href="<?php echo $this->createUrl('/site/team', array('id' =>$team->id)) ?>" class="label" title="<?php echo $team->name ?>"><?php echo $team->name ?> </a>
            <ul class="branch lv2">
                
                <?php 
                $em = employeeWork::model()->findAll("team_id = {$team->id}");
                foreach ($em as $em)
                {
                    ?>
                  
                <li class="entry">
                 
                  <a href="<?php 
                  
                  
                  echo $this->createUrl('/site/detailEmployee', array('id' =>$em->employee_id)) ?>" class="label"><?php echo $em->employee->name ?></a>
                </li>
               
              
             
                    <?php
                }
                ?>
            
            </ul>
          </li>
           
               <?php
           }
           ?>
           
           
           
<!--           
          <li class="entry">
            <a href="#" class="label" title="S Team">S Team</a>
            <ul class="branch lv2">
              <li class="entry">
                <a href="#" rel="div.localvisible2" class="jt2 label leader">
                 Phạm Kiều Thanh</span></a>
                 <li class="entry">
                  <a href="#" rel="div.localvisible3" class="jt3 label">Lê Đức Việt</a>
                </li>
                <li class="entry">
                  <a href="" class="label">Nguyễn Văn Đỉnh</a>
                </li>
                <li class="entry">
                  <a href="" class="label">Hoàng Đình Công</a>
                </li>
              </li>
            </ul>
          </li>

          <li class="entry">
            <a href="<?php echo $this->createUrl('/site/team', array('id' =>1)) ?>" class="label" title="PHP Team">PHP Team</a>
            <ul class="branch lv2">
              <li class="entry">
                <a href="#" class="label leader">Lương Bá Trung</a>
                <li class="entry">
                 <a href="#" class="label">Vũ Tùng</a>
               </li>
               <li class="entry">
                <a href="#" class="label">Lê Hữu Đông</a>
              </li>
            </li>
          </ul>
        </li>
        <li class="entry">
          <a href="#" class="label" title="Game Studio">Game Studio</a>
          <ul class="branch lv2">
            <li class="entry">
              <a href="#" class="label leader">Nguyễn Quang Nam</a>
              <li class="entry">
               <a href="#" class="label">Nguyễn Văn Đan</a>
             </li>
             <li class="entry">
              <a href="#" class="label">Đặng Minh Thắng</a>
            </li>
            <li class="entry">
              <a href="#" class="label">Lê Trung Hiếu</a>
            </li>
            <li class="entry">
              <a href="#" class="label">Lê Hoàng Yến</a>
            </li>
          </li>
        </ul>
      </li>
      <li class="entry">
        <a href="#" class="label" title="Mobile Team">Mobile Team</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label leader">Lê Thường Quân</a>
            <li class="entry">
              <a href="#" class="label">Lê Văn Phong</a>
            </li>
            <li class="entry">
              <a href="#" class="label">Hán Việt Hưng</a>
            </li>
            <li class="entry">
              <a href="#" class="label">Vũ Mạnh Trường</a>
            </li>
          </li>  
        </ul>   
      </li>
      <li class="entry">
        <a href="#" class="label" title="Design Team">Design Team</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label leader">Nguyễn Hoài Sơn</a>
            <li class="entry">
              <a href="#" class="label">Hồ Thu Hiền</a>
            </li>    
            <li class="entry">
              <a href="#" class="label">Nguyễn Minh Hải</a>
            </li> 
          </li>
        </ul>
      </li>
      <li class="entry">
        <a href="#" class="label" title="Marketing">Marketing</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label">Phùng Bảo Trân</a>
          </li>
          <li class="entry">
            <a href="#" class="label">Huệ Phương</a>
          </li>    
        </ul>
      </li>
      <li class="entry">
        <a href="#" class="label" title="PR Team">PR Team</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label leader">Vũ Dương Đô</a>
          </li>
          <li class="entry">
            <a href="#" class="label">Lê Thị Thúy</a>
          </li>    
        </ul>
      </li>
      <li class="entry">
        <a href="#" class="label" title="HR Team">HR Team</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label">Mạc Khánh Huyền</a>
          </li>
          <li class="entry">
            <a href="#" class="label">Đặng Thị Liên</a>
          </li>    
        </ul>
      </li>
      <li class="entry">
        <a href="#" class="label" title="QA / Tester">QA / Tester</a>
        <ul class="branch lv2">
          <li class="entry">
            <a href="#" class="label">Vũ Thu Hiền</a>
          </li>
          <li class="entry">
            <a href="#" class="label">Đỗ Thị Thanh</a>
          </li>    
        </ul>
      </li>-->
    </ul>
    </li>
    </ul>
  </li>
</ul>
</div>
</div>



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
<div class="localvisible2" style="display: none;">
  <div class="responsivewrapper" style="background-image: url(img/chibi/thanh-kieu.png)">
  </div>
  <div class="profile_member_info">
   <ul>
     <li>Leader STeam: Phạm Kiều Thanh</li>
     <li>Ngày vào TVi: 19/10/2013</li>
     <li>Sinh nhật: 8/1/1992</li>
   </ul>
 </div>
</div>
<div class="localvisible3" style="display: none;">
  <div class="responsivewrapper" style="background-image: url(img/chibi/viet.png)">
  </div>
  <div class="profile_member_info">
   <ul>
     <li>Lê Đức Việt</li>
     <li>Ngày vào TVi: ...</li>
     <li>Sinh nhật: ...</li>
   </ul>
 </div>
</div>



<script>
  $(document).ready(function() {
    $('.tt').tooltip();  
    for(i=1;i<20;i++){
      jtID = $('a.jt' + i);
      jtID.cluetip ({cluetipClass: 'rounded', arrows: false, local: true, hideLocal: false});
    }
  });
</script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/js/bootstrap.min.js"></script>

</body>
</html>


