<html>
	<head>
		<meta charset="utf-8" />
		<title>login</title>
	</head>
	<body>
		<div id="logindiv">
			<form method="post" action="login.php">
				<input type="text" name="username1" id="username1"  placeholder="请输入用户名"/>
				<br/>
				<input type="password" name="userpwd1" id="userpwd1" placeholder="请输入密码"/>
				<br/>
				<input type="submit" name="login" id="login" value="login" />
			</form>
		</div>
	</body>
	<style>
		
	#logindiv{
		
		height: 100%;
		padding-top: 300px;
		text-align: center;
	}
	
	#username1{
		border: 1px solid deepskyblue;
		background: transparent;
		height: 30px;
		border-radius: 10px;
		width: 300px;
		
	}

		
	#userpwd1{
		margin-top: 5px ;
		border: 1px solid deepskyblue;
		background: transparent;
		height: 30px;
		border-radius: 10px;
		width: 300px;
		
	}
	#login{
		
		border: 0;
		margin-top: 5px;
		border-radius: 10px;
		width: 100px;
		height: 30px;
		background: lightskyblue;
	}
	</style>
</html>