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

    public function signUp() {
      echo "Aqui se inicia la session";
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
