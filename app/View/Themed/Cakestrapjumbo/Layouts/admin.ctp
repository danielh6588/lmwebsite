<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('LM Travel', 'LM Travel');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?> :
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('main');
                        echo $this->Html->css('bootstrap');

			echo $this->fetch('css');

			echo $this->fetch('script');
		?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
  
                
<div id="wrap">
    <div id="top"><img src="http://lmtravel.localhost/theme/Cakestrapjumbo/images/logo.png"></div>
    
    <div class="container">
    <?php echo $this->element('menu/adminmenu'); ?>
  

    <div class="row">

        
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
            <div class="clear"></div>

    <div class="clear"></div>   
    </div>
    </div>

<footer>
    <p>All rights reserved. Lesley Moitie Travel &COPY; <?php echo date('Y'); ?></p>            
</footer>    

</div>

                

		
                <?php  
                if($this->element('sql_dump')) {
		echo '<div class="container">';
			echo '<div class="well well-sm">';
				echo '<small>';
					echo $this->element('sql_dump');
				echo '</small>';
			echo '</div>';
		echo '</div><!-- /.container -->';
                }
               ?>         
		
	</body>

</html>

