<?php
    /**
     * Created by $Mitonios Editor.
     * User: $Mitonios
     * Date: 1/03/13
     * Time: 3:24 PM
     */
    /* @var $item Product */
?>
<div id="new-product" class="list-product">
    <h3>Tìm kiếm: <?php echo $_REQUEST['v']?></h3>
    <?php $this->renderPartial('/site/products', array('items' => $items))?>
</div>
<div id="pagination">
    <?php $this->widget('CLinkPager', array(
    'pages'       => $pages,
    'htmlOptions' => array('class' => 'pager'),
    'header'      => ''
));
    ?>
</div>