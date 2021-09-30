<?php

class BuildingsView extends Buildings {
  
  public function showAllBuildings() {
    $result = $this->getAllBuildings();
    return $result;
  }

  public function showBuilding($ID) {
    $result = $this->getBuilding($ID);
    return $result;
  }

  public function getImgName($req) {
    extract($req);
    $imgName = $this->getImageName($req);
    return $imgName;
  }
  
}