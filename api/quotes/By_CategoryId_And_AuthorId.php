<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods,Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/Quote.php';
include_once '../../models/Author.php';
include_once '../../models/Category.php';

$database = new Database();
$db = $database->connect();

$quote = new Quote($db);

$quote->categoryId = isset($_GET['categoryId']) ? $_GET['categoryId'] : die();
$quote->authorId = isset($_GET['authorId']) ? $_GET['authorId'] : die();

$result = $quote->getQuotesByAuthorIdAndCategoryId();

$num = $result->rowCount();

 if($num > 0) {
    $quote_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $quote_item = array( 
            'id' => $id,
            'quote' => html_entity_decode($quote),
            'author' => $author,
            'category' => $category
        );

        array_push($quote_arr, $quote_item);
 }
 print_r(json_encode($quote_arr));

} else {
    echo json_encode(
        array('message' => 'No quotes found')
    );
}
?>