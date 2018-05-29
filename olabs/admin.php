<?php
include_once "header.php";
?>

<br><br>
<?php


    $s_date = $start_time = $end_time = null;

   
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        // process the form


        $s_date             = ( $_POST['s_date'] );
        $start_time         = ( $_POST['start_time'] );
        $end_time           = ( $_POST['end_time'] );
        $lecturer_name      = get_name($_SESSION['matric_no']); 
        $matric_no          = $_SESSION['matric_no'];
       
        

         if ($start_time > $end_time) {?>
            <script>
                alert('please enter proper Time range');
            </script>
             
             <?php
            
        } else {

                    $sql = "INSERT INTO schedule (lecturer_name, s_date, start_time, end_time)
                        VALUES ('$lecturer_name', '$s_date', '$start_time', '$end_time')";

                        if ($conn->query($sql) === TRUE) {
                            //redirect("index.php");
                            

                        } else {
                            set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
                        };

        }

             

      
            

    /*        $qryy = "UPDATE member SET s_date = '$s_date', start_time = '$start_time', end_time='$end_time' 
    ";

     if ($conn->query($qryy) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            };


   */
            


           
           // redirect( 'index.php');

    }; 

?>


<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php echo "Welcome " . get_name($_SESSION['matric_no']); ?>
	</div>
	<h1 class="text-center"> Admin </h1>
</div>

    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div >
            <label  >Choose an appointment date (Monday - Friday):</label>
            <div >
            <input type="date" name="s_date" id="sd" maxlength="10" placeholder="dd/mm/yyyy" required/>
            </div>
            </div>

            <div >
                <label  >Choose an appointment time start (opening hours 8:00am to 4:00pm):</label>
            <div >
               <input type="time" name="start_time" placeholder="hh:mm" required"><br>
            </div>
            </div>

             <div >
                <label  >Choose an appointment time end (opening hours 8:00am to 4:00pm):</label>
            <div >
               <input type="time" name="end_time" placeholder="hh:mm" required"><br>   
            </div>
            </div>

            <div class="controls">
               <input type="submit" value="Set Time">   
            </div>

    </form>
          
         

       
<?php
include_once "footer.php";
?>