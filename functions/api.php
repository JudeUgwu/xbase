<?php
require_once "../DB.php";
require_once "../config.php";
require_once "utils.php";
require_once "models.php";




if (isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}




  //student sign-n section, what exactly happens here is that when login is clicked and set[added into the global array $_POST[]] the commands listed inside the function is executed
  if (isset($_POST['login'])) {
      $errorFlag = false;
      $errorArray = [];
      
      // a variable $student  is created to hold an instantiated object of the $student class which is @ models.php
      $student =  new Student($conn);

      //the email gotten from the student is sanitized

      $student->email = sanitize($_POST['email']);
      //the email gotten from the student is sanitized

      $student->password = sanitize($_POST['password']);

      $login = $student->logIn();
      //  echo "<pre>";
      //  print_r($login);
      //  die();
      // what happens here is that inside the logIn() method an sql query is run to select the id od the student whos email and password matches with the one that is put in the form, the query returns an array with the firstname and id of the student which is then put in a SESSION global array; this data put on the  global scope can be used to track the user at any page;
      if (count($login) > 0) {
          $_SESSION['studentId'] = $login['id'];
          $_SESSION['studentFirstName'] = $login['firstname'];
          echo json_encode(["status"=>true,"message"=>"logged in successful","url"=>APP_PATH."student/index.php"]);
      } else {
          echo json_encode(["status"=>false,"message"=>"failed to login in"]);
      }
  }




  /**
   * This function processes siginup
   */

 if (isset($_POST['add-student'])) {


  // $emailAlreadyExist =  "";
     // $invalidLoginDetails = "";
     // $passwordCharCheck = " ";

     //create a student object

     $student = new Student($conn);

     //set the required student details

     $student->firstName = sanitize($_POST['firstname']);
     $student->lastName = sanitize($_POST['lastname']);
     $___genUsername = substr($student->firstName, 0, 2).substr($student->lastName, 0, 2).substr(uniqid(), 0, 2);
     $student->userName = sanitize($___genUsername);
     $student->email = sanitize($_POST['email']);
     $student->password = sanitize($_POST['password']);
     $student->phone = sanitize($_POST['phone']);
     $student->address = sanitize("");

     //check if the email address exist

     $emailExist = $student->emailExist();
     if ($emailExist) {
         echo json_encode(["status"=>false,"message"=>"this email has been taken"]);

         return;
     }
   
     //check if the email address is valid
   
     $validEmail = $student->validateEmail();
     if (!$validEmail) {
         echo json_encode(["status"=>false,"message"=>"this is not a valid email"]);

         return;
     }

     //check if the characters of the eamil is between 6 and 15

     $passwordCharacterCheck = $student->checkPasswordCharacters();

     if (!$passwordCharacterCheck) {
         echo json_encode(["status"=>false,"message"=>"min character 5"]);

         return;
     }


     $result = $student->Register();

     echo json_encode(["status"=>true,"message"=>"student successfully registered"]);
 }




 if (isset($_POST['search'])) {
     $name = $_POST['search'];

     $sql = "SELECT * FROM student
     WHERE firstname LIKE '%{$name}%' OR lastname LIKE '%{$name}%' OR username LIKE '%{$name}%'";
    //  echo $sql;
    //  die();
     $result = mysqli_query($conn,$sql );


     if(mysqli_num_rows($result) > 0){
       $data = [];
        while ($row = mysqli_fetch_array($result)) {
          $data[] = $row;
      }
     echo json_encode(["status"=>true,"message"=>"Records found","data"=>$data]);

     }else{
     echo json_encode(["status"=>false,"message"=>"No record found"]);

     }
    

     mysqli_close($conn);
 }
