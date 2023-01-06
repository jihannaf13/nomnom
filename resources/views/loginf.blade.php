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
					<a href="/home"><input type="submit" class="button" value="Sign In"></a>
				</div>
				<div class="hr"></div>
				<!-- <div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div> -->
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
		
		document.getElementById('contactForm')
			.addEventListener('submit', submitForm);

		function submitForm(e) {
			e.preventDefault();

			// Get values
			var email = getInputVal('email');
			var password = getInputVal('password');

			saveMessage(name, email);
			document.getElementById('contactForm').reset();
		}

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

		function signIn()
		{
			$email = "angelicdemon@gmail.com";
			$pass = "anya123";

			try {
				$signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);
				// dump($signInResult->data());

				Session::put('firebaseUserId', $signInResult->firebaseUserId());
				Session::put('idToken', $signInResult->idToken());
				Session::save();

				dd($signInResult);
			} catch (\Throwable $e) {
				switch ($e->getMessage()) {
					case 'INVALID_PASSWORD':
						dd("Kata sandi salah!.");
						break;
					case 'EMAIL_NOT_FOUND':
						dd("Email tidak ditemukan.");
						break;
					default:
						dd($e->getMessage());
						break;
				}
			}
    }

	</script>

<script src="js/sript.js"></script>

</body>
</html>