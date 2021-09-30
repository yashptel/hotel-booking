<?php

class RoomTypes extends Dbh {

  protected function getAllRoomTypes() {
    $sql = "SELECT * FROM `roomtype`";
    $stmt = $this->connect()->query($sql);
      $result = $stmt->fetchAll();
      return $result;
  }

  protected function getRoomType($ID) {
    $sql = "SELECT * FROM `roomtype` WHERE `RoomTypeID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$ID]);
    $result = $stmt->fetch();
    return $result;
  }

  protected function setRoomType($req) {
    extract($req);
    $sql = "INSERT INTO `roomtype` (`RoomTypeID`, `RoomTypeName`) VALUES (NULL, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$RoomTypeName]);
  }

  protected function updateRoomType($req) {
    extract($req);
    $sql = "UPDATE `roomtype` SET `RoomTypeName` = ? WHERE `roomtype`.`RoomTypeID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$RoomTypeName, $RoomTypeID]);
  }

  protected function deleteRoomType($req) {
    extract($req);
    if(isset($RoomTypeID)) {
      $sql = "DELETE FROM `roomtype` WHERE `roomtype`.`RoomTypeID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$RoomTypeID]);
    }
  }
}