<?php
// function to check the login
function check_login($con)
{
    // if this value is set
  if( isset($_SESSION['user_id'])){
      // checking if the user is in the db
      // id var used
      $id = $_SESSION['user_id'];
      $query = "select * from users where user_id = '$id' limit 1";
      // read from the database

      $result = mysqli_query($con,$query);
      if($result && mysqli_num_rows($result) > 0){
          $user_data = mysqli_fetch_assoc($result);
          return $user_data;
      }

  }
  // redirect to login page
  header("Location: login.php");
  die;
}

// function to generate a random number
function random_num($length)
{

    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4,$length); // assing a random variable between 4 and length

    for($i=0; $i<$len;$i++){
        #code...
        $text .= rand(0,9);

    }
    return $text;

}