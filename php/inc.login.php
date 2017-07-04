<?php
    $user = $password = "";
    $isFormValidated = false;

    $userErr = $passErr  = "";

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

       
        $user = $_POST['user'];
        $password = $_POST['password'];


        empty($user)? $userErr = "please enter a valid username" : $user = test_input($user);

    
         if ( !empty($user) ) {

             $userErr = ( (preg_match("/^admin$/", $user)) || (preg_match("/^guest$/", $user)) ) ? "" : "Unknown username";
         }
        
         if ( !empty($password) && ($user == "admin") ) {
             $passErr = ( !preg_match("/^root$/", $password)  )? "Incorrect password" : "";
         }
         if (!empty($password) && ($user == "guest")){
             $passErr = ( !preg_match("/^guest$/", $password)  )? "Incorrect password" : "";
         }

      
         if ( empty($userErr) && 
              empty($passErr) 
           ) {
                $isFormValidated = true;
         }
    }

    function test_input($value) {
        return htmlspecialchars( stripslashes( trim($value) ) );
    }
?>