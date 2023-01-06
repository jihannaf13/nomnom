<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">

		<h1 class="heading1">NomNom</h1>
	
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
		<div class="login-form">
		<form id="login-form">

			<div class="sign-in-htm">
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep Me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<!-- <div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div> -->
				</form>
			</div>
			<!-- <form action="/userarea" method="post"> -->
			<div class="sign-up-htm">
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="text" class="input" name="userEmail">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="userPassword">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="userPassword2">
				</div>
				<div class="group">
					<a href="/home"><input type="submit" class="button" value="Sign Up"></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
			<!-- </form> -->
		</div>
	</div>
</div>

<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-database.js"></script>

<script>
		var firebaseConfig = {
			apiKey: "AIzaSyBgD7abiuhx2MPZfuVEFGl-eBWpP_mYAD0",
			authDomain: "nomnomcatv2.firebaseapp.com",
			databaseURL: "https://nomnomcatv2-default-rtdb.asia-southeast1.firebasedatabase.app",
			projectId: "nomnomcatv2",
			storageBucket: "nomnomcatv2.appspot.com",
			messagingSenderId: "456161596626",
			appId: "1:456161596626:web:05e72611395fc025a3090b",
		};




		firebase.initializeApp(firebaseConfig);

		var messagesRef = firebase.database()
			.ref('Collected Data');
		
		document.getElementById('login-form')
			.addEventListener('submit', submitForm());

		function submitForm(e) {
			// e.preventDefault();
			// Get values
			var email = getInputVal('email');
			var password = getInputVal('pass');
			firebase.auth().signInWithEmailAndPassword(email.trim(),password).then(function(user){
				{
					<?php header("location:/home")?>
				}
			}).catch(function(error) {
			// Handle errors
			console.error(error.message);
			if (error.code === 'auth/invalid-email') {
				// The email address is badly formatted
				console.error('The email address is badly formatted');
			}
			});

		// Function to get form values
		function getInputVal(id) {
			return document.getElementById(id).value;
		}

		// Save message to firebase
		function saveMessage(name, email) {
			var newMessageRef = messagesRef.push();
			newMessageRef.set({
				name: name,
				email: email,
			});
		}
	
		

	</script>

<script src="js/sript.js"></script>

</body>
</html>