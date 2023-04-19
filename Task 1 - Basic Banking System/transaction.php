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

    <title>Transaction History</title>
</head>
<body>
    <?php 
    include 'config.php';
    include 'nav.php';
    ?>

<div class="container_tab" style="margin-top:70px; margin-left:200px; margin-right:200px;">
<h2>Transaction History</h2>
    <table id="example" class="table table-hover">
        <thead class="">
            <tr>
                <th>SI No</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date and Time<i class="fa fa-times" aria-hidden="true"></i></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM transaction";
            $result = $conn->query($sql);

            if(!$result){
                die("Invalid query: " .$conn->error);
            }
            while($row = $result->fetch_assoc()){
            ?>

            <tr>
                <td><?php echo $row['sno'];?></td>
                <td><?php echo $row['sender'];?></td>
                <td><?php echo $row['receiver'];?></td>
                <td><?php echo $row['balance'];?></td>
                <td><?php echo $row['datetime'];?></td>

            </tr>

            <?php  
            } 
            ?>
        </tbody>
    </table>
</div>
<div class="dev fixed-bottom" style="background:#bdc6ce; color:black; width:100%; position: absolute; text-align:center; padding:4px; font-size:14px; letter-spacing:.2em; font-weight:bold;">
        Designed and Developed by &copy; <a href="https://www.linkedin.com/in/rashad-h/" style="text-decoration: none;">RASHAD H</a> 
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
    
</body>
</html>