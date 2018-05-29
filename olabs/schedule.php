<?php
include_once "header.php";
?>

<br><br>

<?php /*

$d1 = date_parse ("2011-05-17");
$d2 = date_parse ("2011-05-11 13:00:00");

print_r($d1);
print_r($d2);

if ($d1 < $d2) {
    echo '$d1 is less than $d2.';
} else if ($d1 == $d2) {
    echo '$d1 is equal to $d2.';
} else {
    echo '$d1 is greater than $d2.';
}
*/


?>

<?php
            if (isset($_GET['id']) AND $_GET['action']=='book' ){
                $id = $_GET['id'];
                $minutes_to_add = 10;
                $time = new DateTime($_GET['time']);
                $lecturer_name = $_GET['lecturer_name'];
                $s_date = $_GET['time'];

                $newtimestamp = strtotime(''.$_GET['time'].' + '.$minutes_to_add.' minute');
                $newdate = date('Y-m-d H:i:s', $newtimestamp); 
                $date = explode(" ", $newdate);   
                $start_time = $date[1];



                $query = $conn->query("select * from schedule where s_date = '$s_date' and full_name = '$lecturer_name' ")or die(mysqli_error($conn));
                        $count = mysqli_num_rows($query);
                    /*  echo $count; */
                        if ($count  > 0){ ?>
                        <script>
                        alert('You have already schedule on this date');
                        </script>
                        <?php
                        }else{            

                            $query = $conn->query("UPDATE schedule
                                SET start_time='$start_time' 
                                WHERE id='$id'"); 
                        }
            }
               
        ?>



<?php       
/*            

            $query = $conn->query("select * from schedule where s_date = '$s_date' ")or die(mysqli_error());
            while ($row = mysqli_fetch_array($query)) {
                        $id = $row[''];
                        $lecturer_name = $row['lecturer_name'];
                        $s_date = $row['s_date'];
                        $start_time = date_format(new DateTime($row['start_time']),'H:i:sa');
                        $end_time = date_format(new DateTime($row['end_time']),'H:i:sa');
        $count = mysqli_num_rows($query);
        $equal = $count + 1 ;
        

        ?>

        <div class="question">
        <div class="alert alert-success">Your the number <strong><?php echo $equal; ?></strong> client in this date <strong><?php echo  $date; ?></strong></div>
        <form method="POST" action="yes.php">
        <input type="hidden" name="session_id" value="<?php echo $session_id; ?>" >
        <input type="hidden" name="date1" value="<?php echo $date; ?>" >
        <input type="hidden" name="service1" value="<?php echo $service; ?>" >
        <input type="hidden" name="equal" value="<?php echo $equal; ?>" >
        <p>Are you sure you want to set your Appointment on this date?</p>
        <button name="yes" class="btn btn-success"><i class="icon-check icon-large"></i>&nbsp;Yes</button> &nbsp;  <a href="dasboard.php" class="btn"><i class="icon-remove"></i>&nbsp;No</a>
        </form>
    
        </div>
        <br>
        <br>
        <?php }}  */?>



 <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Lecturer</th>
                        <th>Date</th>                                 
                        <th>Time Range</th>                                           
                        <th>Status</th>
                      
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $user_query = $conn->query("SELECT * from schedule")or die(mysqli_error());
                    while ($row = mysqli_fetch_array($user_query)) {
                        $id = $row['id'];
                        $lecturer_name = $row['full_name'];
                        $s_date = $row['s_date'];
                        $start_time = date_format(new DateTime($row['start_time']),'H:i:sa');
                        $end_time = date_format(new DateTime($row['end_time']),'H:i:sa');
                        $new_start_time = date_format(new DateTime($row['start_time']),'H:i');


                        ?>

                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['full_name']; ?></td> 
                            <td><?php echo $row['s_date']; ?></td> 
                            <td><?php echo $start_time . " - ". $end_time; ?></td> 
                            <td> 
                                <a href="schedule.php?action=book&id=<?php echo $id; ?>&time=<?php echo $row['s_date'].' '.$new_start_time; ?>&lecturer_name=<?php echo $lecturer_name;?>"  class="btn btn-warning">Book Appointment</a>
                            </td>
                            
                        </tr>
<?php } ?>

                </tbody>
            </table>


        

<?php
include_once "footer.php";
?>