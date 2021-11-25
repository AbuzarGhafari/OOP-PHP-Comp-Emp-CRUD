<?php
$title = 'Employyes List';
include('../templates/header.php');
include('../templates/nav.php');

include('../App/Models/Employee.php');
?>


<div class="mb-4 py-2 mt-2">
    <div class="row">
        <div class="col">
            <h1 class="display-5 fw-bold mb-2">Employees List</h1>
        </div>
        <div class="col text-end">
            <a href="create.php" class="btn btn-primary btn-lg">Add New Employee</a>
        </div>
    </div>
</div>


<ul class="list-group">
    <?php
    $employees = Employee::all();
    foreach ($employees as $employee) {
        echo '<li class="list-group-item">
                    <div class="row">
                        <div class="col"><a href="show.php?id=' . $employee['id'] . '" class="link-primary">' . $employee['name'] . '</a></div>
                        <div class="col">' . $employee['email'] . '</div>
                        <div class="col">' . $employee['phone'] . '</div>
                        <div class="col">' . $employee['address'] . '</div>
                        <div class="col"><a href="../company/show.php?id=' . $employee['company_id'] . '" class="link-primary">' . Employee::company($employee['company_id']) . '</a></div>
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
                    <div class="col">Company Name</div>
                    <div class="col-1 text-end"><a href="show.php" class="link-primary">Edit</a></div>
                </div>
            </li> -->
</ul>


<?php include('../templates/footer.php'); ?>