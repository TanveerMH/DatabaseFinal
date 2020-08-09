<?php include "auth.php";
  $output=" ";
if (isset($_POST['search'])){
    $search = $_POST['search'];
    $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id LIKE '%$search%' OR name LIKE '%$search%' OR department LIKE '%$search%'") or die ("could not be search!"); 
    $count = mysqli_num_rows($query);
    if ($count==0){
        $output='No Employee found!';
    }else{
        while ($row =mysqli_fetch_array($query)){
            $id =$row['user_id'];
            $name=$row['name'];
            $department=$row['department'];
            $email=$row['email'];
            $output .='<div>'.$id.'&nbsp &nbsp &nbsp'.$name.'&nbsp &nbsp &nbsp'.$department.'&nbsp &nbsp &nbsp'.$email.'</div>';
        }
    }
}
?>
   <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
      <style>
          #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
  background-color: #4CAF50;
  color: white;
}</style>
    </head>
    <body>
      <?php
      $username = "root";
      $pass = "";
      $host = "localhost";
    $db="mahallahregistration";
        $conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}
      

      //execute the SQL query and return records
      $result = mysqli_query($conn,"SELECT * FROM student ");
      ?>
      <table id="customers" >
      <thead >
        <tr>
          <th>Student_id</th>
          <th>User Name</th>
          <th>First name</th>
          <th>Last Name</th>
          <th>Status</th>
          <th>Phone</th>
          <th>Email</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){ ?>
            <tr>
             <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['st_username']; ?></td>
        <td><?php echo $row['st_fname']; ?></td>
        <td><?php echo $row['st_lname']; ?></td>
        <td><?php echo $row['st_status']; ?></td>
        <td><?php echo $row['st_phone']; ?></td>
       <td><?php echo $row['st_email']; ?></td>
         <td ><a style="border:1px solid blue; background-color:#0ccefa;margin-right:5px;color:black;padding:5px;" href="editt.php?id=<?php echo $row['student_id'];?>">Edit</a><a style="border:1px solid blue; background-color:#0ccefa;margin-right:5px;color:red;padding:5px;" href="delete.php?id=<?php echo $row['student_id']; ?>" >Delete</a></td>
           </tr>
        <?php   }
        ?>
        
        
      </tbody>
    </table>
     <?php mysqli_close($conn); ?>
    </body>
    </html>