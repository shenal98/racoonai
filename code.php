<?php
session_start();
include('dbcon.php');

if(isset($_POST['register_now_btn']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $postData = [
        'name'=>$name,
        'phone'=>$phone,
        'email'=>$email,
        'password'=>$password,
    ];

    $ref_table = "users";
$postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result)
    {
        $_SESSION = "User Added Successfully";
        header('Location: home.php');
        exit();
    }
    else
    {
        $_SESSION['status'] = "User Not Added";
        header('Location: home.php');
        exit();
    }

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+94'.$phone,
        'password' => $password,
        'displayName' => $name,
    ];
    
    $createdUser = $auth->createUser($userProperties);

    if($createdUser)
    {
        $_SESSION['status'] = "User registration Successful";
        header("Location: register.php");
        exit();

    }
    else{
        $_SESSION['status'] = "User registration Unsuccessful";
        header("Location: register.php");
        exit();

    }

}