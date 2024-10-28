<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_form.css" type="text/css">
    <style>
        .table1{
    border-radius:12px;
    border: none;
    background-color:  rgb(255, 255, 255);
    padding-left: 20px;
    padding-right: 20px;
    font-size: 25px;
    color: black;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 50px;
}
.table2{
    border-radius:12px;
    border: none;
    background-color:rgb(67, 107, 72);
    padding: 14px;
    color: white;
    width: 95%;
}
td{
  padding:10px;  
}
input[type = search]{
    background-color: rgb(67, 107, 72);
    color:white;
    font-weight:900;
    padding: 4px;
    border:none;
    border-radius:16px;
    font-size: 18px;
    margin-left: 40px;
    padding: 8px;
    
}
button{
    background-color: rgb(67, 107, 72);
    color:white;
    font-weight:900;
    padding: 4px;
    border:none;
    border-radius:16px;
    font-size: 18px;
    margin-left: 25px;
    padding: 8px;
    
}
div td,th{border-radius:8px;
border-color:black;
}
.table3{
    border-radius:12px;
    border: none;
    background-color:rgb(255, 255, 255);
    padding: 14px;
    color: white;
    width: 95%;
}
        </style>
</head>
<body>
    <center>
        <table >
            <tr>
                <th><img src="lagro.png" width="125px"></th><th><h1 style="margin-left: -10px;
                ">LAGRO HIGH SCHOOL</h1></th>
    
            </tr>
        </table>
    <form action="student_form.html" method="post" >
        <table class="table1" cellpadding="5px" style="padding-bottom: 20px;padding-top:20px;">
        <tr>
        <th colspan="5"><h1>STUDENT RECORD</h1></th>
       </tr>
       <tr>
        <th colspan="5" align="left"><input type="search" placeholder="Search"><button>Search</button></th>
       </tr>
            <tr>
            <td align="center" >
       <table cellpadding="5px" class="table2">
            <tr>
              <td align="center" colspan="2">
                <?php
                $conn = new mysqli ("localhost","root","","page_students");
                if($conn->connect_error){
                    die("connection Failed : ".$conn->connect_error);
                } 

                $sql = "SELECT * from student_record";
                $result = $conn-> query($sql);

                if ($result-> num_rows > 0){
                    echo "<div><table border=\"1\" cellpadding=\"10px\" cellspacing=\"8px\" class=\"table3\" style=\"background-color:rgb(255, 255, 255);\"><tr>
                    <th style=\"background-color:rgb(67, 107, 72);\">Student_ID</th>
                    <th style=\"background-color:rgb(67, 107, 72);\">Name</th>
                    <th style=\"background-color:rgb(67, 107, 72);\">Grade&Section</th>
                    <th style=\"background-color:rgb(67, 107, 72);\">Address</th>
                    <th style=\"background-color:rgb(67, 107, 72);\">Contact_No</th>
                    </tr>";
                    while ($row=$result-> fetch_assoc()){
                        echo "<tr>
                        <th style=\"background-color:rgb(67, 107, 72);\">" .$row["student_id"] . "</th>
                        <td style=\"background-color:rgb(67, 107, 72);\">" .$row["name"] . "</td>
                        <td style=\"background-color:rgb(67, 107, 72);\">" .$row["gradesection"] . "</td>
                        <td style=\"background-color:rgb(67, 107, 72);\">" .$row["address"] . "</td>
                        <td style=\"background-color:rgb(67, 107, 72);\">" .$row["contact_no"] . "</td>
                        </tr>" ;
                    }
                    echo "</table></div>";
                }
                else{
                    echo "No record found.";
                }
                $conn-> close();
                ?>
               </td>
            </tr>
        </table>
        </table>
    </form>
</center>
</body>
</html>