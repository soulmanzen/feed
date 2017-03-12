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

/**
 * @param $table_name String #Имя таблицы
 * @param $params Array #Ассоциативный массив - ключ - это имя поля, значение
 */


function create_record($table_name, $params)
{
    if(empty($params)) return false;
    $query_string = "INSERT INTO `$table_name` ";
    $field_names = '('.implode(array_keys($params), ', ').')';
    global $connect;
    $field_values = ' VALUES (' . implode(array_map(function ($value) use ($connect) {
        return '\''. mysqli_real_escape_string($connect, $value) . '\'';
        }, $params), ', '). ')';
    $query_string .= $field_names.$field_values;
    return mysqli_query($connect, $query_string);
}

function update_record($table_name, $params, $field_name = ''){
    global $connect;
    $query_string = "UPDATE $table_name SET ";
    $force_id = null;
    if(array_key_exists('id',$params)){
        $force_id = $params['id'];
        unset($params['id']);
    }
    array_walk($params, function(&$value, $key) use ($connect, $query_string){
        $value = "$key = '" . mysqli_real_escape_string($connect, $value) . '\'';
    });
//    var_dump($params);
    $query_string .= implode($params, ', ');
    if (($field_name && $params[$field_name]) || $force_id){
        if (!$field_name || ($field_name && !array_key_exists($field_name, $params))) {
            $field_name = 'id';
            $field_value = mysqli_real_escape_string($connect, $force_id);
        }else{
            $field_value = mysqli_real_escape_string($connect, $params[$field_name]);
        }
        $query_string .= "WHERE $field_name = $field_value";
    }
//        var_dump($params);
    return mysqli_query($connect, $query_string);
}