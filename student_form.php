
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_form.css" type="text/css">
       <style>
div{
    background-color: rgb(255, 255, 255);
    color:black;
    font-weight:900;
    padding: 4px;
    border:none;
    border-radius:16px;
    font-size: 18px;

    margin-left: 168px;
    padding: 8px;
}
        </style>
</head>
<body>
    <center>
        <table >
            <tr>
                <th><img src="lagro.png" width="125px"></th><th><h1 style="margin-left: -10px;">LAGRO HIGH SCHOOL</h1></th>
    
            </tr>
        </table>
    <form action="student_form.html" method="post" >
        <table class="table1" cellpadding="5px" style="padding-bottom: 20px;padding-top:20px;">
            <tr>
            <td align="center" >
       <table cellpadding="5px" class="table2" style="background-color:rgb(67, 107, 72);">
            <tr>
              <td align="center" colspan="2">
                <?php
                $Full_Name = $_POST["fullname"];
                
                echo "<p>Thank you, {$Full_Name}, for Submitting your Student record.</p>";
                ?>
               </td>
            </tr> 
             <tr>
                <td><input type="submit" name="Return" value="Return"></td><td><div><a href="student_record.php" style="text-decoration:none;color:black;">See the record</a></div></td>
            </tr>
        </table>
        </table>
    </form>
</center>
<?php
$Student_ID = $_POST["studentid"];
$Full_Name = $_POST["fullname"];
$Grade_and_Section = $_POST["grade&section"];
$Address = $_POST["address"];

$Contact_NO = $_POST["contact"];

$query = new mysqli('localhost','root','','page_students');

try {
    $in = $query->prepare("insert into student_record(student_id,name,gradesection,address,contact_no)
    values(?, ?, ?, ?, ?)");
    $in->bind_param("issss", $Student_ID ,$Full_Name, $Grade_and_Section, $Address, $Contact_NO);
    $in->execute();
    $in->close();
    $query->close();
} catch (mysqli_warning $err) {
    die("There was an Error: " . $err);
}
?>
</body>
</html>