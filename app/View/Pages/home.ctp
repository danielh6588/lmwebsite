<?php
/**
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

?>
<div class="row">
<?php foreach ($specials as $special): ?>


    <div class="col-xs-4">
        <a href="/<?php echo $special['Holiday']['id']?>" class="thumbnail">
            <img style="height:189px;" src="<?php echo $special['Holiday']['image_url']; ?>" alt="<?php echo $special['Holiday']['title']; ?>">
            <div class="caption">
                <h4><?php echo $special['Holiday']['short_title']?></h4>
            </div>
            
        </a>
    </div>


<?php endforeach; ?>
</div>