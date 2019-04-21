<?php
function load_cart() 
{ 
if(!empty($_COOKIE['cart']))
{
	$cart=unserialize($_COOKIE['cart']);
}
else 
{
	$cart = array();
}
if(!empty($_POST['id'])) 
{
  if(empty($cart[$_POST['id']]))
  {
	  $cart[$_POST['id']] = 1;
  }
  else 
  {
	  $cart[$_POST['id']]++;
  }
}
setcookie('cart', serialize($cart), time()+60*60*24*7); 
return $cart;
}

function show_cart($cart) 
{ 
print "<div id='cart'>Your cart contains: </div>";
foreach($cart as $id=>$qty) {
  print "<div id='cart'>You have $qty quantity of product $id.<br></div>";
}
print "<div id='cart'><a href='emptycart.html'>Empty Cart</a></div>";
}
?>