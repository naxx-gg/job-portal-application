<?php include 'inc/header.php';?>
<h2 class="page-header"> <?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small>Posted By <?php echo $job->contact_user;?> on <?php echo $job->post_date;?></small>
<hr>
<p class="lead"><?php echo $job->description;?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Company:</strong> <?php echo $job->company;?></li>
    <li class="list-group-item"><strong>Salary:</strong> <?php echo $job->salary;?></li>
    <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contact_email;?></li>
</ul>
<br><br>
<a href="index1.php">Go Back</a>
<form style="display:inline"
    method="post" action="apply.php"><input type="hidden" name="del_id" value="<?php echo $job->id;?>">
    <input type="submit" class="btn btn-success" value="Apply">
</form>
<br><br>

<?php include 'inc/footer.php';?>