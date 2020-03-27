<?php
  /**
   * This is the base controller
   * class
   */
  class BaseController {

    function __construct() {
      // code...
    }

    public function redirect($url, $param = null){
      $header = "Location: $url.php";
      if($param){
        $paramString = $this->paramArrayToString($param);
        $header = $header."?$paramString";
      }
      header($header);
    }

    public function abortError($code, $message){
      redirect("views/error.php", array(
        "code" => $code,
        "message" => $message
      ));
    }

    private function paramArrayToString($params){
      $i = 0;
      $paramString = "";
      foreach ($params as $key => $value) {
        if($i > 0){
          $paramString .= "&$key=$value";
        }else{
          $paramString = "$key=$value";
          $i ++;
        }
      }
      return $paramString;
    }
  }

?>
