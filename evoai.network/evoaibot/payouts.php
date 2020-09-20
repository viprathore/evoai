<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title></title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">

  </head>
  <body>

        <div class="slim-header with-sidebar">
      <div class="container-fluid">
        <div class="slim-header-left">
          <h2 class="slim-logo"><img src="img/logo_evo.png" width="90%" /></h2>
          <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span>Katherine</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container-fluid -->
    </div><!-- slim-header -->

    <div class="slim-body">
      <?php include 'header.php'; ?>

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
              <!--<li class="breadcrumb-item"><a href="#">UI Elements</a></li>-->
              <!--<li class="breadcrumb-item active" aria-current="page">ChartJS Charts</li>-->
            </ol>
            <h6 class="slim-pagetitle">BETA PAYOUTS</h6>
          </div><!-- slim-pageheader -->

  
          <div class="section-wrapper mg-t-20">
        
            <div class="row">
                <div class="col-xl-6">
                <p style="font-size: 22px;">TOTAL 24HR EVOAIBOT PROFIT: <span style="font-size: 22px; color: green;" id ="virtualTradedProfit"></span> ETH</p><br/>
                
                <label>ADJUSTED 24HR EVABOT PROFIT: </label><input type="text" id="payoutAmount" class="form-control" placeholder=" Adjusted Payout Amount"><br>
                <button class="btn btn-success btn-block mg-b-4" id="payoutButton">SUBMIT ADJUSTED</button>
                <br/><br/>
                
                
                
                <p style="font-size: 22px;">FINAL ADJUSTED PROFIT: <span style="font-size: 22px; color: green;" id ="adjustedProfit"></span> ETH</p><br/>
                <button class="btn btn-primary btn-block mg-b-10">SUBMIT 24HR PROFIT TO SMARTCONTRACT </button>
                </div>
            </div>
           
          </div><!-- section-wrapper -->

         
        </div><!-- container -->

        <div class="slim-footer mg-t-0">
          <div class="container-fluid">
            <p>Copyright 2018 &copy; All Rights Reserved. </p>
           
          </div><!-- container-fluid -->
        </div><!-- slim-footer -->
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->

    <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="lib/chart.js/js/Chart.js"></script>

    <script src="js/slim.js"></script>
    <!--<script src="js/chart.chartjs.js"></script>-->
    <script>
    $(document).ready(function(){
          var accessToken = localStorage.getItem("access_token");
        console.log(accessToken);
        if(!accessToken){
            window.location.href="login.php";
        }
     var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/currentProfit",
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    console.log(response);
                
                    
                    // $('#cooldown option[value="'+response+'"]').prop('selected', true);
                    $('#virtualTradedProfit').html(response);
                    
            });
            
            
            //Payout Profit
             var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/payoutProfit",
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    console.log(response);
                
                    
                    // $('#cooldown option[value="'+response+'"]').prop('selected', true);
                    $('#adjustedProfit').html(response.profit);
                    
            });
    
    //Payout Profit
    $('#payoutButton').on('click', function(){
                
                    var invest = $('#payoutAmount').val()
                    
                    if(invest == '' || invest == null)
                    {    invest = 0.0
                        alert("Please enter an amount")
                    }
                    else
                    {
                        console.log("Investment amount"+invest)
                    var data ={profit:invest};
                    console.log(data)
                    var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/payoutProfit",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                    }
                    
                      $.ajax(settings).done(function (response) {
                            console.log(settings)
                            console.log(response);
                            window.location = 'payouts.php'
                        // if(response){
                        //     var len = response.length;
                        //     console.log(len);
                        //     for(var i=0;i<len;i++){
                        //         $name =  response[i];
                               
                        //         $('#exchange1').append('<option value="'+$name+'">'+$name+'</option>');
                        //         $('#exchange2').append('<option value="'+$name+'">'+$name+'</option>');
                                
                        //     }
                        });
                    }
                    });
    
        
        
    });
    </script>
  
    
  </body>
</html>
