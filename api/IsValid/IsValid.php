<?php
include_once '../../config/Database.php';
include_once '../../models/Quote.php';
include_once '../../models/Author.php';
include_once '../../models/Category.php';

function isValid($id, $model) {
    $model->id = $id;
    $modelResult = $model->read_single();
    return $modelResult;
  }
?>