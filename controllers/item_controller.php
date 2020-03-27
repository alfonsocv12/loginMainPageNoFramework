<?php
  include "db_connection.php";
/**
 * Controllador de items
 */
class ItemController {

  function __construct(){
    $this->db = new DbConnetion();
  }

  public function createItem($params){
    return array(
      "uri" => "views/main"
    );
  }
}

?>
