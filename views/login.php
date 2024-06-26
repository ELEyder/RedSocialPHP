<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="app/static/css/login.css">
    <title>Red Social</title>
</head>
<body>
    <button class="toggle-login">Red Social</button>
    <div class="wrapper">
        <div class="from-wrapper sign-in">
            <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
            <form action="entrar" method="POST">
                <h2>Red Social</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
            <!-- <div class="google">
                <button class="btn-google" id="btn-google">G</button>
            </div> -->
        </div>

        <div class="from-wrapper sign-up">
            <form action="registrar" method="POST">
                <h2>Sing Up</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="text" name="firstname" required>
                    <label for="firstname">First Name</label>
                </div>
                <div class="input-group">
                    <input type="text" name="lastname" required>
                    <label for="lastname">Last Name</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox" required> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="bg"></div>
        <span style="--i:10"></span>
        <span style="--i:9"></span>
        <span style="--i:8"></span>
        <span style="--i:7"></span>
        <span style="--i:6"></span>
        <span style="--i:5"></span>
        <span style="--i:4"></span>
        <span style="--i:3"></span>
        <span style="--i:2"></span>
        <span style="--i:1"></span>
    </div>
    <script>
        const wrapper = document.querySelector('.wrapper');
        const signUpLink = document.querySelector('.signUp-link');
        const signInLink = document.querySelector('.signIn-link');
        const toggleLogin = document.querySelector('.toggle-login');
        const close = document.querySelector('.close');

        signUpLink.addEventListener('click', () => {
            wrapper.classList.toggle('show-sign');
            wrapper.classList.add('show-bg');
            wrapper.style.height = '620px'; 
        })

        signInLink.addEventListener('click', () => {
            wrapper.classList.toggle('show-sign');
            wrapper.classList.add('show-bg');
            wrapper.style.height = '500px';
        })

        toggleLogin.addEventListener('click', () => {
            toggleLogin.classList.toggle('active');
            wrapper.classList.toggle('active');
        })

        close.addEventListener('click', () => {
            toggleLogin.classList.toggle('active');
            wrapper.classList.toggle('active');
            wrapper.classList.remove('show-bg');
        })


    </script>
</body>
</html>