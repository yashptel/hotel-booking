<?php

class LoginsView extends Logins {
  
  public function verifyUserCredentials($req) {
    if ($this->getUsername($req)) {
      if ($this->verifyUserCredential($req)) {
        session_start();
        $_SESSION['UserName'] = $req['UserName'];
        header("Location: ./index");
      } else {
        header("Location: ./login?err=invalid_password&UserName=".$req['UserName']);
        echo "Invalid Password";
        die();
      }
    } else {
      header("Location: ./login?err=invalid_username_password");
    }
  }
  
}