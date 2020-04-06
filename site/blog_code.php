<?php
/*
 * 
 * Bootstrap v4.1
 */
// Initialize the session
//session_start();

define('DB_SERVER', '127.0.0.1:3306');
define('DB_USERNAME', 'robo');
define('DB_PASSWORD', 'OkB00merz1337');
define('DB_NAME', 'RoboBlogDB');

// Attempt to connect to MySQL database
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($connect->connect_error){
    die("ERROR: Could not connect. " . $connect->connect_error);
}

if(isset($_POST['add_blog_post']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
	$blog=$_POST['blog'];
	$date=$_POST['date'];
	//Prepare and execute binding statements

	
    $has_user = $connect->prepare("select * from users where username=?");
	$has_user->bind_param("s",$username);
	$has_user->execute();

	
    if ($row = $has_user->get_result()->fetch_assoc()) {
		$has_user->close();
		$select_data = $connect->prepare("select * from users where username=? and pass=?");
		$select_data->bind_param("ss",$username,$password);
		$select_data->execute();
	
        if($row = $select_data->get_result()->fetch_assoc()) {
			$select_data->close();

			try {
			$result = $connect->prepare("SELECT MAX(id) AS 'ID' FROM blogs");
			$result->execute();
			
			//$rowres = null;
			if ($rowres = $result->get_result()-> fetch_assoc()) {
				$result->close();
				$max_id = 0;
				//echo "max id is " . $rowres['ID'];
				$max_id =  $rowres["ID"] + 1;
				//echo "calculated max id is " . $max_id;
				// Add new blog post
				$add_blog = $connect->prepare("INSERT INTO blogs(id,blogDate,blog) VALUES (? , ?, ?)");
				$add_blog->bind_param("iss",$max_id,$date,$blog);
				$add_blog->execute();
				$add_blog->close();
				echo "Success!";
				}
			}
			catch(Exception $e) {
				echo 'Caught exception:'+$e;
			
			
			}
		}
		else {
			echo "Invalid Password!";
			}
	}
	else {
	echo "Invalid Username!";
	}
    $connect->close();
    exit();
}

if(isset($_POST['edit_blog_post']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
	$blog=$_POST['blog'];
	$id = $_POST['id'];
	
    $has_user = $connect->prepare("select * from users where username=?");
	$has_user->bind_param("s",$username);
	$has_user->execute();

	
    if ($row = $has_user->get_result()->fetch_assoc()) {
		$has_user->close();
		$select_data = $connect->prepare("select * from users where username=? and pass=?");
		$select_data->bind_param("ss",$username,$password);
		$select_data->execute();
	
        if($row = $select_data->get_result()->fetch_assoc()) {
			$select_data->close();

			try {

				// Edit blog post
				$edit_blog = $connect->prepare("UPDATE blogs SET blog = ? WHERE id = ?");
				$edit_blog->bind_param("si",$blog,$id);
				$edit_blog->execute();
				$edit_blog->close();
				echo "Success!";
				}
			catch(Exception $e) {
				echo 'Caught exception:'+$e;
			
			
			}
		}
		else {
			echo "Invalid Password!";
			}
	}
	else {
	echo "Invalid Username!";
	}
    $connect->close();
    exit();
}

if(isset($_POST['get_blogs']))
{
            $blogs = $connect->prepare("SELECT * FROM blogs");
			$blogs->execute();
            $result = $blogs->get_result();
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            //echo "Success!";

        

    $connect->close();
    exit();
    
}

/*All this other code is example code 
if(isset($_POST['get_global_chat']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            
            $result = mysqli_query($connect,"SELECT * FROM globalchat");
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            //echo "Success!";
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

if(isset($_POST['get_private_chat']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pmuser=$_POST['pmuser'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            
            $result = mysqli_query($connect,"SELECT * FROM privatechat where (username='$username' AND recipient='$pmuser') OR (recipient='$username' AND username='$pmuser')");
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            //echo "Success!";
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

if(isset($_POST['get_user_data']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
           
            $result = mysqli_query($connect,"SELECT id,username FROM users where banned=false");
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $users[] = $row; 
            }
            echo json_encode($users);
            //echo "Success!";
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

if(isset($_POST['send_global_message']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $message=$_POST['message'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            $result = mysqli_query($connect,"SELECT id FROM users WHERE username='$username'");
            if ($rowres = mysqli_fetch_assoc($result)) {
                $id =  $rowres['id'];
            $query = "INSERT INTO globalchat(userid,username,msg) VALUES($id,'$username','$message')";
            $result = mysqli_query($connect,$query);
            
            echo "Success!";
            }
            else {
                echo "Failed To Get User ID!";
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

if(isset($_POST['send_private_message']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pmuser=$_POST['pmuser'];
    $message=$_POST['message'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            $result = mysqli_query($connect,"SELECT id FROM users WHERE username='$username'");
            if ($rowres = mysqli_fetch_assoc($result)) {
                $id =  $rowres['id'];
                $result = mysqli_query($connect,"SELECT id FROM users WHERE username='$pmuser'");
                if ($rowres = mysqli_fetch_assoc($result)) {
                    $recid =  $rowres['id'];
                    $query = "INSERT INTO privatechat(userid,username,recipid,recipient,msg) VALUES($id,'$username',$recid,'$pmuser','$message')";
                    $result = mysqli_query($connect,$query);
                    
                    echo "Success!";
                }
            }
            else {
                echo "Failed To Get User ID!";
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

/*
if(isset($_POST['get_auser_data']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $searchname=$_POST['searchname'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            //Check to see if we are admin
            $result = mysqli_query($connect,"SELECT isAdmin FROM users WHERE username='$username'");
            if ($row = mysqli_fetch_assoc($result)) {
                $isAdmin = $row['isAdmin'];
                if ($isAdmin == false) {
                    echo $username . " is trying to access admin data!";
                    exit();
                }
                
            }
            $result = mysqli_query($connect,"SELECT * FROM users where username='$searchname'");
            if (mysqli_num_rows($result) == 0) {
                echo "No username found!";
                exit();
            }
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $users[] = $row;
            }
            echo "Success: " .json_encode($users);
            //echo "Success!";
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

if(isset($_POST['get_auser_data']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $searchname=$_POST['searchname'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            //Check to see if we are admin
            $result = mysqli_query($connect,"SELECT isAdmin FROM users WHERE username='$username'");
            if ($row = mysqli_fetch_assoc($result)) {
                $isAdmin = $row['isAdmin'];
                if ($isAdmin == false) {
                    echo $username . " is trying to access admin data!";
                    exit();
                }
                
            }
            $result = mysqli_query($connect,"SELECT * FROM users where username='$searchname'");
            if (mysqli_num_rows($result) == 0) {
                echo "No username found!";
                exit();
            }
            //$histories[] = array();
            //Store all histories in an array to send to js
            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $users[] = $row;
            }
            echo "Success: " .json_encode($users);
            //echo "Success!";
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

if(isset($_POST['auser_update']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $searchname=$_POST['searchname'];
    $newname=$_POST['newname'];
    $newpass=$_POST['newpass'];
    $banned=$_POST['banned'];
    $select_data=mysqli_query($connect,"select * from users where username='$username' and password='$password'");
    $has_user = mysqli_query($connect,"select * from users where username='$username'");
    if ($row = mysqli_fetch_assoc($has_user)) {
        if($row = mysqli_fetch_assoc($select_data)) {
            //Check to see if we are admin
            $result = mysqli_query($connect,"SELECT isAdmin FROM users WHERE username='$username'");
            if ($row = mysqli_fetch_assoc($result)) {
                $isAdmin = $row['isAdmin'];
                if ($isAdmin == false) {
                    echo $username . " is trying to access admin data!";
                    exit();
                }
                
            }
            $result = mysqli_query($connect,"SELECT * FROM users where username='$searchname'");
            if (mysqli_num_rows($result) == 0) {
                echo "No username found!";
                exit();
            }
            else {
                if ($banned == "false") {
                    $banned = 0;
                }
                else {
                    $banned = 1;
                }
                $result = mysqli_query($connect, "UPDATE users SET username = '$newname' WHERE username = '$searchname'");
                $result = mysqli_query($connect, "UPDATE users SET password = '$newpass' WHERE username = '$newname'");
                $result = mysqli_query($connect, "UPDATE users SET banned = '$banned' WHERE username = '$newname'");
            }

            echo "Success!";
            //echo "Success!";
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
    
}*/

?>