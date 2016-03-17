
<!DOCTYPE html>
<html>
<body>


<?php

/*
 * PHP SQLite - Open a table and insert rows in SQLite
 */
 
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
      echo "Opened database successfully";
	 echo "<br>";
   }
  ?>

  
  
<form action="show.php" method="post">
Airline Name: <input type="text" name="name"><br>
IATA: <input type="text" name="iata"><br>
<input type="submit">
</form>

 
 
 
 </body>
</html>
