interface OrderInterface {
	public funtion createOrder($userId, $productId, $amount);
	public funtion getOrder($orderId);
	public funtion updateOrder($orderId, $productId, $amount);
	public funtion deleteOrder($orderId);
{