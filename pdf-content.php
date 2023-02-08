<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>PDF</title>
      <style>
      #customers {
        border-collapse: collapse;
        width: 100%;
      }
      
      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }
      
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      
      #customers tr:hover {background-color: #ddd;}
      
      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:rgb(5 71 82);
        color: black;
      }
      </style>
</head>

<body>
	<h1>Liste Des Utilisateurs</h1>
          <table  id="customers">
              	<thead>
              		<tr>
              		<th>Identifiant</th>
              		<th>Email</th>
              		<th>Adresse</th>
              		<th>Telephone</th>
              		</tr>
              	</thead>
         	<tbody>
                <?php 
                    foreach ($users as $user){
                		 echo '<tr><td>';
                	   echo $user['identifiant'];
                		 echo '</td><td>';
                     echo $user['email'];
                		 echo '</td><td>';
                     echo $user['adresse'];
                		 echo '</td><td>'; 
                		 echo $user['telephone']; 
                		 echo '</td></tr>';
                		 }
                ?>
         	</tbody>
          </table>
</body>
</html>