<?php
  include "db_connection.php";

  /**
   *This class controlls all user data
   */
  class UserController {

    public $db;

    function __construct() {
      $this->db = new DbConnetion();
    }

    public function login() {

    }

    public function signUp($params) {
      if($params['password'] == $params['confirm_password']){
        $user = $this->db
          ->storeProcedure("ctrol51UserSp",
            [$params["email"], $params["password"]]
          );
        return array(
            "uri" => "views/main.php"
        );
      }else{
        echo "No considen las contraseñas";
        return array(
          "uri" => "views/error"
        );
      }
    }

    public function showUsers() {
      $users = $this->db
        ->table("ctrol51_users")
        ->select("id, email")
        ->get();
      foreach ($result as $key => $value) {
        echo "$key $value <br>";
      }
    }
  }
?>
