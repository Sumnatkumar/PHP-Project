<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        session_start();

        $uname=$_SESSION['username'];
        $upass=$_SESSION['userpass'];
        echo "User name in Next Page :".$uname;
        echo "<br>Password in Next Page :".$upass;
        session_unset(); 
        session_destroy();
        ?>
    </center>
</body>
</html>