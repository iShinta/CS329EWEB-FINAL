<!DOCTYPE html>

<?php
function start(){
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
    }else{
      showLogin();
    }
  }else{
    showSubmit();
  }


}

function showSubmit(){
  ?>
  <form>
    <table style="margin: auto; background-color: lightgrey;">
      <tr>
        <td>
          Name:
        </td>
        <td>
          Items:
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" id="user" name="user" />
        </td>
        <td>
          <input type="text" id="items" name="items" />
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" />
        </td>
        <td>
          <input type="reset" name="reset" />
        </td>
      </tr>
    </table>
  </form>
  <?php
}

public showLogin(){
  ?>
  <form>
    <table style="margin: auto; background-color: lightgrey;">
      <tr>
        <td>
          Name:
        </td>
        <td>
          <input type="text" id="username" name="username" />
        </td>
      </tr>
      <tr>
        <td>
          Items:
        </td>
        <td>
          <input type="text" id="password" name="password" />
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" />
        </td>
        <td>
          <input type="reset" name="reset" />
        </td>
      </tr>
    </table>
  </form>
  <?php
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
