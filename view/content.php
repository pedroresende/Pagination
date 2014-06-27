<?php

use Pagination\Pagination;
use Pagination\Render;

/*** POST AND SESSION VALIDATION ***/
if (!empty($_POST) && is_numeric($_POST['current_page']) && is_numeric($_POST['total_pages']) && is_numeric($_POST['boundaries']) && is_numeric($_POST['around'])) {
    $current_page = $_POST['current_page'];
    $total_pages = $_POST['total_pages'];
    $boundaries = $_POST['boundaries'];
    $around = $_POST['around'];
    $_SESSION['current_page'] = $current_page;
    $_SESSION['total_pages'] = $total_pages;
    $_SESSION['boundaries'] = $boundaries;
    $_SESSION['around'] = $around;
} else {
    if (!empty($_SESSION) && is_numeric($_POST['current_page']) && is_numeric($_POST['total_pages']) && is_numeric($_POST['boundaries']) && is_numeric($_POST['around'])) {
        $current_page = $_SESSION['current_page'];
        $total_pages = $_SESSION['total_pages'];
        $boundaries = $_SESSION['boundaries'];
        $around = $_SESSION['around'];
    } else {
        $current_page = 5;
        $total_pages = 10;
        $boundaries = 2;
        $around = 2;
    }
}

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = $_GET['page'];
    $_SESSION['current_page'] = $current_page;
}
/*** POST AND SESSION VALIDATION ***/

$page = new Pagination($current_page, $total_pages, $boundaries, $around);
$list = $page->displayPagination();

$render = new Render($current_page, $total_pages, $list);
echo $render->view();
