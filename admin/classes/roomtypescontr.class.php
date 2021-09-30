<?php

class RoomTypesContr extends RoomTypes {
  
  public function createRoomType($req) {
    $this->setRoomType($req);
  }

  public function changeRoomType($req) {
    $this->updateRoomType($req);
  }

  public function removeRoomType($req) {
    $this->deleteRoomType($req);
  }

}