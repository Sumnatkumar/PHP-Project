<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        // echo "User Name:".$user;
        // echo "<br>Password:".$pass;

        $ckname="username";
        $ckvalue=$user;
        $ckpass="password";
        $ckpassvalue=$pass;
         setcookie($ckname,$ckvalue);
         setcookie($ckpass,$ckpassvalue);

        echo "User Name".$user;
        echo "<br> Password: ".$pass; 
        ?>
        <form  methed=post action=page2.php>
         <input type=submit value=Submit>   
        </form>
    </center>
</body>
</html>