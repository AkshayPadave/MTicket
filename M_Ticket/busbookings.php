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
            
      </head>  
      <body >  

           <div class="container">  
             <h1><center><b>USER'S BUS DATABASE</center></b></h1>
                <br />  
                     <table id="database_table" class="table table-striped table-bordered">  
                          <thead>  
                            <tr>
  <th>Date & Time</th>
  <th>Booking ID </th>
  <th>Name</th>
  <th>Source</th>
  <th>Destination</th>
  <th>Bus Number</th>
  <th>Amount Paid</th>
  <th>Download</th>
   </tr>  
                          </thead>  
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `bustransactions`  WHERE  `email`='".$_SESSION['email']."' " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Date"].'</td>
        <td>'.$row["T_No."].'</td>
        <td>'.$row["Name"].'</td>
        <td>'.$row["source"].'</td>
        <td>'.$row["dest"].'</td>
        <td>'.$row["Bus_No"].'</td>
        <td>₹&nbsp&nbsp'.$row["Amt"].'</td>
        <td><a  href="busprint.php?pid='.$row["T_No."].' " target="_blank">Click Here</a></td>
       

';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} ); 
 </script>  
