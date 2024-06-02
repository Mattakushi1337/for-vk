class User implements userInterface {
	private $db;

	public function __construct(dbInterface $db) {
		$this->db = $db;
	}
	public function register($name, $password, $cityId, $roleId) {
		// Регистрация
	}
	public function login($name, $password) {
		// Авторизация
	}

	public function getUser($userId) {
		// Информация о пользователе
	}
}