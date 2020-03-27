<?php
  include "controllers/user_controller.php";
  include "controllers/base_controller.php";
  include "controllers/item_controller.php";
  include "controllers/db_connection.php";

  $db = new DbConnetion();
  $base_controller = new BaseController();
  $user_controller = new UserController($db);
  $item_controller = new ItemController($db);

  $uri = $_REQUEST['uriPage'];

  switch ($uri) {
    case '/sign_in':
      $redirect = $user_controller->login($_REQUEST);
      break;
    case '/sign_up':
      $redirect = $user_controller->signUp($_REQUEST);
      break;
    case '/create_item':
      $redirect = $item_controller->createItem($_REQUEST);
      break;
    default:
      echo "TAS MAL\n $uri";
      break;
  }
  $base_controller->redirect($redirect['uri'], $redirect['params']);
  exit();
?>
