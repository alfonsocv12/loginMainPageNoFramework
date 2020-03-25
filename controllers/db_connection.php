<?php
  /**
   * db Connection
   */
  class DbConnetion {
    public $connection;
    public $query_json = array(
      "select"=>"",
      "where" =>[],
      "from" => "",
    );

    public function __construct() {
      $this->connection = new mysqli(
          "developeros.com.mx",
          "develop7_ulsa_a",
          "r00tUls@",
          "develop7_ulsa"
        ) or die("Connect failed");
    }

    public function works(){
      echo "smn";
    }

    public function table($table){
      $this->query_json["table"] = $table;
      return $this;
    }

    public function select($values){
      $this->query_json["select"] = $values;
      return $this;
    }

    public function where($column, $statement, $value){
      array_push($this->query_json["where"],
        array(
          "column" => $column,
          "statement" => $statement,
          "value" => $value
        )
      );
      return $this;
    }

    public function get(){
      $select = $this->query_json["select"];
      $table = $this->query_json["table"];
      $statement = $this->whereArrayToString();
      return $this->connection->query("
        select $select from $table $statement
      ")->fetch_object();
    }

    private function whereArrayToString(){
      $i = 0;
      $whereString = "";
      foreach ($this->query_json["where"] as $entrance) {
        if ($i > 1){
          $whereString .= " and "
            .$entrance["column"]." ".$entrance["statement"]
            ." ".$entrance["value"];
        } else {
          $whereString = "where "
            .$entrance["column"]." ".$entrance["statement"]
            ." ".$entrance["value"];
          $i ++;
        }
      }
      $this->query_json["where"] = [];
      return $whereString;
    }

    public function rawQuery($query) {
      return $this->connection->query($query);
    }
  }

?>
