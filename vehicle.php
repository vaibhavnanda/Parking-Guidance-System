<html>
<head>
    <title>VEHICLE DATABASE</title>
    <style type="text/css">
 .main
        {
            background-image:url("bg.jpg");
            background-repeat: no-repeat;
            background-origin: content-box; 
            background-size: 1400px 700px;
            width: 1500px;
            height: 2000px;
        }
        
          .heading
        {
            height:50px;
            position: relative;
            border-width: thick;
            font-family: fantasy;
            font-size: 50px;
           
        }
table {
    width: 90%;
}

th {
    height: 50px;
    width: 30px;
     text-align: left;
     background-color: grey;
    color: white;
    font-size: 20px;
}
td {
    height: 50px;
    width: 30px;
    vertical-align: bottom;
    font-size: 20px;
}
       tr:nth-child(even) {background-color: white}
  tr:nth-child(odd) {background-color: indianred}

    </style>
    </head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
} 


  $result = mysqli_query($conn,"SELECT * FROM vehicle");

?> 
<div class="main">
    <div class="heading">
      <center>Vehicle Database</center>
     </div>
<table border="2">
   <tr>
      <th>Vehicle Number</th>
      <th>Parking spot</th>
       <th>Entry Time</th>
       
    </tr>
    <?php 
    while ($array = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        print "<tr> <td>";
        echo $array['number']; 
        print "</td> <td>";
        echo $array['spot']; 
        print "</td> <td>";
        echo $array['entry']; 
        print "</td> </tr>";
                
 }
    ?>
</table>
    </div>
</body>
</html>