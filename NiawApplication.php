<?php
class NiawApplication extends Application
{
	protected $login_action = array('account', 'signin');
	public function getRootDir()
	{
		return dirname(__FILE__);
	}
	protected function registerRoutes()
	{
		return array(
			'/' => array('controller' => 'index' , 'action' => 'index'),
			'/index/register' => array('controller' => 'index' , 'action' => 'register')
		);
	}
	protected function configure()
	{
		$this->db_manager->connect('master',array(
			'dsn' => 'mysql:dbname=green_db;host=localhost',
			'user' => 'green_db_user',
			'password' => "green123",
		));
	}
}

?>
