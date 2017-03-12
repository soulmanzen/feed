<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.03.17
 * Time: 19:29
 */


require_once 'lib/flash_messages.php';
require_once 'lib/db_connect.php';
require_once 'lib/db_queries.php';


//$query = "INSERT INTO posts (title, description) VALUES ('$title', '$description')";
//$result = mysqli_query($connect, $query);
$result = create_record('posts', $_POST);
if(!$result){
    print_r(mysqli_error_list($connect));
}else{
    set_flash_message ('message', "Ваш пост сохранен! $title");
    return header('Location:/');
}

