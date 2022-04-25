<?php

function login(){ 
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $database = getConnection();
        $user = ("SELECT * FROM Users WHERE USERNAME='.$username.'");

        if($session = $database->query($user)) {
            if (password_verify($password, $user['PASSWORD'])) {
                $_SESSION['user_id'] = $user['ID'];
                header("Location: ./../index.php");
            } else {
                print('<p class="error">Username password combination is wrong!</p>');
            }
        }
    }
}

?>
