<html><head><title>PHP</title></head>
<body>
    <center>
        <form method=post action=page1.php>
            <table border=1>
                <tr>
                    <th>User Name</th>
                    <td><input type="text" name="txtuser"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="txtpass"></td>
                </tr>
                <tr><td></td>
                <td>
                    <input type="submit"value="Submit" name=submitbtn>
                    <input type="reset" name="Reset">
                </td>
                </tr>
            </table>
        </form>
        <?php
        // if(Isset($_POST['submitbtn'])){
        //     $user=$_POST['txtuser'];
        //     $pass=$_POST['txtpass'];
        //  // echo $user;
        //  // echo $pass;
        //     if((strcmp($user,"vivek")==0) and (strcasecmp($pass,"indore")==0))
        //         //  echo "<font color=green size=5>You are valid user</font>";
        //         header("Location:function.php"); 
        //     else
        //         echo "<font color=red size=5>You are invalid user</font>";
        // }
        ?>  
    </center>
</body>
</html>