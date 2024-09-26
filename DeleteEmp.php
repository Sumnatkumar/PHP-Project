<html>
<head>
    <title>PHP</title>
</head>
<body>
    <center>
        <form method=post action="DeleteEmp.php">
            <table border=1>
                <tr>
                    <th>Employee Id For Delete</th>
                    <td><input type=text name=txtid></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type=submit value=Seacrh name=btnSubmit>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['btnSubmit']))
        {
            $eid=$_POST['txtid'];
            // echo $eid;
            $mycon=mysqli_connect("localhost","root","","mynewdata");
            $sql="select * from emp where empid=".$eid;
             $record=$mycon->query($sql);
             $n=mysqli_num_rows($record);
             if($n>0){
                session_start();
                $_SESSION['$empid']=$eid;
                echo "<table border=1>";
                echo "<tr><th>Emp Id</th><th>Emp Name </th><th>Salary</th><th>Department</th></tr>";
                while($row=mysqli_fetch_assoc($record))
                {
                    echo "<tr>";
                    echo "<td>".$row['empid']."</td>";
                    echo "<td>".$row['empname']."</td>";
                    echo "<td>".$row['salary']."</td>";
                    echo "<td>".$row['department']."</td>";
                    echo "<form method=post action=DeleteData.php>";
                    echo "<td><input type=submit value=Delete></td>";
                    echo "</form>";
                    echo "<tr>";
                }
                echo "</table>";
             }
             else
             echo "<font color=red size=5> No Rocord found</font>";
        }
        ?>
    </center>
</body>
</html>
