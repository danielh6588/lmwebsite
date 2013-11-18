<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>
<div class="page-header">
<h3>Edit Holiday - <?php echo $holidays['Holiday']['title']; ?></h3>
</div>
<?php 

?>
<div class="row">
    <div class="col-xs-6">
    
    <?php echo $this->Form->create('Holiday', array('inputDefaults' => array('class' => 'form-control'))); ?> 
        <div class="form-group">
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
        </div>
        <div class="form-group">
    <?php echo $this->Form->input('title') ?>
        </div>
        <div class="form-group">
    <?php echo $this->Form->input('short_title') ?>
        </div>
        <div class="form-group">
    <?php echo $this->Form->input('cat_id') ?>
        </div>
        <div class="form-group">
    <?php echo $this->Form->input('desc', array('rows' => 3)) ?>
        </div>
    <br />
    <?php echo $this->Form->button('Save Holiday', array('class'=>'btn btn-danger')); ?>
    
    </div>
    <div class="col-xs-6">
        <h4>Current Image</h4>
        <?php echo $this->Html->image($holidays['Holiday']['image_url'], 
                array(
                    'class' => 'thumbnail',
                    'style' => 'width:350px; height:250px;'
                    )); ?>
         <?php echo $this->Form->input('image_url') ?>
    </div>
</div>