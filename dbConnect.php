<?php
	try {
    	$conn = new PDO("sqlsrv:server = tcp:rakesh-sql.database.windows.net,1433; Database = rakesh-db", "rakeshshenoy", "Rakesh123");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	//echo "Success!";
    }
    catch (PDOException $e) {
    	echo $sql . "<br>" . $e->getMessage();
	}
?>