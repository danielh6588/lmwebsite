<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="page-header">
    <h3>Your Holidays</h3>

    <table class="table table-striped table-hover">
        <tr>
        <th></th>
        <th>Holiday Title</th>
        <th>Homepage</th>
        <th>Price</th>
        <th>Actions</th>
        </tr>
<?php foreach ($holidays as $holiday): ?>
        <tr>
            <td style="vertical-align: middle;"><span class="thumbnail"><img style="height:75px; width: 75px;" src="<?php echo $holiday['Holiday']['image_url']; ?>" alt="<?php echo $holiday['Holiday']['title']; ?>"></span></td>
            <td style="vertical-align: middle;"><?php echo $holiday['Holiday']['title'] ?></td>
            <td style="vertical-align: middle;"><?php if ($holiday['Holiday']['special'] == 1) {echo "Yes";}else {echo "No";}; ?></td>
            <td style="vertical-align: middle;"><?php if ($holiday['Holiday']['price']) {echo $holiday['Holiday']['price'];}else {echo "No Price";}; ?></td>
            <td style="vertical-align: middle;"><a class="btn btn-primary" href=holidays/edit>Edit</a></td>
        </tr>
        

<?php endforeach; ?>
    </table>
</div>

