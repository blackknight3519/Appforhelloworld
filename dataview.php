<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>contact.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <body>
 <p>
 <?php
  try {
  $servername = "localhost";
  $dbname = "dbhalkey";
  $con= new PDO("mysql:host=$servername;dbname=$dbname", "halkey", "qwerhjkl");
  
  $query = "SELECT * FROM dbhalkey";
  print "<table> n";
  $result = $con->query($query);
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> n";
  foreach ($row as $field => $value){
   print " <th>$field</th> n";
  } 
  print " </tr> n";
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> n";
   foreach ($row as $name=>$value){
   print " <td>$value</td> n";
   } // end field loop
   print " </tr> n";
  }
  print "</table> n";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  }
 ?>
 </p>
 </body>
</html>