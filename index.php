<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuy Dynamic Form </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .content {
            display: flex;
            flex-grow: 1;
            padding: 20px;
        }
        .text-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            
        }
        .circle {
            width: 500px;
            height: 500px;
            background-color: #f4c430;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
        }
        .profile-image {
            position: absolute;
            right: 0;
            height: 100%;
            object-fit: cover;
        }
        .tagline {
            position: absolute;
            bottom: 20px;
            left: 20px;
            font-size: 48px;
            font-weight: bold;
            line-height: 1;
        }
        footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .social-icons a {
            margin-right: 10px;
            color: black;
            text-decoration: none;
        }
        .menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
            nav {
                display: none;
            }
            .menu-icon {
                display: block;
            }
        }

    </style>
</head>

<body>
    <!-- component -->
    <nav class="w-100 px-8 md:px-auto">
        <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
            <!-- Logo -->
            <div class=" md:order-1">
                <h1 class="font-black text-2xl">mnmlst.</h1>
            </div>
            <div class=" order-3 w-full md:w-auto md:order-2">
                <ul class="flex font-medium uppercase text-lg justify-between">
                    <!-- Active Link = text-indigo-500
                Inactive Link = hover:text-indigo-500 -->
                    <li class="md:px-4 md:py-2 "><a href="index.php">Home</a></li>
                    <li class="md:px-4 md:py-2 "><a href="#">product</a></li>
                    <li class="md:px-4 md:py-2 "><a href="#">store</a></li>
                    <li class="md:px-4 md:py-2 "><a href="aboutUs.php">about us</a></li>
                    <li class="md:px-4 md:py-2 "><a href="contactUs.php">Contact us</a></li>
                </ul>
            </div>
            <div class="order-2 md:order-3">

                <button class="px-4 py-2 text-gray-50 rounded-xl flex items-center gap-2">
                    <!-- Heroicons - Login Solid -->
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div class="content">
            <div class="text-content">
                <h2>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</h2>
                <p>Vestibulum ultrices fi.....</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="flex justify-center bg-red-300">
                <div class="circle">
                    <img src="/placeholder.svg?height=500&width=300" alt="Profile" class="profile-image">
                    <div class="tagline">less is<br>more.</div>
                </div>
            </div>
        </div>
        <footer>
            <div class="social-icons">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="Instagram">i</a>
                <a href="#" aria-label="Twitter">t</a>
                <a href="#" aria-label="WhatsApp">w</a>
            </div>
            <div>Arlington Heights, IL</div>
        </footer>

</body>

</html>