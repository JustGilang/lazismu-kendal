<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Nunito:300");
        * {
        box-sizing: border-box;
        font-family: inherit;
        }

        body {
        margin: 0;
        padding-bottom: 20px;
        font-family: 'Nunito', sans-serif;
        color: #fefefe;
        background: #fefefe;
        }

        .wrapper {
        margin: 0 auto;
        width: 400px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .section {
        padding: 1rem;
        }

        .header {
        position: relative;
        text-align: center;
        }
        .header__text {
        position: relative;
        padding: 3.5rem 0 7rem;
        }
        .header__text > h1 {
        margin: 0;
        font-size: 2.5rem;
        }
        .header > .trapezoid {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: skewY(-10deg);
        transform-origin: top left;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        background: linear-gradient(rgba(17, 38, 190, 0.8), rgba(17, 38, 190, 0.8)), url("https://images.pexels.com/photos/520936/pexels-photo-520936.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
        background-position: top center;
        background-attachment: fixed;
        }

        form {
        margin: 0 auto;
        max-width: 17rem;
        overflow: auto;
        }
        form > * + * {
        margin-top: 1rem;
        }
        form > input {
        border: 0;
        border-bottom: 1px solid #1126be;
        border-radius: 0;
        width: 100%;
        height: 2rem;
        padding: 0 0 0.25rem 0;
        font-size: 1rem;
        color: #1126be;
        background: #fefefe;
        }
        form > input:focus {
        outline: none;
        }
        form > input::placeholder {
        color: #1126be;
        }
        form > button {
        margin-top: 2rem;
        border: 0;
        border-radius: 200px;
        width: 100%;
        padding: 0.85rem;
        font-size: 1rem;
        color: #fefefe;
        background: #1126be;
        }
        form > button:focus {
        outline: none;
        }
        form > p {
        margin: 0.25rem 0 0;
        text-align: center;
        color: #1126be;
        }

        .sign-up {
        display: none;
        }

        .opposite-btn1,
        .opposite-btn2 {
        cursor: pointer;
        }

    </style>
</head>
<body>
    <!--  Header  -->
    <header class="section header">
        <div class="trapezoid"></div>
        
        <div class="header__text">
        <h1>Login.</h1>
        <p>Silahkan login untuk akses lebih lanjut.</p>
        </div>
    </header>

    <!--  Sign In  -->
    <section class="section sign-in">
        <br>
        <form action="function/db_login.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <button>Sign In</button>
        </form>
    </section>

    <script>
        const signUp = document.querySelector('.sign-up');
        const signIn = document.querySelector('.sign-in');

        // Switch btns: there are two only because I was in a hurry a didn't want to write all the javascript immediately. In a production environment, a better solution would be implemented.
        const btn1 = document.querySelector('.opposite-btn1');
        const btn2 = document.querySelector('.opposite-btn2');


        // Switches to 'Create Account'
        btn1.addEventListener('click', () => {
        signUp.style.display = 'block';
        signIn.style.display = 'none'; 
        });

        // Switches to 'Sign In'
        btn2.addEventListener('click', () => {
        signUp.style.display = 'none';
        signIn.style.display = 'block';
        });
    </script>
</body>
</html>