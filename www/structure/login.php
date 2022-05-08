<?php
include_once 'content/connection.php';
function login(){ 
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

      $sql = ('SELECT * FROM Users WHERE USERNAME="'.$username.'";');

      //Querying the database for a matching username and veryfying passphrase.
      if($userTable = $database->query($sql)) {
         if($userTable->num_rows>0){

            $user = $userTable->fetch_object();
            $pwh = $user->password;
            $token = hash('md5', $password);

            if ($token == $pwh) {
               //Storing the session ID and email.
               $_SESSION['user_id'] = $user->username;
               $_SESSION['name'] = $user->name;
               $_SESSION['email'] = $user->email;

            }  else {
               print ('<div class="d-flex bg-warning"><p class="mx-auto my-auto">Incorrect password.</p></div>');
            }
         } else {
            print ('<div class="d-flex bg-warning"><p class="mx-auto my-auto">Username not found.</p></div>');
         }
      } else {
         print ('<div class="d-flex bg-warning"><p class="mx-auto my-auto">Internal error.</p></div>');
      }
   }
?>



