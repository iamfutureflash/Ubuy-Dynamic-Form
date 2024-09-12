<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mnmlst.</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            background-color: #efefef;
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Inter', sans-serif;
            /* overflow: hidden; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            max-width: 1500px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: black;
        }

        .menu-icon {
            display: flex;
            flex-direction: column;
            width: 30px;
            cursor: pointer;
        }

        .menu-icon span {
            height: 3px;
            background-color: black;
            margin-bottom: 5px;
        }

        .content {
            display: flex;
            flex-grow: 1;
            padding: 40px;
        }

        .image-section {
            flex: 1;
            position: relative;
        }

        .yellow-bg {
            width: 80%;
            height: 80%;
            /* background-color: #FFD700; */
            position: absolute;
            top: 10%;
            left: 10%;
            z-index: -1;
        }

        .car-image {
            width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
            border-radius: 1rem;
        }

        .info-section {
            flex: 1;
            padding-left: 40px;
        }

        .about-tag {
            display: inline-block;
            padding: 5px 10px;
            font-weight: 500;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #f5be19;
            color: white;
        }

        .btn-secondary {
            background-color: #f7f7f7;
            color: black;
        }

        .learn-more {
            display: inline-block;
            padding: 10px 20px;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include 'navbar.php' ?>
        <main class="content">
            <div class="image-section">
                <div class="yellow-bg"></div>
                <img src="images/Audi_Super_ca_0.jpg" alt="Yellow Car" class="car-image">
            </div>
            <div class="info-section">
                <span class="about-tag">About Us</span>
                <h1 style="font-weight: 500;">Our Company Overview</h1>
                <p>Carlio brand is one of the most reliable motor oil manufacturers, which is engaged in the production of high quality products with a history of more than decades in the industry. In order to get more information about other aspects and products of the Carlio brand, you can use the following buttons:</p>
                <div class="buttons">
                    <button class="btn btn-primary">Company</button>
                    <button class="btn btn-secondary">Products</button>
                    <button class="btn btn-secondary">Our Team</button>
                </div>
                <p>The meaning of production in Carlio is the creation, development, and the path to progress, and the starting point to achieve the goals that we all have the Petroforce brand, with over 20 years of experience in the oil and petrochemical industry, we officially started our activities in the field of design, engineering, construction of refinery equipment, and the production of various motor and industrial lubricants in the year 1390 (2011)</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </main>
    </div>
</body>

</html>