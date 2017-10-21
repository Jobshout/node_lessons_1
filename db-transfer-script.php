<?php	
	error_reporting(0);
mysql_connect('localhost','root','');
		mysql_select_db('db1');
		
	
	

	
$databaseName = 'db1';

$pdo = new Pdo('mysql:host=localhost;dbname=' . $databaseName, 'root', '');

$result = $pdo->query('SHOW TABLES FROM ' . $databaseName)->fetchAll(PDO::FETCH_NUM);

$tables = [];
foreach ($result as $r) {
    $tables[] = $r[0];
}

$data = [];
foreach ($tables as $table) {
    $data[$table] = $pdo->query('SELECT * FROM ' . $table)->fetchAll(PDO::FETCH_ASSOC);
} 
//var_dump($tables);


	echo "<pre>";

	//foreach($i=0;$<$data
	//print_r($data);
	
	
	$result = mysql_query("SHOW TABLES FROM db1");

 
	
  while ($tname = mysql_fetch_array($result))
  {
		
		$q = mysql_query("SELECT * FROM ".$tname[0]." WHERE modified < UNIX_TIMESTAMP(NOW())");
		while($row = mysql_fetch_assoc($q))
		{
			for($z=0;z<count($row);$z++)
			{
				$q = mysql_query("update ".$tname[0]." WHERE ".$row[$z]." =  GUID = ".$row['GUID']." ");
			}
		}
		
		
	}
	
	foreach($arr as $arrow)
	{
		//echo $arrow;
	}
	
		
?>