<?php

	$username = filter_input(INPUT_POST, 'username')
	$password = filter_input(INPUT_POST, 'password')

	if(!empty($username)){
		if(!empty($username){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname ="dbmain";
			$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
			$conn->query("set names utf8"); 

			if(mysqli_connect_error()){
				echo"ouch!";
			}else{
				$sql = "INSERT INTO accounts(usnername, password)
				values('$username','$password')";
				if ($conn->query($sql)){
					echo"win";
				}else{
					echo"Error: ".$sql."<br>".$conn->error;
				}
				$conn->close();
			}
		}
		else{echo"nincs jelszo"}
	}else{echo"nincs felhasznalo"}
?>