interface ProductInterface {
	public function getProducts();
	public function getProductById($productId);
	public function addProduct($name, $picture, $categoryId, $subcategoryId, $description, $cost);
	public function updateProduct($productId, $name, $picture, $categoryId, $subcategoryId, $description, $cost);
	public function deleteProduct($productId);
}