<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <a href="{{ url('home')}}">home </a>|
        <a href="{{ url('isi')}}">lapor </a>|
        <a href="{{ url('login')}}">login </a>
    </div>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
    
                <input type="text" placeholder="Masukan Username" name="username">
                <input type="password" placeholder="Masukan Password" name="password">
                <a href="#">Lupa Password?</a>
                <button type="submit" class="btn btn-success">Login</button>
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun? <a href="signup.php" style="color: springgreen; font-family: Poppins; font-weight: 500;">Sign-up Here</a></span>
            </div>
        </div>
</body>
</html>