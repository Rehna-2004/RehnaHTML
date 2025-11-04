<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>STUDENT DETAILS</title> 
    </head>
    <body>
        <center>
        <?php
        $student=array("Malu","Ramu","Diya","Pathu");
        $mark=array("85","59","80","95");
        echo"<br>Displaying names in table format</br>";
        echo"<br>===========================</br>";
        echo"<br>Names of students are stored in an array:</br>";
        print_r($student);
        echo"<br>marks of students are stored in an array:</br>";
        print_r($mark);
        echo"<br>Names of students are stored in a table:</br>";
        echo"<br><table border=2><tr><th>Student Name</th><th>Mark</th></tr></br>";
            echo"<tr><td>$student[0]</td><td>$mark[0]</td></tr>";
            echo"<tr><td>$student[1]</td><td>$mark[1]</td></tr>";
            echo"<tr><td>$student[2]</td><td>$mark[2]</td></tr>";
            echo"<tr><td>$student[3]</td><td>$mark[3]</td></tr>";
            echo"</table>";
            ?>
            </center>
    </body>
</html>