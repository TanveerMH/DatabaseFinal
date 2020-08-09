<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `student` WHERE CONCAT(`student_id`, `st_fname`, `st_lname`, `st_username`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `student`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mahallahregistration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
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
}
.myButton {
  box-shadow: 0px 1px 0px 0px #f0f7fa;
  background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
  background-color:#33bdef;
  border-radius:6px;
  border:1px solid #057fd0;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px -1px 0px #5b6178;
}
.myButton:hover {
  background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
  background-color:#019ad2;
}
.myButton:active {
  position:relative;
  top:1px;
}</style>
    </head>
    <body>

        <form action=" " method="post">
            <center><div style="padding:10px;"><input style="padding:10px;" type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br></div></center>
            <center>	<a href="conference.php" class="myButton">Mahallah management system</a></center> <br>

           <table id="customers" >
                <tr>
           <th>Student_id</th>
          <th>User Name</th>
          <th>First name</th>
          <th>Last Name</th>
          <th>Status</th>
          <th>Phone</th>
          <th>Email</th>

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['st_username']; ?></td>
        <td><?php echo $row['st_fname']; ?></td>
        <td><?php echo $row['st_lname']; ?></td>
        <td><?php echo $row['st_status']; ?></td>
        <td><?php echo $row['st_phone']; ?></td>
       <td><?php echo $row['st_email']; ?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>
