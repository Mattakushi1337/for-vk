class Product implements ProductInterface {
	private $db;

	public function __construct(dbInterface $db) {
		$this->db = $db;
	}
	
	public function getProducts() {
		//Все товары
	}
	
	public function getProductById($productId) {
		//Получение товара по id
	}
	
	public function addProduct($name, $picture, $categoryId, $subcategoryId, $description, $cost) {
		//Добавление товара
	}
	
		public function updateProduct($productId, $name, $picture, $categoryId, $subcategoryId, $description, $cost) {
		//Обновление товара
	}
	
	public function deleteProduct($productId) {
		//Удаление товара
	}
}