<?php
	if ($_POST['time'] == null)
	{
		$users = json_decode(file_get_contents("user-data.json"));
		foreach ($users as $user)
		{
			if ($user->name == $_POST['name'])
			{
				$user->{'bike-data'}->dock = -1;
				$user->{'bike-data'}->time = -1;
				break;
			}
		}
		file_put_contents("user-data.json", json_encode($users));

		$bikes = json_decode(file_get_contents("bike-data.json"));
		$bikes->{'bike-racks'}[$_POST['dock']]->{'available-bikes'}++;
		file_put_contents("bike-data.json", json_encode($bikes));
	}
	else 
	{
		$users = json_decode(file_get_contents("user-data.json"));
		foreach ($users as $user)
		{
			if ($user->name == $_POST['name'])
			{
				$user->{'bike-data'}->dock = $_POST['dock'];
				$user->{'bike-data'}->time = $_POST['time'];
				break;
			}
		}
		file_put_contents("user-data.json", json_encode($users));

		$bikes = json_decode(file_get_contents("bike-data.json"));
		$bikes->{'bike-racks'}[$_POST['dock']]->{'available-bikes'}--;
		file_put_contents("bike-data.json", json_encode($bikes));
	}
?>