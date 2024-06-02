intefrace userInterface {
	public function register($name, $password, $cityId, $roleId);
	public function login($name, $password);
	public function getUser($userId);
}