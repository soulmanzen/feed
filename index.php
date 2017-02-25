<?php
/**
 * Created by PhpStorm.
 * User: soulman
 * Date: 22.02.17
 * Time: 21:42
 */

require_once 'lib/db_connect.php';

?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <table class="table">            <!-- Таблица-->
        <thead>                 <!-- Заголовок таблицы-->
            <th>ID</th>         <!-- Заголовок таблицы th-->
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Ссылка</th>
        </thead>
        <tbody>                    <!-- тело таблицы где даные-->
            <?php
            $query = mysqli_query($connect, "SELECT * FROM posts");
            $post = mysqli_fetch_object($query);

            while ($post = mysqli_fetch_object($query)) {
                echo '<tr>';
                echo '<td>',$post->id,'</td>';
                echo '<td>',$post->title,'</td>';
                echo '<td>',$post->description,'</td>';
                echo '<td>',"<a href='/show.php?id=$post->id'> Читать...</a>",'</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<!--$query = mysqli_query($connect, "SELECT * FROM posts");-->
<!--$post = mysqli_fetch_object($query);-->
<!---->
<!--while ($post = mysqli_fetch_object($query)) {-->
<!--    echo "<pre>";-->
<!--    var_dump($post);-->
<!--    echo '</pre>';-->
<!--}-->