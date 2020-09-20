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
    <link href="lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    
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
            <h6 class="slim-pagetitle">Arbitrage Profits</h6>
          </div><!-- slim-pageheader -->
          <div class="section-wrapper mg-t-20">
 
            <div class="wd-200 mg-b-30 ">
                <label class="section-title">Select Date</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                  </div>
                </div>
                <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
              </div>
            </div><!-- wd-200 -->
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="table-responsive" style="padding-bottom: 20px;">
                              <table id="arbProfits" class="table mg-b-0 tx-13" id="tbl" style="background-color: white;">
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
          </div>

        
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
    <script src="lib/moment/js/moment.js"></script>
    <script src="lib/jquery-ui/js/jquery-ui.js"></script>
    <script src="lib/chart.js/js/Chart.js"></script>
    <script src="lib/datatables/js/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="js/slim.js"></script>
    <!--<script src="js/chart.chartjs.js"></script>-->
    
    <script>
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
        'use strict';
        
        var accessToken = localStorage.getItem("access_token");
   
        if(!accessToken){
            window.location.href="login.php";
        }
        
        
        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          dateFormat: 'yy-mm-dd',
          onSelect: function(dateText) {
            // console.log("Selected date: " + dateText + "; input's current value: " + this.value);
            var settings = {
              "async": false,
              "crossDomain": true,
              "url": "http://ded4533.inmotionhosting.com:5000/v1/arbProfits?date="+this.value,
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
                    
                    var table = $('#arbProfits').DataTable();
                    table.clear().draw();
                    
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
                        $('#arbProfits').dataTable().fnAddData( [
                                symbol,
                                buyExch,
                                buyPrice,
                                sellExch,
                                sellPrice,
                                volume,
                                profitPer,
                                profit,
                                profitEth,
                                date
                            ] );
                    }
                    
                }
            });    
          }
        });
        
        $('#arbProfits').DataTable({
        //   responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            
          }
        });
        
        
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
        
      });
     
    
    </script>
  </body>
</html>
