<!Doctype html>
<html lang="en">
    <head>
        <title>User Login</title>
        <meta charset="utf-8">
        <!-- mobile metas start -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- mobile metas end -->
        <!-- site metas start -->
        <meta name="keywords" content="login, signin, join, open, start, open account">
        <meta name="description" content="">
        <meta name="author" content="Mr NGEUTSA">
        <!-- site metas end -->
        <!-- style css start-->
        <link rel="stylesheet" type="text/css" href="style1.css">
        <!-- style css end -->
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
       <div class="container">
           <div class="login-box">
                <div class="row">
                    <div class="login-box">
                        <!-- validation start-->
                        <div class="col-md-6">
                            <h2> Login Here </h2>
                                <form action="validation.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        </div>
                        <!-- validation end --><br>
                        <div class="form-group">
                            <label>Don't have an acount?</label><br>
                            <a href="register.php"><button class="btn btn-primary">Create New Account</button></a> 
                        </div>
                    </div>
                </div>
           </div>
       </div>
    </body>
</html>