<html><head><title>PHP</title></head>
<body>
    <center>

        <form method=post action=InsertEmp.php>
            Id: <input type=text name=txtid>
            <br>
            name: <input type=text name=txtname>
            <br>
            Salary: <input type=text name=txtsal>
            <br>
            Department: <input type=text name=txtdept>
            <br>
            <input type=submit value=Submit name=btnsubmit>
        </form>
        <?php
        //1. Connection
        //2. query
        //3. close
        // $eid=501;
        // $ename="Sumant Sharma";
        // $esal=70000;
        // $edept='IT';

        if(isset($_POST['btnsubmit'])){
        $eid=$_POST['txtid'];
        $ename=$_POST['txtname'];
        $esal=$_POST['txtsal'];
        $edept=$_POST['txtdept'];

            $mycon=mysqli_connect("localhost","root","","mynewdata");
            echo "Connection success";
            $sql="Insert into emp values(?,?,?,?)";
            $ps=$mycon->prepare($sql);  
            $ps->bind_param("isis",$eid,$ename,$esal,$edept);
            $ps->execute();
            echo "Record inserted successfully";

        }    
        ?>
    </center>
</body>
</html>