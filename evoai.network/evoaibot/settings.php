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
    <link href="lib/jquery-toggles/css/toggles-full.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">
    <style>
        .toggle-wrapper {
    width: 60px;
    display: inline-block;
    margin: 5px;
    position: relative;
}
.wd-250 {
    width: 350px;
}
.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
</style>
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
            <h6 class="slim-pagetitle">Settings</h6>
          </div><!-- slim-pageheader -->

  
          <div class="section-wrapper mg-t-20">
                    <div class="row">
                        <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-12"><label class="section-title">TOGGLE EXCHANGES</label></div><br/>
                        <div class="col-xl-6">
                                <div class="col d-flex">
                        <div class="wd-250">
                          <select id="exchange1" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                       <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                           <div class="toggle-wrapper">
                        <input id="exchtoggle" type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">       
                      <!--<div class="toggle toggle-modern primary" style="height: 26px; width: 60px;"><div class="toggle-slide"><div class="toggle-inner" style="width: 94px; margin-left: 0px;"><div class="toggle-on active" style="height: 26px; width: 47px; text-indent: -8.66667px; line-height: 26px;">ON</div><div class="toggle-blob" style="height: 26px; width: 26px; margin-left: -13px;"></div><div class="toggle-off" style="height: 26px; width: 47px; margin-left: -13px; text-indent: 8.66667px; line-height: 26px;">OFF</div></div></div></div>-->
                    </div>
                      </div> 
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-xl-12">
                        <label class="section-title">TOGGLE COIN PAIRS</label>
                        </div><br/>
                        <div class="col-xl-6">
                                <div class="col d-flex">
                        <div class="wd-250">
                          <select id="pairs" class="form-control" data-placeholder="Choose one">
                            <option label="Select Coin Pair"></option>
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                       <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                           <div class="toggle-wrapper">
                               <input id="pairtoggle" type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">      
                            </div>
                      </div> 
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-xl-12">
                        <label class="section-title">TOGGLE EXCHANGE TRANSACTION FEES</label>
                        </div><br/>
                          <div class="col-xl-6">
                                <div class="col d-flex">
                        <div class="wd-250">
                          <select id="exchange2" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                        <!--<div class="col-xl-4">-->
                        <!--<div class="input-group" style=" margin: 0 auto;">-->
                        <!--      <div class="input-group-prepend">-->
                        <!--        <span class="input-group-text">$</span>-->
                        <!--      </div>-->
                        <!--      <input type="text" class="form-control" placeholder=" exchange transaction fees">-->
                             
                        <!--    </div>-->
                        <!--    </div>-->
                        <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                           <div class="toggle-wrapper">
                               <input id="feetoggle" type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">      
                            </div>
                      </div> 
                    </div>
                    
                        <br/><br/>
                    <div class="row">
                        
                        <div class="col-xl-12">
                        <label class="section-title">ARB FREQUENCY</label>
                        </div><br/>
                        <div class="col-xl-6" >
                                <div class="col d-flex" >
                        <div class="wd-250">
                          <select id="frequency" class="form-control" data-placeholder="Choose one">
                            <option label="arb frequency"></option>
                            <option value="1">1min</option>
                            <option value="2">2min</option>
                            <option value="3">3min</option>
                            <option value="4">4min</option>
                            <option value="5">5min</option>
                            <option value="6">6min</option>
                            <option value="7">7min</option>
                            <option value="8">8min</option>
                            <option value="9">9min</option>
                            <option value="10">10min</option>
                            <option value="15">15min</option>
                            <option value="20">20min</option>
                            <option value="30">30min</option>
                            <option value="40">40min</option>
                            <option value="50">50min</option>
                            <option value="60">60min</option>
                            
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                      </div> 
                    <br/><br/>
                    <div class="row">
                        <div class="col-xl-12">
                        <label class="section-title"><label class="section-title">ARB COOL</label></label>
                        </div><br/>
                          <div class="col-xl-6">
                                <div class="col d-flex">
                        <div class="wd-250">
                          <select id="pairs2" class="form-control" data-placeholder="Choose one">
                            <option label="Select Arb Pair"></option>
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                        <div class="col-xl-6 mg-t-20 mg-xl-t-0" style="padding-left:0;">
                                <div class="col d-flex">
                        <div class="wd-250">
                          <select id="cooldown" class="form-control" data-placeholder="Choose one">
                            <option value="0" label="arb cool"></option>
                            <option value="20">20min</option>
                            <option value="40">40min</option>
                            <option value="60">60min</option>
                            
                          </select>
                        </div><!-- select2-wrapper -->
                      </div><!-- col-->
                        </div>
                    </div>
                      <!--<br/><br/>
                      <div class="row">
                          
                          <div class="col-sm-6">
                               <button class="btn btn-primary btn-block mg-b-10" style="width:350px;">SUBMIT</button>
                        </div>
                          </div>-->
         </div>
         </div>
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
    <script src="lib/jquery-toggles/js/toggles.min.js"></script>

    <script src="js/slim.js"></script>
    <!--<script src="js/chart.chartjs.js"></script>-->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
   <script>
             // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

   </script>
       <script>
    var exchtoggle;
    var pairtoggle;
    var feetoggle;
