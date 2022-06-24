<?php
include_once 'dbConnection.php';

$id =mydata['id']
$name=$mydata['name'];
$email=$mydata['email'];
$password=$mydata['password'];
  $update="UPDATE `students` SET ',`name`='[$name]',`email`='[$email]',`password`='[$password]' WHERE `id`='[$id]";
$result = mysqli_query($conn, $update);
if ($result) {
    echo "Record updated successfully.";
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





$.ajax({ data: 
    {
    $id =mydata['id']
    $name=$mydata['name'];
    $email=$mydata['email'];
    $password=$mydata['password'];
            },
            type: "POST",
            url: "update.php",
            success: function(response) {
                viewrecord();
        }
    });
    
        function eidt() {
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                eidt();
            }
            xhttp.open("GET", "detrievedata.php", true);
            xhttp.send();
        }
    //    echo 'edit()';




    ?>