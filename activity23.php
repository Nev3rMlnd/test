
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
    
 </table>
    <form action= " <?php $_PHP_SELF ?>" method="POST">
        <table cellspacing="10px">
            <tr>
                <th colspan="2"><img src="ssg.png" alt="ssg logo" width="230px"></th>
            </tr>
            <tr>
                <th colspan="2"><h1>SUPREME STUDENT GOVERNMENT</h1></th>
            </tr>
            <tr>
                <th colspan="2"><h2>SSG Election 2024</h2><br> 
<?php
if(
isset($_REQUEST["President"]) ||
isset($_REQUEST["Vice-President"]) ||
isset($_REQUEST["Secretary"]) ||
isset($_REQUEST["Treasurer"]))
{
echo "You voted for:<br><br>";
echo " ". $_REQUEST['President']." for President<br>";
echo " ". $_REQUEST['Vice-President']."  for Vice-President <br> ";
echo " ". $_REQUEST['Secretary']." for Secretary <br>";
echo " ". $_REQUEST['Treasurer']." for Treasurer <br>";
exit();
}
?>
            </th>
            </tr>

</table>
<table cellspacing="10px">
            <tr>
                <td>President:</td>
                <td><input type="radio" name="President" value="Celentrio">Celentrio &nbsp<input type="radio" name="President" value="Celerio">Celerio</td>
            </tr>
            <tr>
                <td>Vice-President:</td>
                <td><input type="radio" name="Vice-President" value="Demetrio">Demetrio &nbsp<input type="radio" name="Vice-President" value="Celestino">Celestino</td>
            </tr>
            <tr>
                <td>Secretary:</td>
                <td><input type="radio" name="Secretary" value="Mario">Marios &nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Secretary" value="Luigi">Luigi</td>
            </tr>
            <tr>
                <td>Treasurer:</td>
                <td><input type="radio" name="Treasurer" value="Wario">Warios &nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="Treasurer" value="Waluigi">Waluigi</td>
            </tr>
            <tr>
                <td>Voter:</td>
                <td><input type="text" name="Voter" value="Voter"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Clear"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>