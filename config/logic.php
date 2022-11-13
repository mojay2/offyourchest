<?php

    include "db.php";
 

    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }
    else{
        $sql = "SELECT * FROM data";
        $query = mysqli_query($conn, $sql);
    }

    
    if(isset($_REQUEST["new_post"])){

        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        if($title == null || $content == null){
            header("Location: viewall.php?info=error_empty");
        exit();
        }

        $sql = "INSERT INTO data(title,content) VALUES ('$title', '$content')";
        mysqli_query($conn, $sql);

        header("Location: viewall.php?info=added_post");
        exit();
    }

    if(isset($_REQUEST['update'])){
        $id=$_REQUEST['id'];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "UPDATE data SET title = '$title', content='$content' where id = $id";
        mysqli_query($conn, $sql);
        header("Location: viewall.php?info=updated_post");
        exit();
    }

    if(isset($_REQUEST['cancel'])){
        header("Location: viewall.php");
        exit();
    }

    if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        header("Location: viewall.php?info=deleted_post");
        exit();
    }
?>