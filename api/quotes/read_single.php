<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Quote.php';


$database = new Database();
$db = $database->connect();

// instantiation of the quote/quotes

$quote = new Quote($db);

// one quote by ID logic
$quote->id = isset($_GET['id']) ? $_GET['id'] : die();

// get quote from read single method

$quote->read_single();

$quote_arr = array (
    'id' => $quote->id,
    'quote' => $quote->quote,
    'author' => $quote->author,
    'category' => $quote -> category
);

// convert to json

if($quote->id !== null) {
    print_r(json_encode($quote_arr));
}
else {
    echo json_encode(
        array('message' => 'No Quotes Found')
    );
}



?>