<?php 
 
define('__CONFIG__', true);

require_once "../inc/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST' OR 1==1) {
    // header('Content-Type: application/json'); // forces output to be json format 
    $return = [];

    $email = Filter::String( $_POST['email']);
    $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();


    if($findUser->rowCount()==1){


        $return['error'] = "you already have an account";
    }else{

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
        $addUser->bindParam(':email',$email, PDO::PARAM_STR);
        $addUser->bindParam(':password',$password, PDO::PARAM_STR);
        $addUser->execute();

        $user_id = $con->lastInsertId();

        $_SESSION['user_id'] = (int) $user_id;

        $return['redirect'] = '/dashboard.php?message=welcome';

    }

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
}else {
    exit('not in ajax');

}
// thetssda
?>