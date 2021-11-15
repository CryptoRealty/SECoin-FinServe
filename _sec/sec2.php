<html>
<body>
<?php echo "<h1 align='center'>Earn Infinite SECoINs at DILD.IN</h1>"; ?>
<table border='1' align='center' > 
    <tr><td><h5>Welcome : </td><td align='center'><?php echo $_POST["name"] ?></td></tr> 
    <tr><td><h5>Your ID is : </td><td align='center'><?php echo $_POST["id"] ?></td></tr>		
    <tr><td><h5>Block # UID : </td><td align='center'><?php echo dechex($_POST["id"]); ?></td></tr> 
	<tr><td><h5>SEC in ETH : </td><td align='center'><?php echo round(deg2rad($_POST["id"]), 4); ?></td></tr> 
	<tr><td><h5>GroupBV in ETH : </td><td align='center'><?php echo round(($_POST["id"]*deg2rad($_POST["uid"])), 4); ?></td></tr> 
	<tr><td><h5>SEC in BTC : </td><td align='center'><?php echo round(deg2rad($_POST["uid"]*1), 4); ?></td></tr> 
	<tr><td><h5>SEC in USD : </td><td align='center'><?php echo round(deg2rad($_POST["uid"]*10000), 4); ?></td></tr> 
	<tr><td><h5>SEC in INR : </td><td align='center'><?php echo round(deg2rad($_POST["uid"]*750000), 4); ?></td></tr> 
	<tr><td><h5>ETH Address : </td><td align='center'><?php echo $_POST["eth"]; ?></td></tr> 
	<tr><td><h5>BTC Address : </td><td align='center'><?php echo $_POST["btc"]; ?></td></tr> 
	<tr><td><h5>Deposit TXN Hash : </td><td align='center'><?php echo $_POST["txn"]; ?></td></tr> 
	<tr><td><h5>Your email ID is : </td><td align='center'><?php echo $_POST["email"]; ?></td>		
    </tr></h4>	
</table>
<?php echo "<h6 align='center'>Pl. sent us screenshot of your Deposit to dild26@gmail.com</h6>"; ?>
</body>
</html> 