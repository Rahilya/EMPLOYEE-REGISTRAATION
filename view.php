<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Employee Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     
</head>
<body>
	<?php 
		$servername="localhost";
        $username="root";
        $password="";
        $dbname="global";
        
        $con = mysqli_connect($servername,$username,$password,$dbname);
		$sqlnew="select * from power";
		$res=mysqli_query($con,$sqlnew);
		
	?>
<div class="top mx-5">
	<nav class="navbar bg-light">
  <div class="container-fluid">
  <div class="text-end">
    <form class="d-flex" role="search">
		
      <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-success " type="submit">Search</button>
	 
	</form>
	  </div>
      </div>
      </nav>
     
	 <table id="myTable" class="table table-bordered border-dark table table-hover table table-sm" border ="1">
	 
		<tr>
			
 			<th>DATE</th>
			<th>EMPLOYEE NAME</th>
			<th>EMPLOYEE NO</th>
            <th>PERMANENT ADDRESS</th>
			<th>TEMPORARY ADDRESS</th>
			<th>EDUCATION</th>
            <th>DATE OF BIRTH</th>
            <th>PAN/AADHAR NO</th>
			<th> EMERGENCY CONTACT</th>
			<th>RELATION</th>
			<th>MOBILE NO</th>
            <th>MEDICAL FITNESS</th>
            <th>WORK EXPERIENCE</th>
			
			
		</tr>
		<?php while($row=mysqli_fetch_assoc($res)) { ?>   
		<tr> 
			<td>
				<?php echo $row['Date'];?>
			</td>
            <td>
				<?php echo $row['Name'];?>
			</td>
            <td>
				<?php echo $row['Mobile No'];?>
			</td>
            <td>
				<?php echo $row['Permanent Address'];?>
			</td>
            <td>
				<?php echo $row['Temporary Address'];?>
			</td>
            <td>
				<?php echo $row['Education'];?>
			</td>
            <td>
				<?php echo $row['Date Of Birth'];?>
			</td>
			<td>
				<?php echo $row['Pan/Aadhar No'];?>
			</td>
			<td>
				<?php echo $row['Emergency Contact Name'];?>
			</td>
			<td>
				<?php echo $row['Relation'];?>
			</td>
            <td>
				<?php echo $row['Mobile Number'];?>
			</td>
            <td>
				<?php echo $row['Medical Fitness'];?>
			</td>
            <td>
				<?php echo $row['Work Experience'];?>
			</td>
			
		</tr>
	<?php } ?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		</div>
		<!-- <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> -->
</body>
</html>