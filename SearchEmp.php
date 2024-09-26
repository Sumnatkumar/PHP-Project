<html><head><title>PHP</title></head>
<body>
    <center>
    <?php

    $mycon=mysqli_connect("localhost","root","","mynewdata");
    // echo "Connection success <br>";
    $sql="select * from emp";
     $record=$mycon->query($sql);
     $n=mysqli_num_rows($record);
    //  echo "Total Record" .$n;
    if($n>0) {
        echo "<table border=1>";
        echo "<tr><th>Emp Id</th><th>Emp Name </th><th>Salary</th><th>Department</th></tr>";
        while($row=mysqli_fetch_assoc($record))
        {
            echo "<tr>";
            echo "<td>".$row['empid']."</td>";
            echo "<td>".$row['empname']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "<td>".$row['department']."</td>";
            // echo $row['empid']." ".$row['empname']." ".$row['salary']." ".$row['department'];
            echo "<br>";
        }
        echo "</table>";
    }
    else
    echo "<font color=red size=5> Record not Found</font>";
    $mycon->close();
    ?>
    </center>
</body>
</html>