<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        // echo $user;
        // echo $pass;
        if(strcmp($user,"vivek")==0 and strcasecmp($pass,"indore"))
                echo "<font color=green size=5>You are valid user</font>";
            
        else
        echo "<font color=red size=5>You are invalid user</font>";
        ?>
    </center>       
</body>
</html>