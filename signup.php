<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/20by20_Logo_ccs_version2.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Outfit:wght@500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --button-color: #548235;
            --font: 'Outfit', sans-serif;
        }

        /* CONTAINER */
        * {
            margin: 0 auto;
        }

        .container {
            overflow-y: hidden;
            justify-content: space-between;
            display: flex;
            width: 100%;
            height: 100vh;
        }

        /* END CONTAINER */

        /* Left CARD */
        .left-card {
            width: 70%;
            margin: 0;
        }

        .logo {
            padding-top: 1rem;
            padding-left: 3rem;
            max-width: 7%;
            background-size: cover;
        }

        .login {
            display: flex;
            flex-direction: column;
        }

        .login-button {
            background-color: var(--button-color);
        }

        .title {
            font-family: var(--font);
            font-size: 6.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            font-size: 1.5rem;
        }

        .username,
        .password {
            margin-top: 3rem;
            border-radius: 0.9375rem;
            border: 3px solid #e1e1e1;
            width: 31.125rem;
            height: 5.4375rem;
            flex-shrink: 0;
        }

        .username::placeholder {
            padding-left: 1rem;
            color: #828282;
            font-family: Outfit;
            font-size: 1.3125rem;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
        }

        .password::placeholder {
            padding-left: 1rem;
            color: #828282;
            font-family: Outfit;
            font-size: 1.3125rem;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
        }

        .login-button {
            margin-top: 2rem;
            margin-bottom: 2rem;
            width: 31.625rem;
            height: 4.75rem;
            border-radius: 3.8125rem;
            background: #548235;
            color: #fff;
            text-align: center;
            font-family: Outfit;
            font-size: 1.3125rem;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            border: none;
            transition: 0.5s ease-in-out;
        }

        .login-button:hover {
            background: #63a13a;
            color: #fff;
        }

        .description {
            font-family: var(--font);
            font-size: 1.3rem;
        }

        .sign-up-link {
            color: #000;
            font-family: Outfit;
            font-size: 1rem;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }

        /* END LEFT CARD */

        /* RIGHT CARD */
        .right-card {
            /* width: 45%; */
            margin: 0;
        }

        .right-img {
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
            width: 100%;
        }

        /* END RIGHT CARD */

        /* LAPTOP */
        @media (max-width: 1010px) {
            .right-card {
                display: none;
            }

            .left-card {
                width: 100%;
            }
        }

        /* TABLET */
        @media (max-width: 520px) {
            .title {
                font-size: 3.5rem;
            }

            .description {
                font-size: 0.8rem;
            }

            .password::placeholder {
                padding-left: 1rem;
                color: #828282;
                font-family: Outfit;
                font-size: 1.3125rem;
                font-style: normal;
                font-weight: 300;
                line-height: normal;
            }

            .login-button {
                margin-top: 2rem;
                margin-bottom: 2rem;
                width: 21.625rem;
                height: 2.75rem;
                border-radius: 3.8125rem;
            }

            .username,
            .password {
                margin-top: 3rem;
                border-radius: 0.9375rem;
                border: 3px solid #e1e1e1;
                width: 21.125rem;
                height: 3.4375rem;
                flex-shrink: 0;
            }
        }

        /* PHONE */
        @media (max-width: 520px) {
            .title {
                font-size: 3.5rem;
            }

            .description {
                font-size: 0.8rem;
            }

            .password::placeholder {
                font-size: 1rem;
            }

            .username::placeholder {
                font-size: 1rem;
            }

            .login-button {
                margin-top: 2rem;
                margin-bottom: 2rem;
                width: 17.625rem;
                height: 2.75rem;
                border-radius: 3.8125rem;
                font-size: 1rem;
            }

            .username,
            .password {
                margin-top: 3rem;
                border-radius: 0.9375rem;
                border: 3px solid #e1e1e1;
                width: 17.125rem;
                height: 3.4375rem;
                flex-shrink: 0;
            }

            .sign-up-link {
                font-size: 0.8rem;
            }

            input {
                font-size: 1rem;
            }
        }
    </style>
    <title>PractiEase AppDev</title>
</head>

<body>
    <div class="container">
        <!-- left-card -->
        <div class="left-card">
            <img class="logo" src="../assets/Copy of gc_new_logo_2018 - Copy.png" alt="" />
            <img class="logo" src="../assets/20by20_Logo_ccs_version2.png" alt="" />
            <div class="login">
                <h1 class="title">Welcome!</h1>
                <p class="description">Signup to get started in PractiEase AppDev</p>

                <form method="post">
                    <input
                        type="text"
                        name="email"
                        class="username" 
                        placeholder="Your email"
                        required />
                    <input
                        type="password"
                        name="password"
                        class="password"
                        placeholder="Your password"
                        required />

                    <button class="login-button" type="submit">Sign up</button>
                </form>
                <p class="sign-up-link">
                    Do you have an account? <a href="../index.php">Log in</a>
                </p>
            </div>
        </div>
        <!-- right-card -->
        <div class="right-card">
            <img class="right-img" src="../assets/Right pictre(2).jpg" alt="" />
        </div>
    </div>
</body>

</html>
