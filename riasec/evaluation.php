<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>

<?php include('dbcon.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

	<?php
		if(isset($_POST['submit'])){
		


		$ques = array(
			$_POST['que1'],
			$_POST['que2'],
			$_POST['que3'],
			$_POST['que4'],
			$_POST['que5'],
			$_POST['que6'],
			$_POST['que7'],
			$_POST['que8'],
			$_POST['que9'],
			$_POST['que10'],
			$_POST['que11'],
			$_POST['que12'],
			$_POST['que13'],
			$_POST['que14'],
			$_POST['que15'],
			$_POST['que16'],
			$_POST['que17'],
			$_POST['que18'],
			$_POST['que19'],
			$_POST['que20'],
			$_POST['que21'],
			$_POST['que22'],
			$_POST['que23'],
			$_POST['que24'],
			$_POST['que25'],
			$_POST['que26'],
			$_POST['que27'],
			$_POST['que28'],
			$_POST['que29'],
			$_POST['que30'],
			$_POST['que31'],
			$_POST['que32'],
			$_POST['que33'],
			$_POST['que34'],
			$_POST['que35'],
			$_POST['que36'],
			$_POST['que37'],
			$_POST['que38'],
			$_POST['que39'],
			$_POST['que40'],
			$_POST['que41'],
			$_POST['que42']
		);
		$r = 0; $i = 0; $a = 0; $s = 0; $e = 0; $c = 0;
		

			$arrlength = count($ques);
			echo $arrlength;
			echo "<br>";

			for($x = 0; $x < $arrlength; $x++) {
				

   				switch ($x) {
   					case 1:
   					case 7:
   					case 14:
   					case 22:
   					case 30:
   					case 32:
   					case 37:
   					if ($ques[$x] == 'yes') {
   							$r +=1;  
   						}
   						
   						break;

   					case 2:
   					case 11:
   					case 18:
   					case 21:
   					case 26:
   					case 33:
   					case 39:
   					if ($ques[$x] == 'yes') {
   							$i +=1;  
   						}
   						
   						break;

   					case 3:
   					case 8:
   					case 17:
   					case 23:
   					case 27:
   					case 31:
   					case 41:
   					if ($ques[$x] == 'yes') {
   							$a +=1;  
   						}
   						
   						break;

   					case 4:
   					case 12:
   					case 13:
   					case 20:
   					case 28:
   					case 34:
   					case 40:
   					if ($ques[$x] == 'yes') {
   							$s +=1;  
   						}
   						
   						break;

   					case 5:
   					case 10:
   					case 16:
   					case 19:
   					case 29:
   					case 36:
   					case 42:
   					if ($ques[$x] == 'yes') {
   							$e +=1;  
   						}
   						
   						break;
   					
   					default:
   						if ($ques[$x] == 'yes') {
   							$c +=1;  
   						}
   						break;
   				}
   				
			}
				echo $r;
				echo "<br>";
   				echo $i;
   				echo "<br>";
   				echo $a;
   				echo "<br>";
   				echo $s;
   				echo "<br>";
   				echo $e;
   				echo "<br>";
   				echo $c;
   				echo "<br>";


   				echo (max($r, $i, $a, $s, $e, $c));
   				echo "<br>";


   				$riasec = array("realistic"=>"$r", "investigative"=>"$i", "artistic"=>"$a", "social"=>"$s", "enterprising"=>"$e", "conventional"=>"$c");
   				$highest_value = max($riasec);
   				echo "max is " . max($riasec);
   				echo "<br>";

   				$evaluation = array_search($highest_value, $riasec);
   				echo $evaluation;


   				switch ($evaluation) {
				    case "realistic":
				        echo "Your shows you are realistic!";
				        //do header to location, use use get to pass case and use case to query database
				        break;
				    case "investigative":
				        echo "Your shows you are investigative!";
				        break;
				    case "artistic":
				        echo "Your shows you are artistic!";
				        break;
				    case "social":
				        echo "Your shows you are socialenterprising!";
				        break;
				    case "enterprising":
				        echo "Your shows you are enterprising!";
				        break;
				    default:
				        echo "Your shows you are conventional!";
				}


					 echo header("Location: result.php?evaluation= $evaluation");

			}                 	 
				            		
	?>

</body>
</html>