<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h2><small>Holiday Destinations</small></h2>
<ul class="nav nav-pills nav-stacked">
    <li><?php echo $this->html->link('Home', '/'); ?></li>
    <?php foreach ($Category as $cat): ?>
    <li><?php echo $this->html->link($cat['Category']['cname'], '/categories/view/'.$cat['Category']['id']); ?></li>
    <?php endforeach;?>
</ul>


