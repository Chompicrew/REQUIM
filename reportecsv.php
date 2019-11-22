 <?php  

include('connect_db.php'); 
      //export.php  
 if(isset($_POST["csv"]))  
 {  
       
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'user', 'edad', 'password', 'email', 'numero'));  
      $query = "SELECT id, user, edad, password, email, numero from login ORDER BY id ";  
      $resultado=mysqli_query($mysqli,$query) or die(mysqli_error());
      $result = mysqli_query($mysqli,$query);
      $sql = "select id, user, edad, password, email, numero from login";
      $run = mysqli_query($mysqli,$sql);  
      while($row = mysqli_fetch_assoc($result))
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>