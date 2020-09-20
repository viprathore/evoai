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

    <title>Dashboard</title>

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
            <h6 class="slim-pagetitle">Dashboard</h6>
          </div><!-- slim-pageheader -->
            <div class="section-wrapper mg-t-20">
            <div class="row">
              <div class="col-md-12">
                <label class="section-title">FUND GROWTH CHART</label>
               <div id="containerChartProfit" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div><!-- col-6 -->
              </div>
              

            <div class="row">
              
              <div class="col-md-6 mg-t-20 mg-md-t-0" >
                   <label class="section-title" style="text-align:center;">PROFIT BY EXCHANGE DONUT CHART</label>
                    <div style="width:60%; margin:0 auto;">
                       <select id="exchange1" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select><br/><br/>
                    </div>
                <div class="bd pd-t-30 pd-b-20 pd-x-20" id="chart_2"><canvas id="chartDonut" height="200"></canvas></div>
              </div><!-- col-6 -->
              <div class="col-md-6">
                   <label class="section-title" style="text-align:center;">PROFIT BY COIN PAIR DONUT CHART</label>
                   <div style="width:60%; margin:0 auto;">
                       <select id="pairs1" class="form-control" data-placeholder="Choose one">
                            <option label="Select Pair"></option>
                          </select><br/><br/>
                    </div>
                <div class="bd pd-t-30 pd-b-20 pd-x-20" id="chart_3"><canvas id="chartDonut3" height="200"></canvas></div>
              </div><!-- col-6 -->
              
              <div class="col-md-6">
                   <label class="section-title" style="text-align:center;margin-top:50px;">24HR PROFIT DONUT CHART</label>
                <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartPie" height="200"></canvas></div>
              </div><!-- col-6 -->
              
            </div><!-- row -->
            <br/>
            <br/>
            <div class="row">
                <div class="col-md-12">
                   <div class="table-responsive" style="padding-bottom: 20px;">
                              <table id="topFive" class="table mg-b-0 tx-13" id="tbl" style="background-color: white;">
                                <thead>
                                  <tr class="tx-10">
                                    <th class="pd-y-5">Symbol</th>
                                    <th class="pd-y-5">Buy Exchange</th>
                                    <th class="pd-y-5">Buy Price</th>
                                    <th class="pd-y-5">Sell Exchange</th>
                                    <th class="pd-y-5">Sell Price</th>
                                    <th class="pd-y-5">Volume</th>
                                    <th class="pd-y-5">Profit Percentage</th>
                                    <th class="pd-y-5">Profit </th>
                                    <th class="pd-y-5">Profit ETH</th>
                                    <th class="pd-y-5">Datetime</th>
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
            <p>Copyright 2018 &copy; All Rights Reserved. </p>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>
//         $(function(){
            
//   /** PIE CHART **/
//   var randomScalingFactor = function() {
//     //   console.log(Math.round(Math.random() * 100));
//     return Math.round(Math.random() * 100);
//   };

//   var datapie = {
//     datasets: [{
//       data: [
//         randomScalingFactor(),
//         randomScalingFactor(),
//         randomScalingFactor(),
//         randomScalingFactor(),
//         randomScalingFactor(),
//       ],
//       backgroundColor: [
//         '#29B0D0',
//         '#4C6579',
//         '#F57E2E',
//         '#C8E0E4',
//         '#A6A7AC'
//       ]
//     }]
//   };
  
//   var optionpie = {
//     responsive: true,
//     legend: {
//       display: false,
//     },
//     animation: {
//       animateScale: true,
//       animateRotate: true
//     }
//   };

              
//               var ctx6 = document.getElementById('chartPie');
//               var myPieChart6 = new Chart(ctx6, {
//                 type: 'doughnut',
//                 data: datapie,
//                 options: optionpie
//               });


            
  
//               // For a pie chart
//               var ctx7 = document.getElementById('chartPie2');
//               var myPieChart7 = new Chart(ctx7, {
//                 type: 'doughnut',
//                 data: datapie,
//                 options: optionpie
//               });
  
