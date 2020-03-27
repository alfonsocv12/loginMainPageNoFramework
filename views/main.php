<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Entro a main
    <br>
    <?php
      include "../controllers/db_connection.php";
      $db = new DbConnetion();
      session_start();
      $user = $_SESSION['user'];
      if($user){
        // $db->
      }else{
        header("Location: /");
      }
    ?>
    <button onclick="window.location.href = '/views/createItem.php';">
      Crear item</button>
  </body>
</html>
