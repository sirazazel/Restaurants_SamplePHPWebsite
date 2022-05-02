<?php

include_once 'content/connection.php';
function login(){ 
   //Test statement
   print("<p>Starting session</p>");
   //Database connection   
   $database = getConnection();
   //Getting the username and passwd from the form
   $username = $_POST['username'];
   $password = $_POST['password'];
   //Removes possible sql quotes
   $username = stripcslashes($username);  
   $password = stripcslashes($password);  
   //Escapes special SQL characters
   $username = mysqli_real_escape_string($database, $username);  
   $password = mysqli_real_escape_string($database, $password);  
   //Test statement
   print($username." ".$password." ");

   $sql = ('SELECT * FROM Users WHERE USERNAME="'.$username.'";');

   if($userTable = $database->query($sql)) {
      if($userTable->num_rows>0){
         $user = $userTable->fetch_object();
         $pwh = $user->password;
         if (password_verify($password, $pwh)) {
            $_SESSION['user_id'] = $user['ID'];
            show_success();
         }  
      }
   } else {
      show_error();
   }
}


function show_success(){
   print("Login successful!");
   //redirect?
}

function show_error(){
   print("Invalid username or password. Try again");
}

?>



