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
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
		
		<div>
			<div class="sign-in-htm">
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="text">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep Me Signed in</label>
				</div>
				<div class="group">
					<input type="button" id="submitData" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				
</div>
			</div>
			
			<div>
			
</div>
		</div>
	</div>
</div>

<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-database.js"></script>



<script type="module">
    // Import the functions you need from the SDKs you need
    import {initializeApp} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
    import {
        getAuth,
        createUserWithEmailAndPassword,
        signInWithEmailAndPassword,
        signOut
    } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";
    import {getDatabase, set, ref, update} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";


    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
		apiKey: "AIzaSyBgD7abiuhx2MPZfuVEFGl-eBWpP_mYAD0",
		authDomain: "nomnomcatv2.firebaseapp.com",
		databaseURL: "https://nomnomcatv2-default-rtdb.asia-southeast1.firebasedatabase.app",
		projectId: "nomnomcatv2",
		storageBucket: "nomnomcatv2.appspot.com",
		messagingSenderId: "456161596626",
		appId: "1:456161596626:web:05e72611395fc025a3090b",
		
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth();
    const database = getDatabase(app);
	console.log(auth);
	submitData.addEventListener('click', (e) => {

		var email = document.getElementById('email').value;
		var password = document.getElementById('pass').value;
		// alert('k');
//sign up user


// log in user
		signInWithEmailAndPassword(auth, email, password).then((userCredential) => {

			localStorage.setItem("uid",userCredential._tokenResponse.localId);

			console.log(userCredential._tokenResponse.localId);
			window.location.assign("/home");	
		})
		.catch((error) => {
			const errorCode = error.code;
			const errorMessage = error.message;
			alert(errorMessage);
		});

		// fakof
		});
	

</script>

</body>
</html>