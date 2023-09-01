
<?php 
  
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "student_details";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Student Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="sidebar.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Manage <b>Student</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
			</div>
			<ul>
				<li>
					<a href="sidebar.html">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="addstudentdetails.html">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Add Student Details</span>
					</a>
				</li>
				<li>
					<a href="viewstudentdetails.php">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>View Student Details</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<span>Edit student details</span>
					</a>
				</li>
				<!-- <li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li> -->
				<li>
					<a href="index.html">   
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
						
					</a>
				</li>
			</ul>
		</nav>
        <section class="main-page">
            <div class="main-top">
                <center>
                    <h1>WELCOME</h1>
                    <section class="container">
                        <header>Edit Student Details</header>
                        
                   <!-- <p style="color: black; font-size: large;">list of students</p> -->
				   <table class="content-table">
                        <thread>
                            <tr>
                                <th>ID&nbsp;&nbsp;</th>
                                <th>Student</th>
                            </tr>
                        </thread>
						<?php
						$sql = "SELECT full_name  from student_details ";
						$run = mysqli_query($conn,$sql);
						$i=1;
						while($row = mysqli_fetch_assoc($run))

						{
							
                            $full_name = $row['full_name'];

						?>

                        <tbody>
                            <tr>
                                <td> <?php echo $i++;  ?></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "<a href='update_perfect_details.php?update_details=$full_name'>$full_name</a>" ?></td>

								<!-- <td> <a href="view_perfect_details.php?fullname=<?php echo $row['full_name']; ?>">&nbsp;&nbsp;&nbsp;details</a> </td> -->


                            </tr>
                        </tbody>
						<?php  }  ?>

						
                    </table>
                </center>
                
            </div>
        </section>
        
          
	</div>
    

    </section>

</body>
</html>