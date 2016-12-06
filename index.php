<!DOCTYPE html>

<?php
public start(){
  if(!isset($_COOKIE["id"])){
    echo "hello";
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
