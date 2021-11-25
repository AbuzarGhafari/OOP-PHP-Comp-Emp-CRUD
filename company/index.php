<?php
$title = 'Company Management System';
include('../templates/header.php');
include('../templates/nav.php');


include('../App/Models/Company.php');
?>


<div class="mb-4 py-2 mt-2">
    <div class="row">
        <div class="col">
            <h1 class="display-5 fw-bold mb-2">Companies List</h1>
        </div>
        <div class="col text-end">
            <a href="create.php" class="btn btn-primary btn-lg">Add New Company</a>
        </div>
    </div>
</div>


<ul class="list-group">
    <?php
    $companies = Company::all();
    foreach ($companies as $company) {
        echo '<li class="list-group-item">
                    <div class="row">
                        <div class="col"><a href="show.php?id=' . $company['id'] . '" class="link-primary">' . $company['name'] . '</a></div>
                        <div class="col">' . $company['email'] . '</div>
                        <div class="col">' . $company['phone'] . '</div>
                        <div class="col">' . $company['address'] . '</div>
                        <div class="col">' . $company['website'] . '</div>
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
                    <div class="col">Website Link</div>
                    <div class="col-1 text-end"><a href="#" class="link-primary">Edit</a></div>
                </div>
            </li> -->
</ul>



<?php include('../templates/footer.php'); ?>