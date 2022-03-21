<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
}

$isAnId = filter_input(INPUT_GET, "id");

 if (isset($isAnId) && $method == 'GET') {
    include('./read_single.php');
}
else if ($method == 'GET') {
    include('./authors.php');

} 
else if ($method == 'PUT') {
    include('./update.php');
}
else if ($method == 'DELETE') {
    include('./delete.php');
}

if ($method == 'POST') {
    include('./create.php');
}
?>