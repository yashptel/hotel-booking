<?php

class Floors extends Dbh {

  protected function getAllFloors() {
    $sql = "SELECT * FROM `floor`";
    $stmt = $this->connect()->query($sql);
      $result = $stmt->fetchAll();
      return $result;
  }

  protected function getFloor($ID) {
    $sql = "SELECT * FROM `floor` WHERE `FloorID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$ID]);
    $result = $stmt->fetch();
    return $result;
  }

  protected function setFloor($req) {
    extract($req);
    echo $BuildingID;
    // die();
    $sql = "INSERT INTO `floor` (`FloorID`, `FloorName`, `BuildingID`) VALUES (NULL, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$FloorName, $BuildingID]);
  }

  protected function updateFloor($req) {
    extract($req);
    $sql = "UPDATE `floor` SET `FloorName` = ?, `BuildingID` = ? WHERE `floor`.`FloorID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$FloorName, $BuildingID, $FloorID]);
  }

  protected function deleteFloor($req) {
    extract($req);
    if(isset($FloorID)) {
      $sql = "DELETE FROM `floor` WHERE `floor`.`FloorID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$FloorID]);
    }
  }
}