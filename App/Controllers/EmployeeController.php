<?php

include_once('../Models/Employee.php');

if (isset($_POST['add'])) {

    // echo '<pre>';
    // print_r($_POST);
    // exit;

    Employee::insert([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'company_id' => $_POST['company_id']
    ]);

    header('Location: ' . '../../employee/index.php');
    exit;
} else if (isset($_POST['update'])) {

    // echo '<pre>';
    // print_r($_POST);
    // exit;
    Employee::update($_POST['id'], [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'company_id' => $_POST['company_id']
    ]);

    header('Location: ' . '../../employee/show.php?id=' . $_POST['id']);
    exit;
} else if (isset($_POST['delete'])) {

    Employee::delete($_POST['id']);

    header('Location: ' . '../../employee/index.php');
    exit;
}
