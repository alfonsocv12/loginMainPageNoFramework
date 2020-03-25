<?php
  require_once "controllers/user_controller.php";

  $user_controller = new UserController();

  $uri = $_REQUEST['uriPage'];

  switch ($uri) {
    case '/sign_in':
      $redirect = $user_controller->login($_REQUEST);
      break;
    case '/sign_up':
      $redirect = $user_controller->signUp($_REQUEST);
      break;
    case '/add_preference':
      // code...
      break;
    default:
      echo "TAS MAL\n $uri";
      break;
  }
?>
