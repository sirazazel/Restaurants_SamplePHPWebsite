<?php
include_once 'content/connection.php';
function login(){ 
   //Database connection   
   $database = getConnection();
   //Checking if form POST variables are set
   if (isset($_POST['username']) and isset($_POST['password'])){
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
               redirect();

            }  else {
               print ("Incorrect password");
            }
         } else {
            print ("Username not found");
         }
      } else {
         show_error();
      }
   }
}


function redirect(){
   //This should redirect the page, eventually.
}

function show_error(){
   print("Internal error");
}

?>



