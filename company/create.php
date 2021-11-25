<?php
$title = 'Add Company';
include('../templates/header.php');
include('../templates/nav.php');
?>


<div class="mb-4 py-2">
    <h1 class="display-5 fw-bold mb-2">Add New Company</h1>
</div>


<form action="../App/Controllers/CompanyController.php" method="POST">

    <?php include('form.php'); ?>
    
    <button type="submit" name="add" value="Add New Company" class="btn btn-primary">Add</button>

</form>



<?php include('../templates/footer.php'); ?>