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
            <h6 class="slim-pagetitle">Dashboard</h6>
          </div><!-- slim-pageheader -->
            <div class="section-wrapper mg-t-20">
            <div class="row">
              <div class="col-md-6 mg-t-20 mg-md-t-0" >
                   <label class="section-title" style="text-align:center;">Active Exchange</label>
                    <div style="width:60%; margin:0 auto;">
                       <div class="table-responsive" style="padding-bottom: 20px;">
                            <table id="activaeExTable" class="table mg-b-0 tx-13" id="tbl" style="background-color: white;">
                                <thead>
                                  <tr class="tx-10">
                                    <th class="pd-y-5">Exchangee</th>
                                </tr>
                                </thead>
                                   <tbody>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
              <div class="col-md-6">
                   
                <div class="bd pd-t-30 pd-b-20 pd-x-20" id="chart_3">
                    <label class="section-title" style="text-align:center;">Exchanges</label>
                   <div style="width:60%; margin:0 auto;">
                       <select id="exchange1" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select><br/><br/>
                    </div>
                    <button class="btn btn-primary btn-block mg-b-10" id="activateExch">Activate Exchange</button>
                    <button class="btn btn-primary btn-block mg-b-10" id="addMarkets">Add Markets</button>
                    <button class="btn btn-danger btn-block mg-b-10" id="deactivateExch">Deactivate Exchange</button>
                    </div>
              </div><!-- col-6 -->
              </div>
              
            </div><!-- container -->
            <div class="section-wrapper mg-t-20">
            <div class="row">
              <center> <h2>ADD EXCHANGE KEYS</h2></center>
              <div class="col-md-6 mg-t-20 mg-md-t-0" >
                    <label class="section-title" style="text-align:center;">Exchanges</label>
                   <div style="width:60%; margin:0 auto;">
                       <select id="activeExch" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select><br/><br/>
                    </div>
                    <div class="row">
                    
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Public Key</label>
                             <div class="input-group">
                              <!--<div class="input-group-prepend">-->
                              <!--  <span class="input-group-text">ETH</span>-->
                              <!--</div>-->
                              
                              <input type="text" id="publicKey" class="form-control" placeholder="Public Key">
                              
                            </div>
                        </div>
                      </div><br>
                      <div class="row">
                    
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Secret Key</label>
                             <div class="input-group">
                              <!--<div class="input-group-prepend">-->
                              <!--  <span class="input-group-text">ETH</span>-->
                              <!--</div>-->
                              
                              <input type="text" id="secretKey" class="form-control" placeholder=" Secret Key">
                              
                            </div>
                        </div>
                      </div><br/><br/><br/>
                    <button class="btn btn-primary btn-block mg-b-10" id="addExKeys">Add keys</button>
                    </div>
              
            </div><!-- row -->
          </div><!-- section-wrapper -->
          
            <div class="section-wrapper mg-t-20">
            <div class="row">
              <center> <h2>TRADING</h2></center>
              <div class="col-md-6 mg-t-20 mg-md-t-0" >
                    <label class="section-title" style="text-align:center;">Exchanges</label>
                   <div style="width:60%; margin:0 auto;">
                       <select id="activeExch1" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select><br/><br/>
                    </div>
                    <div class="row">
                    
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Symbol</label>
                             <div class="input-group">
                              <select id="symbol" class="form-control" data-placeholder="Choose one">
                                <option label="Select symbol"></option>
                              </select>
                            </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Order Type</label>
                             <div class="input-group">
                              <select id="orderType" class="form-control" data-placeholder="Choose one">
                                <option label="Select type"></option>
                                <option value="market">Market</option>
                                <option value="limit">Limit</option>
                              </select>
                              
                            </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Side</label>
                             <div class="input-group">
                              <select id="side" class="form-control" data-placeholder="Choose one">
                                <option label="Select type"></option>
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                              </select>
                              
                            </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Amount</label>
                             <div class="input-group">
                              <!--<div class="input-group-prepend">-->
                              <!--  <span class="input-group-text">ETH</span>-->
                              <!--</div>-->
                              
                              <input type="text" id="amount" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-xl-12 mg-t-20 mg-xl-t-0"> 
                        <label>Price</label>
                             <div class="input-group">
                              <!--<div class="input-group-prepend">-->
                              <!--  <span class="input-group-text">ETH</span>-->
                              <!--</div>-->
                              
                              <input type="text" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                      </div><br/><br/><br/>
                    <button class="btn btn-primary btn-block mg-b-10" id="createOrder">Place Order</button>
                    </div>
              
            </div><!-- row -->
          </div><!-- section-wrapper -->
          
          
            <div class="section-wrapper mg-t-20">
            <div class="row">
              <center> <h2>BALANCES</h2></center>
                <div class="col-md-6 mg-t-20 mg-md-t-0" >
                    <label class="section-title" style="text-align:center;">Exchanges</label>
                   <div style="width:60%; margin:0 auto;">
                       <select id="activeExch2" class="form-control" data-placeholder="Choose one">
                            <option label="Select Exchange"></option>
                          </select><br/><br/>
                    </div>
                </div>
                <div class="col-md-12">
                    
                    <div class="table-responsive" style="padding-bottom: 20px;">
                              <table id="ExBalTable" class="table mg-b-0 tx-13" id="tbl" style="background-color: white;">
                                <thead>
                                  <tr class="tx-10">
                                    <th class="pd-y-5">Symbol</th>
                                    <th class="pd-y-5">Free Balance</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                              </table>
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
    <script src="lib/datatables/js/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script>
    
    function checkLogin()
    {
        var accessToken = localStorage.getItem("access_token");
        var userId = localStorage.getItem("userId");
        if(accessToken == null || accessToken == undefined || userId == null || userId == undefined)
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
        var userId = localStorage.getItem("userId");
        
        var settings = {
              "async": false,
              "crossDomain": true,
              "url": "https://evoai.network:4000/trading/v1/exchanges",
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
              "url": "https://evoai.network:4000/trading/v1/activeExchanges?userId="+userId,
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
                // console.log(len);
                for(var i=0;i<len;i++){
                    $name =  response[i];
                   
                    $('#activaeExTable tbody').append('<tr><td>'+$name+'</td></tr>');
                    $('#activeExch').append('<option value="'+$name+'">'+$name+'</option>');
                    $('#activeExch1').append('<option value="'+$name+'">'+$name+'</option>');
                    $('#activeExch2').append('<option value="'+$name+'">'+$name+'</option>');
                    
                }
            }
        });
        
        $('#activateExch').on('click', function(){
                
            var exchange = $('#exchange1').val();
            console.log(exchange);
            if(!exchange)
            {
                alert("select exchange first");
            }
            else
            {
                var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/setActiveExchange?userId="+userId+"&exchange="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
            
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                        $('#activaeExTable tbody').append('<tr><td id="'+exchange+'">'+exchange+'</td></tr>');
                        $('#activeExch').append('<option value="'+exchange+'">'+exchange+'</option>');
                        $('#activeExch1').append('<option value="'+exchange+'">'+exchange+'</option>');
                        $('#activeExch2').append('<option value="'+exchange+'">'+exchange+'</option>');
                        alert("Exchange Activated");
                        
                });
            }
        });
        
        $('#deactivateExch').on('click', function(){
                
            var exchange = $('#exchange1').val();
            console.log(exchange);
            if(!exchange)
            {
                alert("select exchange first");
            }
            else
            {
                var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/deactiveExchange?userId="+userId+"&exchange="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
            
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                    // if(response){
                            $("#"+exchange).remove();
                            $("#activeExch option[value='"+exchange+"']").remove();
                            $("#activeExch1 option[value='"+exchange+"']").remove();
                            $("#activeExch2 option[value='"+exchange+"']").remove();
                            alert("Exchange Deactivated");
                    
                    // }
                });
            }
        });
        
        $('#addMarkets').on('click', function(){
                
            var exchange = $('#exchange1').val();
            console.log(exchange);
            if(!exchange)
            {
                alert("select exchange first");
            }
            else
            {
                var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/addMarkets?userId="+userId+"&exchange="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
            
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                    // if(response){
                            alert("Exchange Markets Added");
                    // }
                });
            }
        });
        
        $('#addExKeys').on('click', function(){
                
            var activeExch = $('#activeExch').val();
            var api_key = $('#publicKey').val();
            var secret = $('#secretKey').val();
            console.log(activeExch);
            console.log(api_key);
            console.log(secret);
            if(!activeExch)
            {
                alert("select exchange first");
            }
            else if(!api_key)
            {
                alert("insert public key");
            }
            else if(!secret)
            {
                alert("insert secret key");
            }
            else
            {
                var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/addExchangeKeys?userId="+userId+"&exchange="+activeExch+"&api_key="+api_key+"&secret="+secret,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
            
                $.ajax(settings).done(function (response) {
                        console.log(response);
                        
                    if(response){
                        if(response.error)
                            alert(response.error);
                        else
                            alert(response.message);
                    }
                });
            }
        });
        
        $('#activeExch1').on('change', function(){  
            $('#symbol').html('<option label="Select symbol"></option>');
            var exchange = $('#activeExch1').val();
            console.log(exchange);
            
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/getExchangeMarkets?userId="+userId+"&exchange="+exchange,
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
                    // console.log(len);
                    for(var i=0;i<len;i++){
                        $name =  response[i];
                       
                        $('#symbol').append('<option value="'+$name+'">'+$name+'</option>');
                        
                        
                    }
                }
                else{
                    alert("Please Add Exchange Markets First");
                }
            });

        });
        
        $('#activeExch2').on('change', function(){  
            // $('#symbol').html('<option label="Select symbol"></option>');
            var exchange = $('#activeExch2').val();
            console.log(exchange);
            
            var settings = {
                  "async": false,
                  "crossDomain": true,
                  "url": "https://evoai.network:4000/trading/v1/getExchangeBalances?userId="+userId+"&exchange="+exchange,
                  "method": "GET",
                  "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer "+accessToken
                  }
                }
                
            $.ajax(settings).done(function (response) {
                    
                if(response){
                    if(response.error)
                        alert(response.error);
                    else
                    {
                        console.log(response.message);
                        var data = response.message;
                        var table = $('#ExBalTable').DataTable();
                        table.clear().draw();
                        
                        for (var k in data){
                            var symbol =  k;
                            var balance =  data[k];
                        //   $('#ExBalTable tbody').append('<tr><td>'+k+'</td><td>'+data[k]+'</td></tr>');
                            $('#ExBalTable').dataTable().fnAddData( [
                                    symbol,
                                    balance
                            ]);
                        }
                    }
                }    
            });

        });
        
        $('#ExBalTable').DataTable({
        //   responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            
          }
        });
        
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
        
        $('#createOrder').on('click', function(){
                
            var activeExch = $('#activeExch1').val();
            var symbol = $('#symbol').val();
            var orderType = $('#orderType').val();
            var side = $('#side').val();
            var amount = $('#amount').val();
            var price = $('#price').val();
            console.log(activeExch);
            console.log(symbol);
            console.log(orderType);
            console.log(side);
            console.log(amount);
            console.log(price);
            if(!activeExch)
            {
                alert("select exchange first");
            }
            else
            {
                
                var data ={userId:userId, exchange:activeExch, symbol:symbol, type:orderType, side:side, amount:amount, price:price};
                var settings = {
                      "async": false,
                      "crossDomain": true,
                      "url": "https://evoai.network:4000/trading/v1/createOrder",
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
                    if(response){
                        if(response.error)
                            alert(response.error);
                        else
                            alert(response.message);
                    }    
                });
            }
        });
        
    });
    
    </script>
  </body>
</html>
