<?php

class RoomsContr extends Rooms {
  
  public function createRoom($req) {
    $this->setRoom($req);
  }

  public function changeRoom($req) {
    $this->updateRoom($req);
  }

  public function removeRoom($req) {
    $this->deleteRoom($req);
  }

}