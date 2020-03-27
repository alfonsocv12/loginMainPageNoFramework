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
      $user_controller->login($_REQUEST);
      break;
    case '/sign_up':
      $user_controller->signUp($_REQUEST);
      break;
    case '/create_item':
      $item_controller->createItem($_REQUEST);
      break;
    default:
      $base_controller->abortError(404, "Not Found");
      break;
  }
  exit();
?>
