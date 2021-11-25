<?php
$title = 'Edit Company Info';
include('../templates/header.php');
include('../templates/nav.php');

include('../App/Models/Company.php');

if (isset($_GET['id'])) {
    $company = Company::findFirst($_GET['id']);
}
?>


<div class="mb-4 py-2">
    <h1 class="display-5 fw-bold mb-2">Edit Company</h1>
</div>


<form action="../App/Controllers/CompanyController.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $company['id']; ?>">
    
    <?php include('form.php'); ?>
    
    <button type="submit" name="update" value="Update Company" class="btn btn-primary">Update</button>
    
</form>




<?php include('../templates/footer.php'); ?>