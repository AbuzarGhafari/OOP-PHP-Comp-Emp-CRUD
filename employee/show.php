<?php
$title = 'Employee Details';
include('../templates/header.php');
include('../templates/nav.php');

include('../App/Models/Employee.php');

if (isset($_GET['id'])) {
    $employee = Employee::findFirst($_GET['id']);
}

?>

<div class="mb-4 py-2">
    <h1 class="display-5 fw-bold mb-2"><?php echo $employee['name'] ?> Details</h1>
    <a href="edit.php?id=<?php echo $employee['id'] ?>" class="btn btn-info">Edit</a>
    <form action="../App/Controllers/EmployeeController.php" style="display: inline;" method="POST">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <input type="submit" value="Delete" name="delete" class="btn btn-danger">
    </form>
</div>


<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-2">Name</div>
            <div class="col"><?php echo $employee['name'] ?></div>
        </div>
        <div class="row">
            <div class="col-2">Email</div>
            <div class="col"><?php echo $employee['email'] ?></div>
        </div>
        <div class="row">
            <div class="col-2">Phone</div>
            <div class="col"><?php echo $employee['phone'] ?></div>
        </div>
        <div class="row">
            <div class="col-2">Address</div>
            <div class="col"><?php echo $employee['address'] ?></div>
        </div>
        <div class="row">
            <div class="col-2">Company</div>
            <div class="col"><a href="../company/show.php?id=<?php echo $employee['company_id']; ?>"><?php echo Employee::company($employee['company_id']); ?></a></div>
        </div>
    </div>
</div>




<?php include('../templates/footer.php'); ?>