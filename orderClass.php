class Order implements OrderInterface {
	private $db;

	public function __construct(dbInterface $db) {
		$this->db = $db;
	}
	
	public function createOrder($userId, $productId, $amount) {
		//Создание нового заказа
	}
	
	public function getOrder($orderId) {
		//Получение заказа по id
	}
	
	public function updateOrder($orderId, $productId, $amount) {
		//Обновление заказа
	}
	
	public function deleteOrder($orderId) {
		//Удаление заказа
	}
}