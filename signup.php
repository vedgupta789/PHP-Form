<?php
    session_start();
    if (isset($_SESSION['err'])){
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
                <div class="col-sm-6 col-sm-offset-3">
                    <h1>Signup</h1>
                    <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="email" name="email" id="email"
                                           required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="password"name="password_ved" id="password_ved"
                                           required="true" >
                                    

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="first name"name="first name" id="first name" 
                                           required="true" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="last name"name="last name" id="last name"
                                           required="true" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="phone" name="phone" id="phone"
                                           required="true" >
                                    

                                </div>
                                
                        <button type="submit" class="btn btn-primary" value="registration_submit">submit</button>
                            </form>
                    <footer style='text-align:right;color:grey'>Made by Ved Gupta</footer>
                </div>
            </div>
        </div>
    </body>
</html>
