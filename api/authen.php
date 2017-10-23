<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=utf-8");

// MockUp API PHP Pure
# Login 
# Register
# ForgotPassword
# ChangePassword


if(isset($_GET['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "Admin" && $password == "1234")
        echo json_encode(array('isSuccess' => true, 'message' => 'Login Success.'));
    else 
        echo json_encode(array('isSuccess' => false, 'message' => 'User Not found.'));
    
    exit();
}

else if(isset($_GET['Register'])){

    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    echo json_encode(array('isSuccess' => true, 'message' => 'Register Success.'));
    exit();
}

else if(isset($_GET['ForgotPassword'])){
        $email = $_POST['email'];
        echo json_encode(array('isSuccess' => true, 'message' => 'We have sent an email,you should get it shortly.'));
        exit();
}

else if(isset($_GET['ChangePassword'])){
    $username = $_POST['username'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];

    echo json_encode(array('isSuccess' => true, 'message' => 'We have sent an email,you should get it shortly.'));
    exit();
}

else {
    header("Content-Type: text/html; charset=utf-8");
    echo 
    '<pre>
    MockUp API PHP Pure
        # Login          [POST]   Params : ( username, password ); Return ( isSuccess, message );
        # Register       [POST]   Params :  (email, firstname, lastname, username, password ); Return ( isSuccess, message );
        # ForgotPassword [POST]   Params : ( email ); Return ( isSuccess, message );
        # ChangePassword [POST]   Params : ( username, currentPassword, newPassword ); Return ( isSuccess, message );
</pre>';
}
?>