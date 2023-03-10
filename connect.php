<?php
        session_start();

         $con= new mysqli ("localhost","root","","final_project");
         if($con->connect_errno)
         die("connect error");


         function auth() {
            $con= new mysqli ("localhost","root","","final_project");
            if($con->connect_errno)
            die("connect error");

            if(! isset($_SESSION['auth_id'])) {
                return null;
            }

            if(! $_SESSION['auth_id']) {
                return null;
            }

            $userId = $_SESSION['auth_id'];

               // check
            $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$userId]);
            $user = $stmt->get_result()->fetch_array();

            if(! is_null($user)) {
                return $user;
            }

            return null;
         }


         function is_auth()
         {
            return is_array(auth());
         }

         
         function is_admin()
         {
            return is_array(auth()) && auth()['type'] == 'admin';
         }

         function is_user()
         {
            return is_array(auth()) && auth()['type'] == 'admin';
         }
        
         function is_guest()
         {
            return is_null(auth());
         }

         function set_flash($key, $message) {
            $_SESSION[$key] = $message;
         
         }
         function get_flash($key) {
            $message = null;

            if(isset($_SESSION[$key])) {
                $message = $_SESSION[$key];

                unset($_SESSION[$key]);
            }

            return $message;
         }
?>