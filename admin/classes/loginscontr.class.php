<?php

class LoginsContr extends Logins {
  
  public function createUser($req) {
    if ($this->passwordMatch($req)) {
      if($this->getUsername($req)) {
        header("Location: ./signup?error=usernamepresent");
      }
      elseif(!$this->getUsername($req)) {
        if ($this->setUser($req)) {
          header("Location: ./login?success");
        } else {
          header("Location: ./signup?error");
        }
      }
    }
    else {
      header("Location: ./signup?error=password-mismatch");
    }
  }

}