<?php
	$users = json_decode(file_get_contents("user-data.json"));
	$new_user = json_decode('{"email":"'.$_POST["email"].'","password":"'.$_POST["password"].'","name":"'.$_POST["name"].'","address":"'.$_POST["address"].'","birthdate":"'.$_POST["birthdate"].'","phone":"'.$_POST["phone"].'","card":"'.$_POST["card"].'","exp":"'.$_POST["exp"].'","cvv":"'.$_POST["cvv"].'","bike-data":{"dock":"-1","time":"-1"}}');
	array_push($users, $new_user);
    file_put_contents("user-data.json", json_encode($users));
?>