<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 22.02.17
 * Time: 21:46
 */


mysqli_select_db($connect, 'feed');
echo '<pre>';
var_dump($post);
echo '</pre>';
$query = mysqli_query($connect,"SELECT * FROM posts WHERE id=3)");
while($post = mysqli_fetch_object($query)){
    echo '<pre>';
    var_dump($post);
    echo '</pre>';
}

