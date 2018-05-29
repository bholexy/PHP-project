<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<?php include('dbcon.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>


				    

				
		


		<div style="margin: 0 10%">
			<table cellpadding="0" cellspacing="0" border="0" >
					    <thead>
					      	<tr>
					      		<th scope="col" width="5%">S/N</th>
						        <th scope="col" width="40%">Questions</th>		
						        <th scope="col" width="5%"></th>
						        <th scope="col" width="5%"></th>	
						    </tr>
					    </thead>

					<form action="evaluation.php" method="POST">
					

		               	<tbody>	

			               	<?php
								$user_query = $conn->query("select id, question from question")or die(mysqli_error());
								while ($row = mysqli_fetch_array($user_query)) {
								    $id = $row['id'];
								    $question = $row['question'];
				                   	 
				            ?>

				            
				            <tr>			            		
				            </tr>

		                	<tr>
		                        <td><?php echo $id; ?></td>
		                        <td><?php echo $question; ?></td> 
		                        <td>   
		                           	<input type="radio" name="que<?php echo $id; ?>" value="yes"> YES
		                           	<br/>
		                        </td>
		                        <td> 
		                        	<input type="radio" name="que<?php echo $id; ?>" value="no"> NO
		                        	<br/>
		                        </td>
		                    </tr>

		                    <tr>		                    	
		                    </tr>

		               		

		                    <?php
								}
							?>
						</tbody>
					
						<tr style="background-color: white;">
							<td></td>
							<td>
								<button type="submit" name="submit">Submit</button>
								 &nbsp &nbsp 
								<button type="Reset" name="Reset">Reset</button>
							</td>
							
						</tr>	
									
							
					</form>
			</table>
		</div>


</body>
</html>
	