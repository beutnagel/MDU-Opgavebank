SELECT 
	products.id, 
    products.name, 
    products.description,
    orders.status
FROM 
	products 
JOIN 
	products_in_orders
ON 
	products.id = products_in_orders.product_id
JOIN
	orders
ON 
	orders.id = products_in_orders.order_id
WHERE 
	products_in_orders.order_id = 1