var express = require('express');
var router = express.Router();
const session = require('express-session');
const bodyParser = require('body-parser');
var ip = require('ip');
const LoginURL = '/';
const LoginURLCI = 'https://www.evoai.network/login';

const mysql = require('mysql');
const con = mysql.createConnection({
	host: 'localhost',
	user: 'evoaiuser',
	password: 'evoai@2018',
	database: 'evoai_node'
});

router.use(session({ 
	secret: 'somerandonstuffs',
	resave: false,
	saveUninitialized: false,
	cookie: { expires: 600000 }
}));

/* insert profit */
router.post('/insertProfit', function(req, res, next) {
	//console.log(req.body.id, req.body.value);
	var support_sql = "INSERT INTO evabot_calc (daily_profit,deposit_amount,total_invested_token) VALUES ('"+req.body.daily_profit+"','"+req.body.deposit_amount+"','"+req.body.total_invested_token+"')";
	con.query(support_sql, function (err3, result3) {
	 	if (err3) throw err3;
	 	console.log('successfully inserted');
	});
});

//insertInvestorProfit
router.post('/insertInvestorProfit', function(req, res, next) {
	//console.log(req.body.id, req.body.value);
	var support_sql = "INSERT INTO evabot_investors_profit (user_email,user_address,eth_value) VALUES ('"+req.body.address+"','"+req.body.umail+"','"+req.body.eth_val+"')";
	con.query(support_sql, function (err3, result3) {
	 	if (err3) throw err3;
	 	console.log('successfully inserted');
	});
});

/* get whitelists */
// router.get('/whitelists', function(req, res, next) {
// 	var userID = req.session.ID;
// 	if(userID)
// 	{
// 		var sql = 'SELECT * FROM evabot_whitelists';
// 		con.query(sql, function (err, result) {
// 			if (err) throw err;
// 			else { 
// 				res.send(result);
// 			}
// 		});		
// 	}
// });

/* GET home page. */
router.get('/', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	if(userID)
	{		
		var sql = 'select * from users where id="'+userID+'"';
		con.query(sql, function (err, recordset) {
			if(recordset.length > 0){			
				if (err) 
					console.log(err)
				else
				{		
					res.redirect('/wallet');		
					//res.render('dashboard', { page: 'Dashboard', menuId:'dashboard', links: recordset[0].user_referral_code, eth_add: recordset[0].eth_address, Username: username });				
				}
			}
			else{
				res.redirect(LoginURLCI);
			}
		});	
	}
	else
	{
		res.redirect(LoginURLCI);		
	}
});

/* Dashboard */
router.get('/dashboard', function(req, res, next) {
	var userID = req.session.ID;
	var username = req.session.username;
	if(userID){
		var sql = 'select * from users where id="'+userID+'"';
		con.query(sql, function (err, recordset) {
			if(recordset.length > 0){			
				if (err) 
					console.log(err)
				else
				{
					res.redirect('/wallet');		
					//res.render('dashboard', { page: 'Dashboard', menuId:'dashboard', links: recordset[0].user_referral_code, eth_add: recordset[0].eth_address, Username: username });				
				}
			}
			else{
				res.redirect(LoginURL);							
			}
		});	
	}
	else{
		res.redirect(LoginURL);							
	}
});

/* Login */
router.post('/login', function(req, res, next) {
	//let id = req.query.a;
	
	let ids = req.body.uIdc;
	let redirectN = req.body.dirn;
	
	var bs = new Buffer(ids, 'base64')
	var id = bs.toString('utf8');
	var sql = 'select * from users where id="'+id+'"';
	con.query(sql, function (err, recordset) {
		if(recordset.length > 0){			
			if (err) 
				console.log(err)
			else
			{
				req.session.ID = recordset[0].id;
				req.session.email = recordset[0].email;
				req.session.username = recordset[0].username;
				req.session.eth_address = recordset[0].eth_address;
				req.session.beta_role = recordset[0].beta_role;
				if(redirectN != '')
				{
					res.redirect(redirectN);													
				}
				else
				{
					res.redirect('/wallet');								
				}
			}
		}
		else{
			res.redirect(LoginURL);							
		}
	});
});

