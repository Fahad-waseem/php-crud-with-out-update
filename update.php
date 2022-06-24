<?php
    include('dbConnection.php');

    $student=$_POST["id"];
    echo "$student";


    // $sql = "UPDATE FROM students WHERE id={$student}" ;
    //  $sql ="SELECT id, name, email , password FROM students";
    $sql = "SELECT * FROM students WHERE id=$student";
    $result=mysqli_query($conn,$sql) or die ("SQL query failed");
 

    $output="";
    if (mysqli_num_rows($result) >0){    
        
        while($row = mysqli_fetch_assoc($result)){
        $output .= "
        <tr>
        <td>Name</td>
        <td><input type='text' id='edit-name' value='{$row["name"]}'> </td>
        </tr>
    <tr>
        <td>Email</td>
        <td><input type='text' id='edit-email' value='{$row["email"]}'> </td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type='text' id='edit-password' value='{$row["password"]}'> </td>
    </tr>
    <tr>
        <td>Submit</td>
        <td><input type='submit' name='submit' id='edit-submit'  value='update'> </td>
    </tr>";
    echo $output;
    }

    } else {
        echo "Error: ";

    }






    
    
    ?>

