<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>
<div class="page-header">
<h3>Edit Holiday - <?php echo $holiday['Holiday']['title']; ?></h3>
</div>
<?php 
echo $this->Form->create('Holiday');
?>

<div class="form-group">
<?php echo $this->Form->input('title') ?>
</div>