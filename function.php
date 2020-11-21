<?php
//required Msql connection

require('database/DBController.php');

//required product class

require('database/product.php');
//required cart class

require('database/Cart.php');

//DBcontroller object
$db=new DBController();

//product object
$product=new product($db);
$product_shuffle= $product->getData();

// cart object
$Cart=new Cart($db);
