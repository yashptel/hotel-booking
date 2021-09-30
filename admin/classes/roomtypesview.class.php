<?php

class RoomTypesView extends RoomTypes {
  
  public function showAllRoomTypes() {
    $result = $this->getAllRoomTypes();
    return $result;
  }

  public function showRoomType($ID) {
    $result = $this->getRoomType($ID);
    return $result;
  }

}