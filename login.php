<html>
<head>

<script src='https://www.google.com/recaptcha/api.js'></script>

<link href="D:\facebook\login.css" rel="stylesheet" type="text/css">
<title>welcome to oenit!
</title>
<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAs5pHldF6bmaadffd6E3BZogICo4T4Su8",
    authDomain: "open-it-f047a.firebaseapp.com",
    databaseURL: "https://open-it-f047a.firebaseio.com",
    storageBucket: "open-it-f047a.appspot.com",
    messagingSenderId: "202285345492"
  };
  firebase.initializeApp(config);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
<form method="POST" action="login.php" onsubmit="Validate()" name="name">
<div id="main">

<div id="extra"></div>
<div id="header">
<header id="openitheader"<a href=""><button  id="signup" ><b>Sign Up</b></button></a>
</header</div>
</div>
<div id="container">
<p id="must">You must log in to continue.</p></div>
<div id="login">
<br><br><br>
Log in to Openit !<br><br>
<input type="text" aria-label="Email address or phone number" id="username" autofocus="1" placeholder="   Email address or phone number   "><br><br>
<input type="password" id="password"  placeholder="   Password" aria-label="Password" autofocus="2"><br><br>
<button  id="loginbtn" type="submit">Log In</button><br><br>
<a href="">Forgotten account? </a><span role="presentation" aria-hidden="true"> · </span> <a href="">Sign up for Openit !</a> 

</div>
<br><br><center>
<div class="g-recaptcha" data-sitekey="6LcRPBAUAAAAANQ1fCB70foSE2w_H5mLYm5J1Nxn"></div>

</center>
</form>
</body>
</html>
