class Db implements dbInterface {
	private $connection;

	public function connect() {
		// Подключение к базе
	}

	public function query($sql, params =[]) {
		// Выполнение запроса
	}

	public function fetch($sql, params =[]) {
		// Выборка данных
	}

	public function execute($sql, params =[]) {
		// Выполнение команд SQL
	}
}