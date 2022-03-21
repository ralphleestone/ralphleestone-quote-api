<?php
function isValid($id,$model) {
    $model->id = $data->id;
    $result = $model->read_single();
    return $result;
}
?>