<?php

class Logins extends Dbh {

  protected function verifyUserCredential($req) {
    extract($req);
    $sql = "SELECT adminPassword FROM `admin` WHERE `adminUserName` = ?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$UserName]);
    $adminPassword = $stmt->fetch();
    extract($adminPassword);
    $isPasswordTrue = password_verify($Password, $adminPassword);
    return $isPasswordTrue;
  }

  protected function getUsername($req) {
    extract($req);
    $sql = "SELECT adminUserName FROM `admin` WHERE `adminUserName` = ?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$UserName]);
    $result = $stmt->fetch();
    if(empty($result)) {
      $isUnamePresent = false;
      return $isUnamePresent;
    } else {
      $isUnamePresent = true;
      return $isUnamePresent;
    }
  }

  protected function setUser($req) {
    extract($req);
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `admin` (`adminID`, `adminUserName`, `adminPassword`) VALUES (NULL, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    if($stmt->execute([$UserName, $hashed_password])){
      return true;
    } else {
      return false;
    }
  }

  protected function passwordMatch($req) {
    extract($req);
    if ($Password == $repeatPassword) {
      return true;
    } else {
      return false;
    }
  }

}