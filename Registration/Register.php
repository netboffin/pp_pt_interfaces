<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author michael
 */
class Register {
    //put your code here
    private $username;
    private $email;
    private $password;
    private $password_confirmation;
    private $token;
    private $errors;

    public function __construct(){
        $this->errors = array();
        $this->username = $this->filter($_POST['ruser']);
        $this->password = $this->filter($_POST['rpass']);
        $this->email = $this->filter($_POST['remail']);
        
        }
        public function process(){

        }
        public function filter(){
            //filter out dodgy characters
        }
        public function register(){
            //save the registration details to the database
            //if the database returns an error add it to the errors array


        }
        public function show_errors(){

            echo "<h1>Errors</h1>";
            foreach($this->errors as $error)
            {
                echo $error."<br />";
            }
            
        }
        public function valid_data(){}
        public function valid_token(){}
}
?>
