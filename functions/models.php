<?php

// function AddStudent($data){
//    // $firstNameErr =$lastNameErr = $emailErr = $passwordErr = $addressErr = $phoneErr = " ";
// // $firstName =$lastName = $email = $userName = $password = $address = $phone = " ";

// // $firtname = firstname;
// // $lastname = lastname;
// // $username = username;
// // $email = email;
// // $password = password;
// // $address = address;
// // $phone = phone;
// $sql = "INSERT INTO student (firstname, lastname, username, password, email, address, phone)
// VALUES('janet', 'brown', 'janetbrown', '4456345', 'janetbrown10doe@gmail.com', 'no 54 westbrook street houston texas', '+145345565454')";


// if ($conn->query($sql) === TRUE){
//     echo "new record created successfully";
// }else{
//     echo "Error: <br> ";
// }
// }
 class Student{
     //properties and methods go here
     //this are the public properties of the studentt......i.e they can be changed from an outside function and method
     public $firstName;
     public $lastName;
     public $userName;
     public $email;
     public $password;
     public $address;
     public $phone;

     //this are the private propertiews of the student object.....that means that they can not be changed by an outside function/method
     //here is a private variable ($db) is declared to hold the database connection
     private $db;
     
     // the variable ($tableName) is a variable that holds the tables name(student) and access to it
     private $tableName = "student";
    
     //the function below is the construct function that is called immediately the class is invoked, in this class it is called with a parameter ($conn) -----> check[DB.php] which basically serves for connection to the database

     function __construct($conn){
         //since the construct function is invoked automatically alongside  trhe class we will set the database ariable ($db) in the construct function
         $this->db = $conn;
     }
     //this is a public method used to register student
     public function Register(){

         $newPass = sha1($this->password);

         //this is an sql insertio query that puts ths students firstname, lastname, username,

         $sql = "INSERT INTO $this->tableName(firstname, lastname, username, email, password, address, phone) VALUES('$this->firstName', '$this->lastName', '$this->userName', '$this->email', '$newPass', '$this->address', '$this->phone')";


         //$result variable holds the query method that does the actual insertion into the database

         $result = $this->db->query($sql);

         //$result returs true if the insertion is successful and false if it failed

         if($result){
             return true;
         }else{
             return false;
         }

     }
     
         //this function validates the email of a student
         public function emailExist(){
            //this is an sql command that runs a check on the database for any email addrerss that will correspond to the email address entered in the form
            $sql = "SELECT * FROM $this->tableName WHERE email = '$this->email' ";
            $result = $this->db->query($sql);
            //  echo $result;
            //the query will return an array of data if the email exist in the database otherwise it returns an empty array
            if(!empty($result) && $result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        //this function checks for the stipulated number of characters required for the valid email

        public function checkPasswordCharacters(){
            if((strlen($this->password) > 5) && strlen($this->password) < 16){
                return true;
            }else{
              return false;
            }
        }

        //this function checks if an email is a valid email address
        public function validateEmail(){
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                return false;
            }
        }

        //this function checks the user credentials and sign them in

        public function logIn(){
            //{$newPass} is a variable that holds the sha1 encrypted password of the student
            
            $newPass = sha1($this->password);
            
            //$sql is a variable that holds an sql command run on the db table{$this->tableName} to select the
            // firstname and the id of the student whose email and password matches the one input into the form
            // $sql here holds an array returned from the database query

            $sql = "SELECT * FROM $this->tableName WHERE (email = '$this->email' OR `username`= '$this->email') AND password = '$newPass' ";
            //$result holds the database query set to grant the customer access if his or her credentials is correct


            $result = $this->db->query($sql);

            if($result->num_rows > 0){
                return $result->fetch_assoc();
            }else{
                return array();
            }
        }
 }  