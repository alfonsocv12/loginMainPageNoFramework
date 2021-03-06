<?php
  include "controllers/user_controller.php";
  include "controllers/item_controller.php";
  include "controllers/db_connection.php";

  $db = new DbConnection();
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
    case '/edit_item':
      $item_controller->updateItem($_REQUEST);
      break;
    case '/delete_item':
      $item_controller->deleteItem($_REQUEST);
      break;
    default:
      $user_controller->abortError(404, "Not Found");
      break;
  }
  exit();
?>
