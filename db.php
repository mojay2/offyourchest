<?php //php file for connecting to the database

    //for http://blog-example.infinityfreeapp.com/
    // $server = "sql309.epizy.com";
    // $username = "epiz_32748718";
    // $password = "Un4vL3wo7LW7lgS";
    // $dbname = "epiz_32748718_blog_example";

    // for http://offyourchest.infinityfreeapp.com/
    $server = "sql107.epizy.com";
    $username = "epiz_32756220";
    $password = "B6yN0bImJ8";
    $dbname = "epiz_32756220_offyourchest";

    //for local hosting
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "blog_example";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Unable to establish DB Connection</h3>";
    }

?>