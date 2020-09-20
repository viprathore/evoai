var express = require('express');
var router = express.Router();
var bodyParser = require('body-parser');
const session = require('express-session');
var md5 = require('md5');
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

/* GET home page. */
router.get('/', function(req, res, next) {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		res.redirect('/admin/dashboard');		
	}
	else{
		res.render('admin/login', { page: 'Login' });
	}
});
/* Login */
router.post('/login', function(req, res, next) {
	var username = req.body.username;
	var password = md5(req.body.password);
	var sql = "SELECT * FROM admin WHERE admin_email='"+username+"' and admin_password='"+password+"'";
	con.query(sql, function (err2, result){
		if(err2) throw err2;
		else{					 
			if(result.length > 0){
				//console.log(result);
				req.session.email_id = result[0].admin_email;
				req.session.admin_name = result[0].admin_name;
				req.session.admin_id = result[0].admin_id;
				
				res.redirect('/admin/dashboard');						
			}
			else{
				res.redirect('/admin');	
			}						
		}
	});		
});

/* Dashboard. */
router.get('/dashboard', function(req, res, next) {	
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		var sql = "SELECT * FROM value_and_bonus WHERE id = '1'";
		var sql_user = "SELECT COUNT(*) AS rowCount FROM users";
		var record_result = '';
		var record_user = '';
		con.query(sql, (err, recordset) =>{
			if(err) throw err;
			record_result = recordset;
		});			
		con.query(sql_user, (err3, recordset3) =>{
			if(err3) throw err3;
			record_user = recordset3[0].rowCount;
			res.render('admin/dashboard', { page: 'Dashboard', menuId: 'dashboard', users_count: record_user, bonus_value: record_result[0].evot_value, evot_value: record_result[0].bonus });		
		});			
	}
	else{
		res.redirect('/admin');		
	}
});

/* Evot bonus value */
router.get('/evot_bonus_value', function(req, res, next) {	
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		var sql = "SELECT * FROM value_and_bonus WHERE id = '1'";
		con.query(sql, (err, recordset) =>{
			if(err) throw err;
			res.render('admin/evot_bonus_value', { page: 'Evot bonus value', menuId: 'evot_bonus_value', evot_value: recordset[0].evot_value, bonus: recordset[0].bonus });		
		});						
	}
	else{
		res.redirect('/admin');		
	}
});

/* Evot bonus value */
router.post('/evot_bonu', function(req, res, next) {	
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		var evot_value = req.body.evot_value;
		var bonus = req.body.bonus;
		if(bonus != '' && evot_value != '')
		{
			var sql = "UPDATE value_and_bonus SET evot_value='"+evot_value+"', bonus='"+bonus+"' WHERE id='1'";			
		}
		else if(bonus == '' && evot_value != '')
		{
			var sql = "UPDATE value_and_bonus SET evot_value='"+evot_value+"' WHERE id='1'";			
		}
		else if(bonus != '' && evot_value == '')
		{
			var sql = "UPDATE value_and_bonus SET bonus='"+bonus+"' WHERE id='1'";			
		}
		con.query(sql, function (err2, result){
			if(err2) throw err2;
			res.redirect('/admin/dashboard');
		});	
	}
	else{
		res.redirect('/admin');		
	}
});

/* User list */
router.get("/users", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		var sql = "SELECT * FROM users ORDER BY id DESC";
		con.query(sql, (err, recordset) =>{
			if(err) throw err;
			res.render('admin/users', { page: 'Users', menuId: 'users', users_record: recordset, users_list: recordset });		
		});						
	}
	else{
		res.redirect('/admin');		
	}
});

/* User details remove */
router.get("/removeDetail", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let id = req.query.e;
	if(email_id)
	{
		var sql = "DELETE FROM users WHERE id='"+id+"'";
		con.query(sql, (err, recordset) => {
			if(err) throw err;
			res.redirect('/admin/users');		
		});
	}
	else{
		res.redirect('/admin');		
	}
});

/* setStatus */
router.post("/setStatus", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let id = req.body.id;
	let status = req.body.status;
	if(email_id)
	{
		var update_sql = "UPDATE users SET active='"+status+"' WHERE id='"+id+"'";
		con.query(update_sql, function (err3, result3) {
			if (err3) throw err3;
			res.redirect('/admin/users');	
		});
	}
	else{
		res.redirect('/admin');		
	}
});

/* Support list */
router.get("/support", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	if(email_id){
		var sql = "SELECT users.username AS name, support.*, support.id AS sId FROM users JOIN support ON users.id = support.user_id ORDER BY id desc";
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('admin/support', { page: 'Support', menuId: 'support', support_record: result });	
		});					
	}
	else{
		res.redirect('/admin');		
	}
});

/* support details remove */
router.get("/removeSupportDetail", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let id = req.query.e;
	if(email_id)
	{
		var sql = "DELETE FROM support WHERE id='"+id+"'";
		con.query(sql, (err, recordset) => {
			if(err) throw err;
			res.redirect('/admin/support');		
		});
	}
	else{
		res.redirect('/admin');		
	}
});

/* Support chat */
router.get("/supportChat", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let id = req.query.e;
	if(email_id)
	{
		var sql = "SELECT * FROM support_chat WHERE ticket = '"+id+"'";
		con.query(sql, function (err, result) {
			if (err) throw err;
			res.render('admin/supportChat', { page: 'Support Chat', menuId: 'support', supportChat_list: result });	
		});	
	}
	else{
		res.redirect('/admin');		
	}
});

/* support Reply by admin */
router.post("/supportReply", (req, res) => {	
	var admin_id = req.session.admin_id;
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let ticket = req.body.ticket;
	let to_id = 0;
	let from_id = req.body.to_id;	
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	today = dd+'-'+mm+'-'+yyyy;
	if(email_id)
	{
		var support_sql = "INSERT INTO support_chat (ticket,to_id,from_id,message,created_date) VALUES ('"+ticket+"','"+to_id+"','"+from_id+"','"+req.body.message+"','"+today+"')";
		con.query(support_sql, function (err3, result3) {
			if (err3) throw err3;
			res.redirect('/admin/supportChat?e='+ticket);	
		});
	}
	else{
		res.redirect('/admin');		
	}
});

/* setStatus */
router.get("/ticketClose", (req, res) => {
	var email_id = req.session.email_id;
	var admin_name = req.session.admin_name;
	let ticket = req.query.t;
	if(email_id)
	{
		var update_sql = "UPDATE support_chat SET status='1' WHERE ticket='"+ticket+"'";
		con.query(update_sql, function (err3, result3) {
			if (err3) throw err3;
			res.redirect('/admin/supportChat?e='+ticket);	
		});
	}
	else{
		res.redirect('/admin');		
	}
});

/* Logout */
router.get("/logout", (req,res) => {
	req.session.destroy()
	res.redirect('/admin');
});

module.exports = router;