function checkLogin()
          {
               var accessToken = localStorage.getItem("access_token");
                if(accessToken == null || accessToken == undefined)
      window.location.href="login.php"
      var date = new Date(0);
        var base64Url = accessToken.split('.')[1];
        var base64 = base64Url.replace('-', '+').replace('_', '/');
      var decoded =  JSON.parse(window.atob(base64));
    //   console.log(decoded.exp)
      date.setUTCSeconds(decoded.exp);
     if(date.valueOf() > new Date().valueOf())
        console.log("Logged In")
    else
         window.location.href="login.php"
          }
      $( document ).ready(function() {
          checkLogin()
        var accessToken = localStorage.getItem("access_token");
        // console.log(accessToken);
        if(!accessToken){
            window.location.href="login.php";
        }
        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/exchanges",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
                // console.log(response);
                
            if(response){
                var len = response.length;
                // console.log(len);
                for(var i=0;i<len;i++){
                    $name =  response[i];
                   
                    $('#exchange1').append('<option value="'+$name+'">'+$name+'</option>');
                    $('#exchange2').append('<option value="'+$name+'">'+$name+'</option>');
                    
                }
            }
        });
        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/arbPairs",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
                // console.log(response);
                
            if(response){
                var len = response.length;
                // console.log(len);
                for(var i=0;i<len;i++){
                    $name =  response[i];
                   
                    $('#pairs2').append('<option value="'+$name+'">'+$name+'</option>');
                    
                }
            }
        });

        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/arbFrequency",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
            
            // console.log(response);
            
            if(response){
                $('#frequency option[value="'+response+'"]').prop('selected', true);
            }
        });

        
        $('#exchange1').on('change', function(){  
            
            var exchange = $('#exchange1').val();
            // console.log(exchange);
             $('#pairs').html('<option label="Select Coin Pair"></option>');
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/toggleExchange?exchId="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    // console.log(response);
                    
                if(response){
                    //  console.log(response['toggle']);
                     exchtoggle = response['toggle'];
                    if(response['toggle'] == 1)
                    {
                        $('#exchtoggle').bootstrapToggle('on')
                    }
                    else
                    {
                        $('#exchtoggle').bootstrapToggle('off')
                    }
                
                }
            });
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/pairs?exchId="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    // console.log(response);
                    
                if(response){
                    var len = response.length;
                    // console.log(len);
                    for(var i=0;i<len;i++){
                        $name =  response[i];
                       
                        $('#pairs').append('<option value="'+$name+'">'+$name+'</option>');
                        
                    }
                    //  console.log($data);
                }
            });
        })
        
        $('#pairs').on('change', function(){  
            
            var exchange = $('#exchange1').val();
            // console.log(exchange);
            
            var pair = $('#pairs').val();
            // console.log(pair);
            
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/togglePair?exchId="+exchange+"&pair="+pair,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    // console.log(response);
                    
                if(response){
                    //  console.log(response['toggle']);
                     pairtoggle = response['toggle'];
                    if(response['toggle'] == 1)
                    {
                        $('#pairtoggle').bootstrapToggle('on')
                    }
                    else
                    {
                        $('#pairtoggle').bootstrapToggle('off')
                    }
                
                }
            });

        })
        
        $('#exchtoggle').change(function() {
            var ischecked= $(this).is(':checked');
            var exchange = $('#exchange1').val();
            if(!ischecked)
            {
                var toggle = 0;
            }
            else
            {
                var toggle = 1;
            }
            if(exchtoggle != toggle){
                var data ={exchId:exchange,toggle:toggle};
                    var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/toggleExchange",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                    }
                    
                $.ajax(settings).done(function (response) {
                        // console.log(response);
                        
                });
            }    
        });
        
        $('#pairtoggle').change(function() {
            var ischecked= $(this).is(':checked');
            var exchange = $('#exchange1').val();
            var pair = $('#pairs').val();
            if(!ischecked)
            {
                var toggle = 0;
            }
            else
            {
                var toggle = 1;
            }
            if(pairtoggle != toggle){
                
                var data ={exchId:exchange,pair:pair,toggle:toggle};
                    var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/togglePair",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                    }
                    
                $.ajax(settings).done(function (response) {
                        // console.log(response);
                        
                });
            }
        });
        
        $('#frequency').change(function() {
    
            var frequency = $('#frequency').val();
            // console.log(frequency);
            
            var data ={frequency:frequency};
                var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/arbFrequency",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                }
                    
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                });
        });
        
        $('#pairs2').on('change', function(){  
            
            var pair = $('#pairs2').val();
            console.log(pair);
            
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/arbCooldown?pair="+pair,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    console.log(response);
                
                    
                    // $('#cooldown option[value="'+response+'"]').prop('selected', true);
                    $('#cooldown').val(response);
                    
            });

        });
        
        $('#cooldown').change(function() {
            
            var pair = $('#pairs2').val();
            console.log(pair);
            
            var cooldown = $('#cooldown').val();
            console.log(cooldown);
            
            var data ={pair:pair, cooldown:cooldown};
                var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/arbCooldown",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                }
                    
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                });
        });
        
        $('#exchange2').on('change', function(){  
            
            var exchange = $('#exchange2').val();
            console.log(exchange);
            
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:5000/v1/toggleFee?exchId="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    // console.log(response);
                    
                if(response){
                     console.log(response['toggle']);
                     feetoggle = response['toggle'];
                    if(response['toggle'] == 1)
                    {
                        $('#feetoggle').bootstrapToggle('on')
                    }
                    else
                    {
                        $('#feetoggle').bootstrapToggle('off')
                    }
                
                }
            });
        });
        
        $('#feetoggle').change(function() {
            var ischecked= $(this).is(':checked');
            var exchange = $('#exchange2').val();
            if(!ischecked)
            {
                var toggle = 0;
            }
            else
            {
                var toggle = 1;
            }
            if(feetoggle != toggle){
                var data ={exchId:exchange,toggle:toggle};
                    var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:5000/v1/toggleFee",
                      "method": "POST",
                      "headers": {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer "+accessToken
                      },
                      "processData": false,
                      "data": JSON.stringify(data)
                    }
                    
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                });
            }    
        });
        
      });
    </script>
    
  </body>
</html>
