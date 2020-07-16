<?php  
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'test4';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    
    if(!$conn){  
    die('Could not connect: '.mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  

    $sql = "create table video_tb(
    id INT AUTO_INCREMENT,Judul TEXT NOT NULL,Kategori VARCHAR(20),Link VARCHAR(50),primary key (id))";  
    
    if(mysqli_query($conn, $sql)){  
    echo "Table created successfully";  
    } else {  
    echo "Table is not created successfully ";  
    }  
    mysqli_close($conn);  
?> 