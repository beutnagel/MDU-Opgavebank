<?php
date_default_timezone_set("Europe/Berlin");


// Install with composer and call the autoloader
require __DIR__ . '/vendor/autoload.php';

// Initialise the cart library
use Cart\Cart;
use Cart\Storage\CookieStore;

$id = 'cart-01';
$cartSessionStore = new CookieStore();
$cart = new Cart($id, $cartSessionStore);

// get the cart stored in cookie
$cart->restore();


// add item to cart
use Cart\CartItem;

$item = new CartItem;
$item->name = 'Macbook Pro';
$item->sku = 'MBP8GB';
$item->price = 1200;
$item->tax = 200;

$cart->add($item);


// save the changes to cart
$cart->save();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Using the cart library</title>
</head>
<body>
<section class="cart">
<?php
// get all items in cart
$cartItems = $cart->all();

if (count($cartItems) > 0) { // if there are 
    foreach ($cartItems as $item) {

	?>
	<artice class="product">
		<h3 class="name"><?php echo $item->name; ?></h3>
		<input class="quantity" value="<?php echo $item->quantity; ?>"></input>
		<h4 class="price"><?php echo $item->price; ?> kr</h4>
	</artice>
	
	<?php
    var_dump($item);
    }
} else {
	echo "Your cart is empty";
}
?>
</section>
<section class="productlist">
<?php
// connect to database
$pdo = new PDO("mysql:dbname=inflatable_toys", "root");
$fpdo = new FluentPDO($pdo);


// get products from database
$query = $fpdo->from('products')
            ->limit(5);
foreach ($query as $row) {
?>
	<article class="product">
		<h2 class="name"><?php echo $row["name"]; ?></h2>
	</article>
<?php
}
?>
</section>

</body>
</html>