<!Doctype html>
<html>
    <head>
        <title>User Registration</title>
        <meta charset="utf-8">
        <!-- mobile metas start -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- mobile metas end -->
        <!-- site metas start -->
        <meta name="keywords" content="register, signup, join, open, start, create account">
        <meta name="description" content="">
        <meta name="author" content="Mr NGEUTSA">
        <!-- site metas end -->
        <!-- style css start -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <!-- style css end -->
    </head>
    <body>
       <div class="container">
           <div class="login-box">
                <div class="row">
                    <div class="login-box">
                        <!-- registration start -->
                        <div class="col-md-6 login right">
                            <h2> Register Here </h2>
                            <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password"  class="form-control" required>
                            </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                        <br>
                        <div class="form-group">
                            Already have an account <br>
                            <a href="login.php"><button class="btn btn-primary">Login Here</button></a>
                        </div>
                         <!-- registration end-->
                    </div>
                </div>
            </div>
           </div>
       </div>
    </body>
</html>