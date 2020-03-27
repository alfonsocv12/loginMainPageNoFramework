<?php
  include "base_controller.php";
  /**
   *This class controlls all user data
   */
  class UserController extends BaseController{

    public $db;

    function __construct($db) {
      $this->db = $db;
    }

    public function login($params) {
      $response = $this->db->storeProcedure("login_ctrol51",
        [$params["email"], $params["password"]]);
      if(!$response['email']){
        $this->abortError(400, "No se puedo iniciar sesion");
      }
      $this->saveSession($response);
      $this->redirect("views/main");
    }

    private function saveSession($response){
      ini_set('session.use_only_cookies', true);
      session_start();
      $_SESSION['user'] = $response['email'];
      $_SESSION['JALA?'] = "SI";
    }

    public function signUp($params) {
      if($params['password'] == $params['confirm_password']){
        return $this->callSignUpProcedure($params);
      }else{
        $this->abortError(400, "Las contraseñas no son iguales");
      }
    }

    private function callSignUpProcedure($params){
      $user = $this->db
        ->storeProcedure("ctrol51UserSp",
          [$params["email"], $params["password"]]
        );

      if($user["error"]){
        $this->redirect("view/error", $user);
      }
      $this->redirect("view/main");
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
