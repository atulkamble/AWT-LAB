<?php
	
	$con=mysqli_connect("localhost","root","","test"); //this is connection variable that connect mysql database 
	//syntax : mysqli_connect(host,user,password,databaseName)
	
	$up=mysqli_query($con,"update customer set cust_name='Bob' where cust_id=1");
	$del=mysqli_query($con,"delete from customer where cust_id=3");
	
	$res=mysqli_query($con,"select * from customer");
	
	echo "After update<table border='' cellpadding='10px' width='100%'>";
	echo "<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Item Purchased</th>
			<th>Mobile Number</th>
		 </tr>";
	
	while($row=mysqli_fetch_row($res)){
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
	}
	
	echo "</table>";
	
	mysqli_close($con);
?>