<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>

  <div>

  </div>
<style>

table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}


</style>


<head>  
           <title>M-TICKET DATABASE</title>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body >  
                     <h1><center><b>PANVEL TO THANE TRAIN SCHEDULE</center></b></h1>

           <div class="container">  
                <br />  
                     <table id="database_table" class="table table-striped table-bordered">  
                          <thead>  
                            <tr>
  <th>Panvel </th>
  <th>Khandeshwar </th>
  <th>Manasarovar</th>
  <th>Kharghar</th>
  <th>Belapur CBD</th>
  <th>Seawood Darave</th>
  <th>Nerul </th>
  <th>Juinagar</th>
  <th>Turbhe</th>
  <th>Koparkhairne</th>
  <th>Ghansoli</th>
  <th>Rabale </th>
  <th>Airoli</th>
  <th>Thane</th>

  </tr>  
                          </thead>  
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `traintt`   " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Panvel"].'</td>
        <td>'.$row["Khandeshwar"].'</td>
        <td>'.$row["Manasarovar"].'</td>
        <td>'.$row["Kharghar"].'</td>
        <td>'.$row["Belapur CBD"].'</td>
        <td>'.$row["Seawood Darave"].'</td>
        <td>'.$row["Nerul"].'</td>
        <td>'.$row["Juinagar"].'</td>
        <td>'.$row["Turbhe"].'</td>
        <td>'.$row["Koparkhairne"].'</td>
        <td>'.$row["Ghansoli"].'</td>
        <td>'.$row["Rabale"].'</td>
        <td>'.$row["Airoli"].'</td>
        <td>'.$row["Thane"].'</td>


       
       

';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} ); 
 </script>  
