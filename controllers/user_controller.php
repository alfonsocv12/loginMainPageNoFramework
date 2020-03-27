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
        return $this->callSignUpProcedure($params);
      }else{
        return array(
          "uri" => "views/error",
          "params" => array(
            "code" => 400,
            "message" => "Las contraseñas no son iguales"
          )
        );
      }
    }

    private function callSignUpProcedure($params){
      $user = $this->db
        ->storeProcedure("ctrol51UserSp",
          [$params["email"], $params["password"]]
        );

      if($user["error"]){
        return array(
          "uri" => "view/error",
          "params" => $user
        );
      }
      return array(
        "uri" => "view/main"
      );
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
