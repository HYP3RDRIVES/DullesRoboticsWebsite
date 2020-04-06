<?php

define('DB_SERVER', '127.0.0.1:3306');
define('DB_USERNAME', 'robo');
define('DB_PASSWORD', 'OkB00merz1337');
define('DB_NAME', 'RoboBlogDB');

// Attempt to connect to MySQL database 
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['do_login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and pass='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_row($has_user)) {
        if($row=mysqli_fetch_assoc($select_data)) {
            $_SESSION['loggedin']= true;
            $_SESSION['username']=$row['username'];
            if ($row['isBanned']==true) {
                echo "User is banned!";
                exit();
            }
            //Add the login history to the table
            $result = mysqli_query($connect,"SELECT id FROM users WHERE username='$username'");
            if ($rowres = mysqli_fetch_assoc($result)) {
                $id =  $rowres['id'];
                //echo $max_id;
                // Register new user
                mysqli_query($connect,"INSERT INTO users (id, username, pass, isAdmin, isBanned) VALUES ('{$id}' , '{$username}', '{$password}', FALSE, FALSE)");
                mysqli_query($connect,"INSERT INTO histories(id, time) VALUES ('{$id}' , CURRENT_TIMESTAMP())");
                //echo "abc" .$max_id;
            }
            
            $result = mysqli_query($connect,"SELECT isAdmin FROM users WHERE username='$username'");
            
            if ($row = mysqli_fetch_assoc($result)) {
                $isAdmin = $row['isAdmin'];
                if ($isAdmin == false) {
                    echo "Success (Regular)!";
                }
                else {
                    echo "Success (Admin)!";
                }
                
            }
            else {
                echo "ERROR! COULDN'T FIND ADMIN DATA!";
            }
            
        }
        else {
            echo "Invalid Password!";
        }
    }
    else
    {
        echo "Invalid Username!";
    }
    exit();
}
?>