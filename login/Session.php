 <?php

class Session
{
	
	public static function start()
	{
		session_start();
	}

	public static function set($key,$val)
	{
		$_SESSION[$key]=$val;
	}

	public static function get($key)
	{
		if (isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		else
		{
			return false;
		}
	}

	public static function checkSession()
	{
		self::start();
		if (self::get("login")==false)
		{
			self::destroy();
			header('Location:login/index.php');
		}
	}
 
	public static function checkLogin()
	{
		self::start();
		if (self::get('login')==true)
		{
			header('Location:../index.php');
		}
	}

	public static function destroy()
	{
		session_destroy();
		header('Location:login/index.php');
	}
}
