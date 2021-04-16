<?php
	$users = json_decode(file_get_contents("user-data.json"));
	$new_user = json_decode('{"email": "${_POST["email"]}","password": "${_POST["password"]}","name": "${_POST["name"]}","birth-date": "${_POST["birthdate"]}","phone": "${_POST["phone"]}","address": "${_POST["address"]}","card-number": "${_POST["card"]}","exp-date": "${_POST["exp"]}","cvv": ${_POST["cvv"]},"bikes": [] }');
	array_push($users, $new_user);
    //file_put_contents("user-data.json", json_encode($users));
	//var_dump($new_user);
?>