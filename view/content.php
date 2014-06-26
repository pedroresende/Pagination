<?php

use Pagination\Pagination;

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
    if (!empty($_SESSION)) {
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

$page = new Pagination($current_page, $total_pages, $boundaries, $around);

if ($current_page < 1 || $current_page > $total_pages) {
    $current_page = 1;
}
$output = null;
$output .= '<ul class="pagination">';

$list = $page->displayPagination();
$pages = explode(' ', $list);

foreach ($pages as $page) {
    if ($page == $current_page) {
        $output .= '<li class="active"><a href="#">' . $page . '</a></li>';
    } else {
        if ($page != '...') {
            $output .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?page=' . $page . '">' . $page . '</a></li>';
        } else {
            $output .= '<li><a href="#">' . $page . '</a></li>';
        }
    }
}

$output .= '</ul>';
echo $output;
