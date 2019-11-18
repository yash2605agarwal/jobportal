<?php 
	
	//Including database connection files to the page.
	require 'db.connect.php';
	$con= new mysqli("localhost", "root", "", "jobsportal");
	
	//Current Date
	$current_date = date('Y-m-d');
	
	//Query which is going to execute to for database manipulation.
	$query = "SELECT * FROM job_details";
	$query_jobs = mysqli_query($con,$query);
				
		echo '	<table border="1">
					<tr>
						<td><center><b>Name</center></b></td>
						<td><center><b>Profile</b></center></td>
						<td><center><b>Key Skill</b></center></td>
						<td><center><b>Location</b></center></td>
						<td><center><b>CTC</b></center></td>
						<td><center><b>Expiration Date</b></center></td>
						
					</tr>
				</table>';
		
	$query_rows_num = mysqli_num_rows($query_jobs);
	if($query_rows_num > 0)
	{		
		while($query_jobs_result = mysqli_fetch_array($query_jobs))
		{	
			echo '	<table border="1">
						<tr>
							<td><center>'.$query_jobs_result['name'].'</center></td>
							<td><center>'.$query_jobs_result['profile'].'</center></td>
							<td><center>'.$query_jobs_result['key_skill'].'</center></td>
							<td><center>'.$query_jobs_result['location'].'</center></td>
							<td><center>'.$query_jobs_result['ctc'].'</center></td>
							<td><center>'.$query_jobs_result['expire_date'].'</center></td>
							 
						</tr>
					</table>';
			}
	}
?>

<!-- 	
		'_window', 'MyWindow'
		
		_window or _tab use for opening the other page in new tab
		MyWindow seperates the tab from browser.