//         });
        
        $.getJSON(
    'https://evoai.network:5000/v1/allDaysProfit',
    function (data) {

        Highcharts.chart('containerChartProfit', {
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
                   
                    $('#pairs1').append('<option value="'+$name+'">'+$name+'</option>');
                    
                }
            }
        });

        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/donutChartDailyProfit",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
                
                // console.log(response.chartVal);
                
                var arr1 = [];
                var arr2 = [];
                var data = response.chartVal;
                for(var i = 0;i<data.length;i++){
                    arr1[i] = data[i].profitEthTotal;
                    var date = new Date(data[i].arbDate);
                    date = date.toLocaleString();
                    arr2[i] = date;
                }
                if(response){
                var datapie2 = {
                                datasets: [{
                                  data: arr1,
                                  
                                 backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']
                                }],
                                labels:arr2,
                              };
                              
              var optionpie = {
                responsive: true,
                legend: {
                  display: false,
                },
                animation: {
                  animateScale: true,
                  animateRotate: true
                }
              };
                
            var ctx7 = document.getElementById('chartPie');
              var myPieChart7 = new Chart(ctx7, {
                type: 'doughnut',
                data: datapie2,
                options: optionpie
              });
              
            }
        });  
 
    $('#exchange1').on('change', function(){  
            
        var exchange = $('#exchange1').val();
        
        $('#chart_2').html('');
        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/donutChartProfitByExch?exchId="+exchange,
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
                
                
                $('#chart_2').html('<canvas id="chartDonut" height="200"></canvas>')
      
                var arr1 = [];
                var arr2 = [];
                var data = response.chartVal;
                for(var i = 0;i<data.length;i++){
                    arr1[i] = data[i].sum_1;
                    var date = new Date(data[i].date_1);
                    date = date.toLocaleString();
                    arr2[i] = date;
                }
            if(response){
                var datapie2 = {
                                datasets: [{
                                  data: arr1,
                                  
                                  backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']
                                }],
                                labels:arr2,
                              };
                                              
               var optionpie = {
                responsive: true,
                legend: {
                  display: false,
                },
                animation: {
                  animateScale: true,
                  animateRotate: true
                }
              };
              
              
                
            var ctx7 = document.getElementById('chartDonut');
              var myPieChart7 = new Chart(ctx7, {
                type: 'doughnut',
                data: datapie2,
                options: optionpie
              });
              
            }
        });   
        });
        
        
        
        

        
    $('#pairs1').on('change', function(){  
            
        var pair = $('#pairs1').val();
        
        $('#chart_3').html('');
        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/donutChartProfitByPair?pairId="+pair,
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
        $.ajax(settings).done(function (response) {
                
                
                $('#chart_3').html('<canvas id="chartDonut3" height="200"></canvas>')
           
                var arr1 = [];
                var arr2 = [];
                var data = response.chartVal;
                for(var i = 0;i<data.length;i++){
                    arr1[i] = data[i].sum_1;
                    var date = new Date(data[i].date_1);
                    date = date.toLocaleString();
                    arr2[i] = date;
                }
            if(response){
                var datapie2 = {
                                datasets: [{
                                  data: arr1,
                                 backgroundColor: ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']
                                }],
                                labels:arr2,
                              };
                              
              var optionpie = {
                responsive: true,
                legend: {
                  display: false,
                },
                animation: {
                  animateScale: true,
                  animateRotate: true
                }
              };
                
            var ctx7 = document.getElementById('chartDonut3');
              var myPieChart7 = new Chart(ctx7, {
                type: 'doughnut',
                data: datapie2,
                options: optionpie
              });
              
            }
        });  
        
    });
    
    
    
    var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:5000/v1/topFive",
              "method": "GET",
              "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+accessToken
              }
            }
            
    
     $.ajax(settings).done(function (response) {
                    console.log("check:"+response);
                    
                if(response){
                    var len = response.length;
                    console.log(len);
            
                    
                    for(var i=0;i<len;i++){
                        var symbol =  response[i]['symbol'];
                        var buyExch =  response[i]['buyExchange'];
                        var buyPrice =  response[i]['buyPrice'];
                        var sellExch =  response[i]['sellExchange'];
                        var sellPrice =  response[i]['sellPrice'];
                        var volume =  response[i]['volume'];
                        var profitPer =  response[i]['profitPer'];
                        var profit =  response[i]['profit'];
                        var profitEth =  response[i]['profitEth'];
                        var datetime =  response[i]['arbTimestamp'];
                        var date = new Date(datetime);
                        date = date.toLocaleString("en-US", { timeZone: 'UTC' });
                        
                        $('#topFive tbody').append('<tr><td>'+symbol+'</td><td>'+buyExch+'</td><td>'+buyPrice+'</td><td>'+sellExch+'</td><td>'+sellPrice+'</td><td>'+volume+'</td><td>'+profitPer+'</td><td>'+profit+'</td><td>'+profitEth+'</td><td>'+date+'</td>')
                    }
                    
                }
    }); 

        
    });
    
    </script>
  </body>
</html>
