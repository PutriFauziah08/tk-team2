<?php 
    $DB_HOST    = "localhost";
    $DB_USER    = "root";
    $DB_PASSWD  = "";
    $DB_NAME    = "tk_teamdua";
            
    @define("DB_HOST", $DB_HOST);
    @define("DB_USER", $DB_USER);
    @define("DB_PASSWD" , $DB_PASSWD);
    @define("DB_NAME", $DB_NAME);
    
    $connection = NEW mysqli( $DB_HOST, $DB_USER, $DB_PASSWD, $DB_NAME );
    
    if ($connection->connect_error){
        echo 'Konekasi Database Gagal...';
    } else {
        //koneksi berhasil
    }
?>