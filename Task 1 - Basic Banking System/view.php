<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM customer WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['send']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customer where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo 'alert( Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='customer.php';
                           </script>";
                    
                }

                $newbalance=0;
                $amount=0;
        }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favi.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <title><?php echo $row['name'];?></title>
</head>
<body>
    <?php include 'nav.php';?>

    <div class="container_tab" style="margin-top:80px; margin-left:100px; margin-right:100px;">
        <h3>Beneficiary Details</h3><br>
        <div class="border" style="border:2px solid #eee; border-radius:15px; padding:10px; background-color: #feb">

            <div class="row mb-3">
                <label for="" class="col-sm-10 col-form-label"> Name:
                    <div class="col-sm-6">
                        <?php echo $row['name'];?> 
                    </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"> Email: 
                        <div class="col-sm-6">
                    <?php echo $row['email'];?>
                    </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"> Balance:  
                    <div class="col-sm-6">
                    &#x20B9;<?php echo $row['balance'];?>
                    </div>
            </div>
        </div>

        <br><hr><br>


        <div class="border" style="border:2px solid #eee; border-radius:15px; padding:10px; background-color: #fef">
            <div class="row mb-3">
                <form method="post" name="tcredit" class="tabletext" >
                    <label for="" class="col-sm-4 col-form-label">Transfer to</label>
                        <div class="col-sm-15">
                            <select class="form-select" name="to" id="">
                                <?php
                                    $s="select * from customer where id!=$id";
                                    $result=mysqli_query($conn,$s);
                                    $r=mysqli_num_rows($result);
                                while($data=mysqli_fetch_array($result))
                                    {
                                        echo "<option value=$data[0]>$data[1] (Balance: $data[3])</option>"; 
                                                                    }
                                ?>
                            </select>
                        </div>

                        <label for="" class="col-sm-4 col-form-label">Amount to transfer</label>
                        <div class="col-sm-15">
                            <input type="number" name="amount" class="form-control" id="" placeholder="" value="" required>
                        </div>
                    </div> 

                    <div class="offset-sm-5 col-sm-2 d-grid">
                        <button type="submit" class="btn btn-primary" name="send">Transfer</button>
                    </div>
                </form>    
            </div> 
        </div>
    </div>
</body>
</html>