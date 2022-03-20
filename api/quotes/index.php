<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Origin,Content-Type, Access-Control-Allow-Methods,Authorization, X-Requested-With');

$database = new Database();
$db = $database->connect();

$method = $_SERVER['REQUEST_METHOD'];
$isAnId = filter_input(INPUT_GET, "id");
$isAnAuthorId = filter_input(INPUT_GET, "authorId");
$isAnCategoryId = filter_input(INPUT_GET, "categoryId");

if(!empty($isAnId) && $method == 'GET') {
    include('./quotes_read_single.php');
}
else if($method == 'GET') {
    include('./quotes.php');
} 

?>