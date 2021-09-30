<?php
	include 'includes/class-autoload.inc.php';
	$whereToGO = $_POST['whereToGo'];
	switch ($whereToGO) {
		case "buildings":
					$obj = new BuildingsContr();
					$objImg = new ImageContr();
					if($_POST['Submit'] == 'Edit' || $_POST['Submit'] == 'Delete') {
						$objView = new BuildingsView();
						$imageName = $objView->getImgName($_POST);
						$objImg->deleteImg($imageName);
						if($_POST['Submit'] == 'Edit') {
							$objImg->uploadImg($_POST);
							$obj->changeBuilding($_POST);
						}
						elseif($_POST['Submit'] == 'Delete') {
							$obj->removeBuilding($_POST);
						}
					}
					elseif($_POST['Submit'] == 'Add') {
						$objImg->uploadImg($_POST);
						$obj->createBuilding($_POST);
					}
					
					header("Location: buildings");
        break;
		case "floors":
					$obj = new FloorsContr();
					if($_POST['Submit'] == 'Edit') {
						$obj->changeFloor($_POST);
					}
					elseif($_POST['Submit'] == 'Add') {
						$obj->createFloor($_POST);
					}
					elseif($_POST['Submit'] == 'Delete') {
						$obj->removeFloor($_POST);
					}
					header("Location: floors");
        break;
		case "rooms":
					$obj = new RoomsContr();
					$objImg = new ImageContr();
					if($_POST['Submit'] == 'Edit' || $_POST['Submit'] == 'Delete') {
						$objView = new RoomsView();
						$imageName = $objView->getImgName($_POST);
						$objImg->deleteImg($imageName);
						if($_POST['Submit'] == 'Edit') {
							$objImg->uploadImg($_POST);
							$obj->changeRoom($_POST);
						}
						elseif($_POST['Submit'] == 'Delete') {
							$obj->removeRoom($_POST);
						}
					}
					elseif($_POST['Submit'] == 'Add') {
						$objImg->uploadImg($_POST);
						$obj->createRoom($_POST);
					}
					header("Location: rooms");
				break;
		case "roomtypes":
					$obj = new RoomTypesContr();
					if($_POST['Submit'] == 'Edit') {
						$obj->changeRoomType($_POST);
					}
					elseif($_POST['Submit'] == 'Add') {
						$obj->createRoomType($_POST);
					}
					elseif($_POST['Submit'] == 'Delete') {
						$obj->removeRoomType($_POST);
					}
					header("Location: room-types");
				break;
		case "logins":
					if($_POST['submit'] == 'Login') {
						$obj = new LoginsView();
						$obj->verifyUserCredentials($_POST);
					}
					elseif($_POST['submit'] == 'Sign Up') {
						$obj = new LoginsContr();
						$obj->createUser($_POST);
					}
					// header("Location: login");
        break;
    default: ;
}
?>