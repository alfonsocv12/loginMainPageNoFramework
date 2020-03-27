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

  public function updateItem($params){
    $id = $params['id'];
    $name = $params['name'];
    $description = $params['descripcion'];
    $this->db->rawQuery(
      "update items_ctrol51
      SET
      name = \"$name\",
      description = \"$description\"
      WHERE (id = $id)");
    $this->redirect("views/main");
  }
  
  public function deleteItem($params){
    $this->db->table("items_ctrol51")
      ->delete($params['id']);
    $this->redirect("views/main");
  }
}

?>
