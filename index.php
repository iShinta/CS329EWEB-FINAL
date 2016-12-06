<!DOCTYPE html>

<?php
public start(){
  if(!isset($_COOKIE["id"])){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      if(isset($_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "guest" && $password == "dinner"){
          setcookie("id", $username, time()+3600);
          setcookie("timeloggedin", time(), time()+3600);
        }
      }
    }
  }


}

?>

<html>
<head>
  <title>Potluck Dinner</title>
  <script src="dinner.js"></script>
</head>

<body style="background-color: darkgrey;">
  <?php start(); ?>
</body>
</html>
