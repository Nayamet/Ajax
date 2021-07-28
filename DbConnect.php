 <?php

function connection()
{
    $connection =new mysqli("localhost","nayamet","123456","wtk");
    if($connection->connect_errno)
    {
        die("Database connection failed.".$connection->connect_error);
    }
    return $connection;
}

function register($fname,$lname,$gender,$dob,$religion,$present_address,$parmanent_address,$phone,$email,$link,$userName,$password)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO users (firstName,lastName,gender,dob,religion,presentAddress,parmanentAddress,phone,email,personalUrl,userName,password)
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssssssssssss",$fname,$lname,$gender,$dob,$religion,$present_address,$parmanent_address,$phone,$email,$link,$userName,$password);
    return $sql->execute();
}

function login($userName,$password)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * FROM users WHERE userName = ? and password = ?");
    $sql->bind_param("ss",$userName,$password);
    $sql->execute();
    $response=$sql->get_result();
    return $response->num_rows === 1;
}
function delete($uid,$userName)
{
    $connection=connection();
    $sql=$connection->prepare("DELETE FROM users WHERE id = ? and userName = ?");
    $sql->bind_param("is",$uid,$userName);
    return $sql->execute();
}

function getAllUsers()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT id,userName FROM users");
    $sql->execute();
    $response=$sql->get_result();
    return $response->fetch_all(MYSQLI_ASSOC);
}
 
function getUser($userName)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT id,userName FROM users WHERE userName = ?");
    $sql->bind_param("s",$userName);
    $sql->execute();
    $response=$sql->get_result();
    return $response->fetch_all(MYSQLI_ASSOC);
}

 ?>