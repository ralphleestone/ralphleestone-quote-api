<?php 
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    $method = $_SERVER['REQUEST_METHOD'];
    
    if ($method === 'OPTIONS') {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
    }
    
    $isAnId = filter_input(INPUT_GET, "id");
    $isAnAuthorId = filter_input(INPUT_GET, "authorId");
    $isAnCategoryId = filter_input(INPUT_GET, "categoryId");
    
    if ($method == 'PUT') {
        include('./update.php');
    }
    else if ($method == 'DELETE') {
        include('./delete.php');
    }
    else if ($method == 'POST') {
        include('./create.php');
    }
    else if(!empty($isAnId)) {
        include('./read_single.php');
    }
    else if (!empty($isAnCategoryId) && !empty($isAnAuthorId)) {
        include('./By_CategoryId_And_AuthorId.php');
    }
    else if (!empty($isAnAuthorId)) {
        include('./By_AuthorId.php');
    }
    else if (!empty($isAnCategoryId)) {
        include('./By_CategoryId.php');
    }
    else if($method == 'GET') {
        include('./quotes.php');
    }
?>