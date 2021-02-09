<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container " style='margin: 10%'>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Registered Users</h1>
                    <table class=" table table-striped table-responsive table-bordered" style="margin-top: 20px;">
                        <tbody>
                            
                            <?php
                            include 'common.php';
                            $select_query = "SELECT `id`, `email`,`firstname`,`lastname`,`phone` FROM `kohlimediasignup`";
                            $result = mysqli_query($con, $select_query);
                            if(mysqli_num_rows($result)>0){
                                echo '<tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                            </tr>';
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                    echo '<tr><td>'.$row['id'].'</td>'
                                            . '<td>'.$row['firstname']." ".$row['lastname'].'</td>'
                                            . '<td>'.$row['email'].'</td>'
                                            . '<td>'.$row['phone'].'</td></tr>';
                                }
                            }else{
                                echo '<div style="text-align:center; margin-top:5%; color: #999999;"><h3>No Users Found.</h3></div>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
