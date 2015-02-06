<?php
$this->pageTitle = Yii::app()->name . ' - Login';
?>




    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array("class" => "form-horizontal"),
            ));
    ?>
<h1 style="font-size: 70px ;">Đăng nhập</h1>
   <div class="control-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>

<div class="control-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
    <br>
    <div class="controls">
        <?php echo $form->passwordField($model, 'password'); ?>
        <span style="color: red; margin-top: 30px"> <?php echo $form->error($model, 'password'); ?> </span>
    </div>
</div>

<div class="control-group">
     <?php echo CHtml::submitButton('Đăng nhập',array('class'=>'btn btn-primary','style'=>'float:left; margin-right:100px; margin-top: 20px;')); ?>
</div>

<?php $this->endWidget(); ?>