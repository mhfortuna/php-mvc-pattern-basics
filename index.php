<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

include_once "config/constants.php";

// In the event that the controller passed by URL does not exist, you must show the error view.

if (isset($_GET['controller'])) {
    if ($_GET['controller'] === 'employee') {
        require_once CONTROLLERS . 'employeeController.php';
    } elseif ($_GET['controller'] === 'department') {
        require_once CONTROLLERS . 'departmentController.php';
    }
} else {
    require_once VIEWS . 'main/main.php';
}
