<?php
$rows = 3; // amout of tr 
$cols = 3;// amjount of td 
function drawTable($rows, $cols){
echo "<table border='1'>"; 

for($tr=1;$tr<=$rows;$tr++){ 

    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td align='center'>Welcome : </td>"; #".$tr*$td."
				echo $_POST["name"];			
        } 
    echo "</tr>"; 
} 

    echo "<tr>"; 
        for($td=2;$td<=$cols;$td++){ 
               echo "<td align='center'>Your ID is : </td>"; #".$tr*$td."
			   echo "<td align='center'>$_POST[id] </td>";
					echo $_POST["id"];
		echo "c";	   			
        } 
    echo "</tr>"; 
	
echo "</table>";
}

echo drawTable(3, 3);

?>
Welcome          	 : <?php echo $_POST["name"]; ?><br>
Your ID is           : <?php echo $_POST["id"]; ?><br>
Block # UID          : <?php echo dechex($_POST["id"]); ?><br>
SEC in ETH           : <?php echo round(deg2rad($_POST["id"]), 4); ?><br>
GBV in ETH 			 : <?php echo round(($_POST["id"]*deg2rad($_POST["uid"])), 4); ?><br>
SEC in BTC 			 : <?php echo round(deg2rad($_POST["uid"]*0.04), 4); ?><br>
SEC in USD			 : <?php echo round(deg2rad($_POST["uid"]*400), 4); ?><br>
SEC in INR			 : <?php echo round(deg2rad($_POST["uid"]*30000), 4); ?><br>
ETH Address          : <?php echo $_POST["eth"]; ?><br>
BTC Address          : <?php echo $_POST["btc"]; ?><br>
Deposit TXN Hash	 : <?php echo $_POST["txn"]; ?><br>
Your email ID is     : <?php echo $_POST["email"]; ?>