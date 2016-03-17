<!DOCTYPE html>
<html>
<body>



<br>
Putting now in the database the following information:<br>
Airline Name is: <?php echo $_POST["name"]; ?><br>
The IATA code is: <?php echo $_POST["iata"]; ?><br><br>


<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
 class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully! <br>";
	  echo "<br>";
   }
   
   echo "Selecting Maximum ID from Table.... <br>";
   
    $sql =<<<EOF
      SELECT * from Airline where ID=(SELECT max(ID) from Airline);
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "<br>";
	  $inID = ++$row['ID'];
      echo "NAME = ". $row['Airline_Name'] ."<br>";
      echo "IATA = ". $row['IATA'] ."<br><br>";
   }
   echo "Operation done successfully<br>";
  
   
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   
   
echo "Printing your Input for cross-checking... <br>";  
//$inID = '6';
$inName = $_POST["name"];
$inIata = $_POST["iata"];
echo $inID;
echo "<br>";
echo $inName;
echo "<br>";
echo $inIata;   
 
  echo "<br>";
	$db->exec("INSERT INTO Airline (ID, Airline_Name, IATA) VALUES ('$inID', '$inName', '$inIata')");
  echo "Row inserted <br>";
    
    $db->close();
     
   
   
?>


</body>
</html>
