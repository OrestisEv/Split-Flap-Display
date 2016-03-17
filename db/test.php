<!DOCTYPE html>
<html>
<body>



<?php
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
      echo "Opened database successfully <br>";
	  echo "<br>";
   }

   $sql =<<<EOF
      SELECT * from Airline;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "<br>";
      echo "NAME = ". $row['Airline_Name'] ."<br>";
      echo "IATA = ". $row['IATA'] ."<br><br>";
   }
   echo "Operation done successfully<br>";
   $db->close();
?>
   

</body>
</html>
   
   