/* wallet */
router.get('/wallet', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		var sql = 'SELECT * FROM evabot_whitelists';
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('wallet', {page:'WALLET', menuId:'wallet', Username: username, Useremail: user_email, eth_add:eth_address, beta_acces:beta_role, wallet_result: result });
		});
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* live_trades */
router.get('/live_trades', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('live_trades', { page:'LIVE TRADES', menuId: 'live_trades', eth_add:eth_address, Useremail: user_email, Username: username, Useremail: user_email, beta_acces:beta_role });
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* evabot */
router.get('/evabot', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		var sql = 'SELECT * FROM evabot_calc ORDER BY id DESC LIMIT 30';
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('evabot', { page: 'EVABOT', menuId:'evabot', eth_add:eth_address, Username: username, Useremail: user_email, beta_acces:beta_role, evabot_result: result });
		});		
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* evobot */
router.get('/evobot', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('evobot', { page: 'Evobot', menuId: 'evobot', eth_add:eth_address, Username: username, Useremail: user_email, beta_acces:beta_role });		
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* eve */
router.get('/eve', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('eve', { page: 'Eve', menuId: 'eve', eth_add:eth_address, Username: username, Useremail: user_email, beta_acces:beta_role });
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* exchange */
router.get('/exchange', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('exchange', { page: 'EXCHANGE', menuId: 'exchange', eth_add:eth_address,  Username: username, Useremail: user_email, beta_acces:beta_role });
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* Support */
router.get('/support', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('support', { page: 'Support', menuId: 'support', eth_add:eth_address, Username: username, Useremail: user_email, beta_acces:beta_role });
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* Help and support */
router.get('/helpSupport', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		var sql = 'SELECT * FROM support WHERE user_id = "'+userID+'" ORDER BY id desc';
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('helpSupport', { page: 'Support', menuId: 'support', support_list: result, eth_add:eth_address, Useremail: user_email, Username: username, beta_acces:beta_role });
		});	
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* Ticket details */
router.get('/ticketDetails', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		let ticket = req.query.t;
		var sql = 'SELECT * FROM support_chat WHERE ticket = "'+ticket+'"';
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('ticketDetails', { page: 'Support', menuId: 'support', supportChat_list: result, eth_add:eth_address, Useremail: user_email, Username: username, beta_acces:beta_role });
		});			
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* setStatus */
router.get("/ticketClose", (req, res) => {
	var userID = req.session.ID;
	let ticket = req.query.t;
	if(userID)
	{
		var update_sql = "UPDATE support_chat SET status='1' WHERE ticket='"+ticket+"'";
		con.query(update_sql, function (err3, result3) {
			if (err3) throw err3;
			res.redirect('/ticketDetails?t='+ticket);	
		});
	}
	else{
		res.redirect(LoginURL);		
	}
});

/* support Reply by admin */
router.post("/supportReply", (req, res) => {	
	var userID = req.session.ID;
	let ticket = req.body.ticket;
	let to_id = userID;
	let from_id = 0;	
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	today = dd+'-'+mm+'-'+yyyy;
	if(userID)
	{
		var support_sql = "INSERT INTO support_chat (ticket,to_id,from_id,message,created_date) VALUES ('"+ticket+"','"+to_id+"','"+from_id+"','"+req.body.message+"','"+today+"')";
		con.query(support_sql, function (err3, result3) {
			if (err3) throw err3;
			res.redirect('/ticketDetails?t='+ticket);	
		});
	}
	else{
		res.redirect(LoginURL);		
	}
	
});


/* support insert data */
router.post('/supportData', function(req, res, next) {	
	var userID = req.session.ID;
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	today = dd+'-'+mm+'-'+yyyy;	
	if(userID)
	{
		var sql = "INSERT INTO support (user_id,subject,email,message) VALUES ('"+userID+"','"+req.body.subject+"','"+req.body.email+"','"+req.body.message+"')";
		con.query(sql, function (err2, result){
			if(err2) throw err2;
			var support_sql = "INSERT INTO support_chat (ticket,to_id,from_id,message,created_date) VALUES ('"+result.insertId+"','"+userID+"','0','"+req.body.message+"','"+today+"')";
			con.query(support_sql, function (err3, resultChat){
				if(err3) throw err3;
				console.log(result.insertId);
				res.redirect('/support');
			});
		});
	}
	else
	{
		res.redirect(LoginURL);		
	}
});


/* support */
router.get('/myreferrals', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var user_email = req.session.email;
	if(userID)
	{
		var sql = 'select * from users where id="'+userID+'"';
		con.query(sql, function (err, recordset) {
			if(recordset.length > 0){
				var userID = req.session.ID;
				if (err) 
					console.log(err)
				else
				{
					var referral_user = '';
					var referral_sql = 'select * from users where user_referenced_code="'+recordset[0].user_referral_code+'" ORDER BY id desc';
					con.query(referral_sql, (err1, recordset_ref) =>{
						if(err1) throw err1;
						referral_user = recordset_ref;
						res.render('myreferrals', { page: 'My referrals', menuId: 'myreferrals', links: recordset[0].user_referral_code, Useremail: user_email, eth_add: recordset[0].eth_address, referral_list: referral_user, Username: username });
					});						
				}
			}
			else{
				res.redirect(LoginURL);							
			}
		});										
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* announcements */
router.get('/announcements', function(req, res, next) {	
	var userID = req.session.ID;
	var username = req.session.username;
	var eth_address = req.session.eth_address;
	var beta_role = req.session.beta_role;
	var user_email = req.session.email;
	if(userID)
	{
		res.render('announcements', { page: 'Announcements', menuId: 'announcements', eth_add:eth_address, Useremail: user_email, Username: username, beta_acces:beta_role });	
	}
	else
	{
		res.redirect(LoginURL);		
	}
});

/* Logout */
router.post("/logout", (req,res) => {
	req.session.destroy();
	res.redirect('https://www.evoai.network/logout');	
});
module.exports = router;
