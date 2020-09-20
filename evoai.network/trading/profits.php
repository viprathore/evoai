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
            <h6 class="slim-pagetitle">profits</h6>
          </div><!-- slim-pageheader -->

  
          <div class="section-wrapper mg-t-20">
        

            <div class="row">
              <div class="col-xl-6">
                <label class="section-title">FUND GROWTH CHART</label>
               <div id="containerChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div><!-- col-6 -->
              <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                  <div style="padding: 30px;">
                      <div class="row">
                    
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Initial Investment Amount</label>
                             <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">ETH</span>
                              </div>
                              
                              <input type="text" id="investmentAmount" class="form-control" placeholder=" Investment amount">
                              
                            </div>
                        </div>
                      </div>
                    <br/><br/><br/>
                 
                    <button class="btn btn-primary btn-block mg-b-10" id="investment">SUBMIT</button>
                       <div class="input-group">
                        <!--<p style="color:#111;">TOTAL POTENTIAL PROFIT: $x</p>-->
                    </div>
                    <div class="input-group">
                        <p style="color:#111; font-size: 22px"><b>TODAY's VIRTUAL PROFIT: </b> <span style="font-size: 22px; color: green;" id ="virtualTradedProfit"></span> ETH</p>
                    </div>
                    <!--<div class="input-group">-->
                    <!--    <p style="color:#111;">AVERAGE ARB %</p>-->
                    <!--</div>-->
                  </div>
              </div>
             
            </div><!-- row -->
            <h2>Each Day Profit</h2>
            <div class="row">
    <div class="col-md-8">
     <div class="table-responsive" style="padding-bottom: 20px;">
                              <table id="arbEachDay" class="table mg-b-0 tx-13" id="tbl" style="background-color: white;">
                                <thead>
                                  <tr class="tx-10">
                                    <th class="pd-y-5">Start Time</th>
                                    <th class="pd-y-5">ETH Profit</th>
                                </tr>
                                </thead>
                                   <tbody>
                                    
                                </tbody>
                              </table>
                </div>
    </div>
    </div>
          </div><!-- section-wrapper -->

         
        </div><!-- container -->

        <div class="slim-footer mg-t-0">
          <div class="container-fluid">
            <p>Copyright 2018 &copy; All Rights Reserved.</p>
            <!--<p>Designed by: <a href="">ThemePixels</a></p>-->
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>
          /* LINE CHART */
          
 
$.getJSON(
    'http://ded4533.inmotionhosting.com:5000/v1/allDaysProfit',
    function (data) {

        Highcharts.chart('containerChart', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Fund Growth Rate'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                        'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'EVOAI Profits'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Fund Profits',
                data: data
            }]
        });
    }
);
 
 function checkLogin()
          {
    var accessToken = localStorage.getItem("access_token");
    if(accessToken == null || accessToken == undefined)
      window.location.href="login.php"
      var date = new Date(0);
        var base64Url = accessToken.split('.')[1];
        var base64 = base64Url.replace('-', '+').replace('_', '/');
      var decoded =  JSON.parse(window.atob(base64));
      console.log(decoded.exp)
      date.setUTCSeconds(decoded.exp);
     if(date.valueOf() > new Date().valueOf())
        console.log("Logged In")
    else
         window.location.href="login.php"
          }
  
  $( document ).ready(function() {
      checkLogin()
        var accessToken = localStorage.getItem("access_token");
        console.log(accessToken);
        if(!accessToken){
            window.location.href="login.php";
        }
  var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "http://ded4533.inmotionhosting.com:5000/v1/investment",
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    console.log(response);
                
                    
                    // $('#cooldown option[value="'+response+'"]').prop('selected', true);
                    $('#investmentAmount').val(response.investment);
                    
            });
 
 
 

 
 
 
 
 
 
   var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "http://ded4533.inmotionhosting.com:5000/v1/currentProfit",
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
 
 
             $('#investment').on('click', function(){
                
                    var invest = $('#investmentAmount').val()
                    
                    if(invest == '' || invest == null)
                        invest = 0.0
                    console.log("Investment amount"+invest)
                    var data ={investment:invest};
                    console.log(data)
                    var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "http://ded4533.inmotionhosting.com:5000/v1/investment",
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
                            if(response.inserted==false)
                                alert("Profit is already set")
                            else
                                window.location = 'profits.php'
                        // if(response){
                        //     var len = response.length;
                        //     console.log(len);
                        //     for(var i=0;i<len;i++){
                        //         $name =  response[i];
                               
                        //         $('#exchange1').append('<option value="'+$name+'">'+$name+'</option>');
                        //         $('#exchange2').append('<option value="'+$name+'">'+$name+'</option>');
                                
                        //     }
                        });
                    });


            var settings = {
              "async": false,
              "crossDomain": true,
              "url": "http://ded4533.inmotionhosting.com:5000/v1/arbDailyEth",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
            $.ajax(settings).done(function (response) {
                    console.log(response);
                    
                if(response){
                    var len = response.length;
                    console.log(len);
                    
                   
                    
                    for(var i=0;i<len;i++){
                        var arbDate =  response[i]['arbDate'];
                        var date = new Date(arbDate);
                        date = date.toLocaleString("en-US", { timeZone: 'UTC' });
                        var profit =  response[i]['profitEthTotal'];
                    
                        $('#arbEachDay tbody').append('<tr><td>'+date+'</td><td>'+profit+'</td></tr>');
                    }


             }
             
             });
  });

    </script>
    
  </body>
</html>
