<?php
    require_once "connectdb.php";

    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    if ($connect->connect_errno !=0)
    {
        echo 'Error:'. $connect->connect_errno . "Description:". $connect->connect_error;
    }
    else
    {
        $login=$_POST['login'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM credentials WHERE login='$login' AND password='$password'";
        if ($result= $connect->query ($sql))
        {
            $users_count=$result->num_rows;
            if($users_count>0){
                $row = $result->fetch_assoc();
                $user = $row['login'];

                $result->close();
                echo $user;
            } 
            else{
                echo "Something went wrong, please try again!";
            }
        }
        $connect->close();

    }
?>