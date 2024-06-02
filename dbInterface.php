interface dbInterface {
	public function connect();
	public function query($sql, $params = []);
	public function fetch($sql, $params = []);
	public function execute($sql, $params = []);
}