<?php 

    $sql = mysqli_connect('localhost', 'root', '', 'test');

    if(!$sql){
        echo 'error connect to database';
    }

?>