<?php
/**
 * Controllador de items
 */
class ItemController extends BaseController{

  function __construct($db){
    $this->db = $db;
  }

  public function createItem($params){
    $name = $params['name'];
    $description = $params['descripcion'];
    $this->db->rawQuery("insert into
      items_ctrol51 (`name`, `description`)
      VALUES ('$name', '$description')");
    $this->redirect("views/main");
  }
}

?>
