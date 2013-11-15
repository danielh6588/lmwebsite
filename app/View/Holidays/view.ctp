<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
<div class="page-header">
<h1>
<?php echo $holiday['Holiday']['title']; ?>
</h1>

</div>

<div class="row">
    <div class="col-xs-5">
        <img class="img-thumbnail" style="height:180px;width:250px;" src="<?php echo $holiday['Holiday']['image_url']; ?>" alt="<?php echo $holiday['Holiday']['title']; ?>">
    </div>
    <div class="col-xs-7">
        
            <h4>Rating: 
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </h4>
        
        <h2><span class="label label-primary">
            
                <?php 
                if (!$holiday['Holiday']['price']) {
                    
                    echo "Call for a price";
                } else {
                    echo $holiday['Holiday']['price'];
                };
                ?>
            </span>
        </h2>
    </div>
</div>
    <div class="clearfix"><br /></div>
<blockquote>
  <p>Book this holiday today by calling FREE 0800 043 1382</p>
</blockquote>

<div class="well">
    <div class="panel-body">
        <p><?php echo $holiday['Holiday']['desc']; ?></p>
    </div>
</div>
    
</div>