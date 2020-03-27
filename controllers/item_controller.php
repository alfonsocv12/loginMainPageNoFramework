<?php
/**
 * Controllador de items
 */
class ItemController {

  function __construct($db){
    $this->db = $db;
  }

  public function createItem($params){

    return array(
      "uri" => "views/main"
    );
  }
}

?>
