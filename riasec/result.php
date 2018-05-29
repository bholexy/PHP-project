<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<?php include('dbcon.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<body class="body">

    <header>
        <h1 ></h1>
    </header>

  

<?php

            if ($_GET['evaluation']) {
            	$evaluation = $_GET['evaluation'];


            	$sql = "SELECT * FROM results where id = 1";
					$result = $conn->query($sql);

	if ($result->num_rows === 1) {

            	
                      
                                               		    
						    while($row = mysqli_fetch_assoc($result)) {
						        $name = $row["name"];
						        $preamble = $row["preamble"];
						        $major1 = $row["major1"];
						        $major2 = $row["major2"];
						        $major3 = $row["major3"];
						        $major4 = $row["major4"];
						        $major5 = $row["major5"];
						        $major6 = $row["major6"];
						        $major7 = $row["major7"];
						        $related_pathway1 = $row["related_pathway1"];
						        $related_pathway2 = $row["related_pathway2"];
						        $related_pathway3 = $row["related_pathway3"];
						        $related_pathway4 = $row["related_pathway4"];


						        $image2 = $row["image2"];
						    }
						} 					                
            }               
        ?>


    <div class="result_box">

        <img class="resultImage" src="<?php echo $image2 ?>" alt="image">
        <h1><?php echo $name; ?></h1>
        <p><?php echo $preamble; ?></p>
        
	        
			<div class="color_box">

				<div class="color_sub_box">
					
					<div style="text-align: left;">
						
						<p>
							<ol style="line-height: 25px">
								<li> <?php echo $major1; ?></li>
								<li> <?php echo $major2; ?></li>
								<li> <?php echo $major3; ?></li>
								<li> <?php echo $major4; ?></li>
								<li> <?php echo $major5; ?></li>
								<li> <?php echo $major6; ?></li>
								<li> <?php echo $major7; ?></li>
							</ol>							
						</p>

					</div>	
				</div>

				<div class="rp">
					
						<h4>
							Related Pathways
						</h4>

						<div style="text-align: left;">
						
						<p>
							<ul style="line-height: 25px">
								<li> <?php echo $related_pathway1; ?></li>
								<li> <?php echo $related_pathway2; ?></li>
								<li> <?php echo $related_pathway3; ?></li>
								<li> <?php echo $related_pathway4; ?></li>
							</ul>							
						</p>

					</div>	
				</div>
				
			</div>
			
    </div>

<footer>
Copyright © Bolex
</footer>



</body>
</html>