<?php
/**
 * Created by PhpStorm.
 * User: soulman
 * Date: 26.02.17
 * Time: 13:14
 */

require_once 'lib/db_connect.php';

            $query = mysqli_query($connect, "SELECT * FROM `posts`");

            while ($post = mysqli_fetch_object($query)) {
                echo "<pre>";
                var_dump($post);
                echo '</pre>';
            }