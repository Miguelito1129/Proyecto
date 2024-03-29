<?php


class registro
{
	public function conex()
	{
		$enlace = mysqli_connect("LocalHost", 'root', "", "trabajo");
		return $enlace;
	}
}


?>