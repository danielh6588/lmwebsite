<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<ul class="nav nav-tabs">
    <?php foreach ($Adminmenu as $menu): ?>
    <li><?php echo $this->html->link($menu['AdminMenu']['title'], $menu['AdminMenu']['link']); ?></li>
    <?php endforeach;?>
</ul>


