<?php
$title = 'Company Details';
include('../templates/header.php');
include('../templates/nav.php');

include('../App/Models/Company.php');

if (isset($_GET['id'])) {
    $company = Company::findFirst($_GET['id']);
}


?>

<div class="mb-4 py-2">
    <h1 class="display-5 fw-bold mb-2"><?php echo $company['name']; ?> Company Details</h1>
    <a href="edit.php?id=<?php echo $company['id']; ?>" class="btn btn-info">Edit</a>
    <form action="../App/Controllers/CompanyController.php" style="display: inline;" method="POST">
        <input type="hidden" name="id" value="<?php echo $company['id']; ?>">
        <input type="submit" value="Delete" name="delete" class="btn btn-danger">
    </form>
</div>


<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-2">Name</div>
            <div class="col"><?php echo $company['name']; ?> </div>
        </div>
        <div class="row">
            <div class="col-2">Email</div>
            <div class="col"><?php echo $company['email']; ?> </div>
        </div>
        <div class="row">
            <div class="col-2">Phone</div>
            <div class="col"><?php echo $company['phone']; ?> </div>
        </div>
        <div class="row">
            <div class="col-2">Address</div>
            <div class="col"><?php echo $company['address']; ?> </div>
        </div>
        <div class="row">
            <div class="col-2">Website</div>
            <div class="col"><?php echo $company['website']; ?> </div>
        </div>
    </div>
</div>

<h3 class="display-5">Employees</h3>

<ul class="list-group">
    <?php
    $employees = Company::employees($_GET['id']);
    foreach ($employees as $employee) {
        echo '<li class="list-group-item">
                    <div class="row">
                        <div class="col"><a href="../employee/show.php?id=' . $employee['id'] . '" class="link-primary">' . $employee['name'] . '</a></div>
                        <div class="col">' . $employee['email'] . '</div>
                        <div class="col">' . $employee['phone'] . '</div>
                        <div class="col">' . $employee['address'] . '</div>
                    </div>
                </li>';
    }
    ?>
    <!-- <li class="list-group-item">
                <div class="row">
                    <div class="col">Name</div>
                    <div class="col">Email</div>
                    <div class="col">Phone</div>
                    <div class="col">Address</div>
                    <div class="col-1 text-end"><a href="#" class="link-primary">Edit</a></div>
                </div>
            </li> -->
</ul>





<?php include('../templates/footer.php'); ?>