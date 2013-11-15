<h2><?php echo $currentCat['Category']['cname']; ?></h2>

<?php 

foreach ($holidays as $holiday): ?>
<div class="well">
    <div class="row">
        <div class="col-xs-4">
            <a href="/holidays/view/<?php echo $holiday['Holiday']['id']?>" class="thumbnail">
                <img style="height:150px;" src="<?php echo $holiday['Holiday']['image_url']; ?>" alt="<?php echo $holiday['Holiday']['title']; ?>">
            </a>
            
        </div>
        <div class="col-xs-6">
            <div class="caption">
           <h3><?php echo $holiday['Holiday']['short_title']?></h3>
           <p><?php echo substr($holiday['Holiday']['desc'], 0, 132)."...";?></p>
           <a href="/holidays/view/<?php echo $holiday['Holiday']['id']?>" class="btn btn-primary" role="button">Find out more about this <?php echo $currentCat['Category']['cname']; ?> holiday</a>
            </div>    
            
        </div>
    </div>
</div>
<?php 
endforeach;
?>