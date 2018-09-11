<?php
$admin = "srus672@gmail.com";
$admin_2 = "srus672@gmail.com";
$admin_2 = "srus672@gmail.com";
$height = $_POST[height];
$width = $_POST[width];
$depth = $_POST[depth];
$quantity = $_POST[quantity];
$print_color = $_POST[print_color];
$board_type = $_POST[board_type];
$outside_paper = $_POST[outside_paper];
$email = $_POST[email];
$grand_total = $_POST[grand_total];
$per_box_price = $_POST[per_box_price];
$price_with_vat = $_POST[price_with_vat];
$subject = "Box Cost Quote";
$message = "<html>
			<head>
			<title>SCD Bespoke Box Quote</title>
			</head>
			<body>
			<p align='left'> <img src='https://scdpackaging.co.uk/wp-content/uploads/2017/12/LOGO-80-1.png' width='80' height='82'> 
		<h2>Your Custom Corrugated Box Quote</h2></p>
		<p>Dear Prospective Valued Customer,</span>
		</p>
		<p>
		  Thank you for completing our Online Box Calculator. We've specialised in bespoke cardboard boxes for over 15 years and provide the highest quality products and services whether your order is for a short run quantity, or a large multiple order. If you've never used SCD's Custom Box Services before, give us a try and find out why nearly every new SCD customer, go on to become loyal, long term clients.
        </p>
		<p>
          <i>Here's the information you requested from the SCD Packaging website for your bespoke box.</i>
        </p>
		 <p>
          If you would like to discuss any aspect of this quotation, please reply to this email, or, call the SCD Offices. A summary of the quotation you requested below:
        </p><br>
			<p>
				<table>
					<table cellspacing=\"4\" cellpadding=\"4\" border=\"1\" align=\"center\">
					<tr>
					<td>Length:</td>
					<td>$height</td>
					</tr>
					<tr>
					<td>Width:</td>
					<td>$width</td>
					</tr>
					<tr>
					<td>Depth:</td>
					<td>$depth</td>
					</tr>
					<tr>
					<td>Quantity:</td>
					<td>$quantity</td>
					</tr>
					<tr>
					<td>Print Color:</td>
					<td>$print_color</td>
					</tr>
					<tr>
					<td>Board Type:</td>
					<td>$board_type</td>
					</tr>
					<tr>
					<td>Outside Paper:</td>
					<td>$outside_paper</td>
					</tr>
					<tr>
					<td><b>Grand Total:</b></td>
					<td>$grand_total</td>
					</tr>
					<tr>
					<td>Per Box Price:</td>
					<td>$per_box_price</td>
					</tr>
					<td><b>Price includes VAT:</b></td>
					<td>$price_with_vat</td>
				</table>
			</p>
					<br>
		<p>
          This quotation is subject to confirmation, therefore, if you wish to purchase the boxes quoted above, <b>please call us on 01933 318 185.</b>
        </p>
		<p><b>
		  Kind regards from the SCD Packaging Team</b>
		</p>
		<br>
		<p align='left'> <img src='https://scdpackaging.co.uk/wp-content/uploads/2018/01/box-calc-footer.png' max-height: 218px; width='auto'> </p>
			</body>
			</html>";
$headers  = 'MIME-Version:1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=utf-8' . "\r\n";
$headers .= 'To: <' . $email . ">\r\n";
$headers .= 'Reply-To: <' . $admin_2 . ">\r\n";
$headers .= 'From: <' . $admin_2 . ">\r\n";
$headers .= 'Cc: <' . $admin_2 . ">\r\n";
$headers .= 'BCc: <' . $admin . ">\r\n";
mail($email, $subject, $message, $headers);
?>