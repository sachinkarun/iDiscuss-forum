<?php
include'database.php';
$showerror = "false";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_email = $_POST['signupemail'];
    $pass = $_POST['signuppassword'];
    $cpass = $_POST['signupcpassword'];
    
    //check weather this email exists
    $existsql = "SELECT * FROM `user` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numrows = mysqli_num_rows($result);
    if($numrows){
        $showerror = 'email already in use';
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if($result){
                $showalert = true;
                header("location: /forum/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showerror = "password do not match";
        }
    }
    header("location: /forum/index.php?signupsuccess=false&error=$showerror");
}
?>