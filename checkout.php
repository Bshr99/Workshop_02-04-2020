<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="checkout">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Checkout</title>
</head>
<body>
<?php include ("inc/navigatie.php");?>
<table id="checkout-table">
		<thead>
			<tr>
				<th>Image</th>
				<th>Game</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td><img src="images/games/callDuty.jpg"></td>
				<td>callDuty</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, harum! Sed perferendis beatae ipsam dignis</td>
				<td>&euro; 20,00</td>
			</tr>
			<tr>
				<td><img src="images/games/fifa20.jpg"></td>
				<td>fifa20</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, harum! Sed perferendis beatae ipsam dignis</td>
				<td>&euro; 20,00</td>
			</tr>
			<tr>
				<td><img src="images/games/sims4.jpg"></td>
				<td>sims4</td>
				<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, harum! Sed perferendis beatae ipsam dignis</td>
				<td>&euro; 20,00</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4">&euro; 60,00</td>
			</tr>
		</tfoot>
	</table>
	
</body>