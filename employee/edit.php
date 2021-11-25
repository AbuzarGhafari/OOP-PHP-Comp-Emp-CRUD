<?php
$title = 'Edit Employee Info';
include('../templates/header.php');
include('../templates/nav.php');

include('../App/Models/Company.php');
include('../App/Models/Employee.php');

if (isset($_GET['id'])) {
    $employee = Employee::findFirst($_GET['id']);
}
?>


<div class="mb-4 py-2">
    <h1 class="display-5 fw-bold mb-2">Edit Employee</h1>
</div>


<form action="../App/Controllers/EmployeeController.php" method="POST">
    <?php include('form.php'); ?>
    <input type="hidden" name="id" value="<?php echo $employee['id'] ?>">
    <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>
</form>




<?php include('../templates/footer.php'); ?>