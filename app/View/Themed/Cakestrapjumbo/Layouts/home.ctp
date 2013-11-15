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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
			// Uncomment this to enable the bootstrap gradient theme (Flat is way better though).
			//echo $this->Html->css('bootstrap-theme.min');
			echo $this->Html->css('core');

			echo $this->fetch('css');
			
			echo $this->Html->script('libs/jquery-1.10.2.min');
			echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>

	<body>
        <!-- Main jumbotron for a primary marketing message or call to action -->
           <div class="jumbotron">
             <div class="container">
               <h1>Hello, world!</h1>
               <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
               <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
             </div>
           </div>            

		<div class="container">
		
			<div id="header" class="container">
				<?php echo $this->element('menu/top_menu'); ?>
			</div><!-- /#header .container -->
			
			<div id="content" class="container">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div><!-- /#header .container -->
			<br />
			<footer>
                        <p>&copy; Company 2013</p>
                        </footer>
			
		</div><!-- /#main-container -->
		
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

