<?php
/**
 * Created by PhpStorm.
 * User: soulman
 * Date: 04.03.17
 * Time: 12:24
 */

require_once 'db_connect.php';

function select_record($table_name, $field_name = false, $params = false, $first_record_force = false){
    $records = [];
    global $connect;
    $query_string = "SELECT * FROM $table_name";
    if ($field_name && $params) {
        $query_string .= " WHERE $field_name=$params";
    }
    $query = mysqli_query($connect, $query_string);
    if ($first_record_force) {
        $records = mysqli_fetch_object($query);       // чтобы не использовать foreach
    }else{
        while ($result = mysqli_fetch_object($query)) {
            $records[] = $result;
        }
    }
    return $records;
}

function delete_record($table_name, $field, $params){
    global $connect;
    $query_string = "DELETE FROM $table_name WHERE $field = $params";
    return mysqli_query($connect, $query_string);
}

function create_record($table_name, $description, $title, $post_id)
{
    global $connect;
    $query_string = "INSERT INTO $table_name ";

    if ($title) {
        $query_string .= "(title, description) VALUES ('$title', '$description')";
    }
    elseif ($post_id) {
        $query_string .= "(post_id, content) VALUES ('$post_id', '$description')";
    }
    return mysqli_query($connect, $query_string);
}

function edit_record($table_name, $description, $id, $title){
    global $connect;
    $query_string = "UPDATE $table_name SET ";
    if ($title){
        $query_string .="title='$title', description='$description' WHERE id=$id";
    }else{
        $query_string .="content='$description' WHERE id=$id";
    }
    return mysqli_query($connect, $query_string);
}