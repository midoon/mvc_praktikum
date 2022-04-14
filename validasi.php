<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) && empty($password)){
    	  header("location:index.php?empty_all");
    }else if (empty($username) && ! empty($password)){
    	  header("location:index.php?empty_username");
    }else if ( !empty($username) &&  empty($password)){
    	  header("location:index.php?empty_password");
    } else {
    	  if ($username == 'admin' && $password == "admin"){
    		    $_SESSION['username'] =$username;
    		    header("location:index.php");
    	  } else if ($username == 'user' && $password == "user"){
            $_SESSION['username'] =$username;
            header("location:indexMenteri.php");
        }
        else {
    		    header("location:index.php?failed");
    	  }
    }
?>
