<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Login</title>

    <!-- Vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.php"><img src="img/logo_evo.png" width="90%" /></a></h2>
        <h2 class="signin-title-primary">Welcome back!</h2>
        <h3 class="signin-title-secondary">Sign in to continue.</h3>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username" id="username">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input type="password" class="form-control" placeholder="Enter your password" id="password">
        </div><!-- form-group -->
        <button class="btn btn-primary btn-block btn-signin" id="signin_btn">Sign In</button>
        <p class="mg-b-0">Don't have an account? <a href="signup.html">Sign Up</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>

    <script src="js/slim.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $('#signin_btn').click(function(){
            // alert("test");
            $username = $('#username').val();
            $password = $('#password').val();
            
            // var data ={username:$username,password:$password};
      
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "https://evoai.network:4000/trading/v1/login?username="+$username+"&password="+$password,
              "method": "GET",
            //   "headers": {
            //     "Content-Type": "application/json"
            //   },
            //   "processData": false,
            }
            
            $.ajax(settings).done(function (response) {
                console.log(response);
                if(response['message']){
                    console.log(response['message']);
                     alert(response['message']);
                }
                else if(response['access_token']){
                    console.log(response['access_token']);
                    localStorage.setItem("access_token", response['access_token']);
                    localStorage.setItem("userId", response['userId']);
                    swal({
                        title: "Success!",
                        text: "'Login Successful! Redirecting...",
                        type: "success"
                    }).then(function() {
                        window.location.href= "index.php";
                    });
                      setTimeout(function(){ 
                      window.location.href = "index.php";  }, 3000);
                }
            });

        });
    </script>


  </body>
</html>
