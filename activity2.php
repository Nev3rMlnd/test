<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="activity2.css">
    <style>
       table{width:43%;}
       td{width:50%;}
    </style>
</head>
<body>
    <center>
    <form  method="post" action="activity2.html">
        <table cellspacing="10px" >
            <tr>
                <th colspan="2"><img src="ssg.png" alt="ssg logo" width="230px"></th>
            </tr>
            <tr>
                <th colspan="2"><h1>SUPREME STUDENT GOVERNMENT</h1></th>
            </tr>
            <tr>
                <th colspan="2"><h2>SSG Election 2024</h2></th>
            </tr>
            <tr>
                <td colspan="2">
                <?php 
                $president = $_POST["president"];
                $vicepresident = $_POST["vice-president"];
                $secretary = $_POST["secretary"];
                $treasurer = $_POST["treasurer"];
                $voter = $_POST["voter"];
                
                echo "<p>You voted for:</p>";
                echo "<p>{$president} for President</p>";
                echo "<p>{$vicepresident} for Vice-President</p>";
                echo "<p>{$secretary} for Secretary</p>";
                echo "<p>{$treasurer} for Treasurer</p>";
                echo "<p>Voter:{$voter}</p> "
                ?>
                </td>
                <tr>
                <td><input type="submit" value="GO BACK"></td>
                <td>THANK YOU FOR VOTING</td>
            </tr>
            </tr>
        </table>
    </form>
</center>
</body>
</html>