
<?php
    session_start();

    include("config.php");


    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        if(!empty($user) && !empty($pass) && !empty($user)) {

            $query = "SELECT * FROM users WHERE username = '$user' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result) { 
                if($result && mysqli_num_rows($result) > 0) {

                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $pass) {
                        header("location: portfolio.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Login Succesfully!!')</script>";
        }
        else {
            echo "<script type='text/javascript'> alert('Wrong credentials')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <title>Login </title>
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
}
:root{
    --bg-color: #1f1f21;
    --text-color: #fff;
    --main-color: #ffae00;

    --big-font: 7rem;
    --p-font: 1.1rem;
}


body {
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh; 
    background-image: url('https://64.media.tumblr.com/cca4f06484b447c0687f0325af5b38c9/428a8db1dc8ae92f-87/s1280x1920/7c751558b1d93e15c2d885cff2162ddb95059b8d.gif');
    background-size: cover;
	background-position: center;
} 

.wrapper {
	width: 420px;
	background: transparent;
	border: 2px solid rgb(255, 255, 255);
	backdrop-filter: blur(10px);
	box-shadow: 0 0 10px rgba(0, 0, 0, .2);
	color: black;
	border-radius: 10px;
    padding: 30px 40px;
   
}

.wrapper h1 {
	font-size: 36px;
	text-align: center;
	color: white;
}

.wrapper .input-box {
	position: relative;
	width: 100%;
	height: 50px;
	margin: 30px 0;
}

.input-box input {
	width: 100%;
	height: 100%;
	background: transparent;
	border: none;
	outline: none;
	border: 2px solid white;
	border-radius: 40px;
	font-size: 20px;
	color: white;
	padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
	color: white;
}

.input-box i {
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	font-size: 20px;
}

.wrapper .remember-forgot {
	display: flex;
	justify-content: space-between;
	font-size: 14.5px;
	margin: -15px 0 15px;
}

.remember-forgot label input {
    color: black;
	margin-right: 3px;
}

.remember-forgot a {
	color: black;
	text-decoration: none;
}

.remember-forgot a:hover {
	text-decoration: underline;
}

.wrapper .btn {
	width: 100%;
	height: 45px;
	background:white;
	border: none;
	outline: none;
	border-radius: 40px;
	box-shadow: 0 0 10px rgba(0, 0, 0, .1);
	font-size: 16px;
	cursor: pointer;
	color: black;
	font-weight: 600;
}

.wrapper .register-link {
	font-size: 14.5px;
	text-align: center;
	margin-top: 20px 0 15px;
}

.register-link p a {
	color: black;
	text-decoration: none;
	font-weight: 600;
}

.register-link p a:hover {
	text-decoration: underline;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Rubik', sans-serif;
    list-style: none;
    text-decoration: none;
}


header{
    position: fixed;
    top: 0;
    right: 0;
    width: 100%;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 32px 15%;
    background: transparent;
    transition: all ease .45s;
}
.logo{
    color: var(--text-color);
    font-size: 41px;
    font-weight: 600;
}
.logo span{
    color: var(--main-color);
}
.navbar{
    display: flex;
}
.navbar a{
    font-size: var(--p-font);
    font-weight: 500;
    color: var(--text-color);
    margin: 0 25px;
    transition: all ease .50s;
}
.navbar a:hover{
    color: black;
}
.navbar a.active{
    color: black;
}
.menu-btn{
    background: linear-gradient(130.08deg, #383538 0%, #191919 100%);
    box-shadow: 0px 20px 40px #00000070;
    border: 1px solid #3b3b3b;
    padding: 10px 20px;
    border-radius: 100px;
    display: flex;
    align-items: center;
    cursor: pointer;
}
#menu-icon{
    font-size: 28px;
    margin-left: 10px;
    z-index: 6;
}
section{
    padding: 0 15%;
}
.home{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 30px;
}
.home-imgs{
    width: 730px;
    height: 730px;
}
.home-img imgs{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.home-text span{
    padding: 5px 25px;
    background: linear-gradient(130.08deg, #383538 0%, #191919 100%);
    box-shadow: 0px 20px 40px #00000070;
    border: 1px solid #3b3b3b;
    padding: 10px 20px;
    border-radius: 100px;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
}
.name{
    margin-top: 50px;
    color: var(--main-color)
}

.title-about{
    font-size: var(--p-font);
    font-weight: 500;
    margin-top: 30px;
    color: var(--main-color);
    font-size: 50px;
    margin-left: 600px;
}
.About{
    border-style: groove;
    width: 110px;
    margin: auto;
    margin-top: 200px;
    height: 110px;
    border-radius: 30px;
    text-align: center;
    border-color: var(--main-color);
}
.text1{
    text-align: center;
    margin-top: 40px;
    font-size: var(--p-font)
}
.active1{
    font-size: var(--p-font);
    color: var(--main-color);
    margin-left: 30px;
    font-size: 50px;
    border-style: groove;
}
.About:hover{
    transition: ease-out;
    transform: scale(4.9);
    border-radius: 10px;
    background-color: red;
    text-align: center;
    opacity: 100%;
}
.text2{
    color:var(--bg-color);
    margin: auto;
    
}
</style>
<body>
    <div class="wrapper">
        <form action=""method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input name="username" type="text" id="email" placeholder="Username" required>
                
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input name="password" type="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button onclick="auth()" type="submit" class="btn"> Login</button>
            <br>
            
        </form>
            <div class="register-link">
                <p>Don't have an account?<a href="register.php">Register</a>
                </p>
            </div>
    </div>

</body>
</html>
