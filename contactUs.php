<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mnmlst. - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            font-family: 'Inter', sans-serif;
            /* overflow: hidden; */
            display: flex;
            justify-content: center;
            align-items: flex-start;
            line-height: 1.6;
            color: #333;
            height: 100%;
            background-color: #efefef;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }

        .menu-icon {
            display: none;
            cursor: pointer;
        }

        .menu-icon div {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 5px 0;
        }

        main {
            padding: 40px 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 30px;
            color: #666;
        }

        .contact-container {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            background-color: #f6be18;
            border-radius: 10px;
            padding: 40px;
            margin: 10px;
            color: #fff;
            width: 40%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-info h2 {
            /* margin-bottom: 20px; */
            font-size: 24px;
        }

        .contact-info p {
            /* margin-bottom: 30px; */
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-details div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-details img {
            margin-right: 10px;
            width: 20px;
        }

        .social-icons {
            display: flex;
        }

        .social-icons a {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-form {
            padding: 40px;
            width: 60%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
        }

        .form-group.inline {
            display: flex;
            justify-content: space-between;
        }

        .form-group.inline>div {
            width: 48%;
        }

        .radio-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        @media (max-width: 768px) {
            nav {
                display: none;
            }

            .menu-icon {
                display: block;
            }

            .contact-container {
                flex-direction: column;
            }

            .contact-info,
            .contact-form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include 'navbar.php' ?>
        <main>
            <h1 style="font-weight: 700;">Contact Us</h1>
            <p class="subtitle">Any question or remarks? Just write us a message!</p>
            <div class="contact-container">
                <div class="contact-info">
                    <div style="">
                        <h2>Contact Information</h2>
                        <p>Say something to start a live chat!</p>
                    </div>
                    <div class="contact-details">
                        <div aria-label="email" style="gap: 10px;">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="rgba(255, 255, 255, 0.7)" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5562 14.5477L15.1007 15.0272C15.1007 15.0272 14.0181 16.167 11.0631 13.0559C8.10812 9.94484 9.1907 8.80507 9.1907 8.80507L9.47752 8.50311C10.1841 7.75924 10.2507 6.56497 9.63424 5.6931L8.37326 3.90961C7.61028 2.8305 6.13596 2.68795 5.26145 3.60864L3.69185 5.26114C3.25823 5.71766 2.96765 6.30945 3.00289 6.96594C3.09304 8.64546 3.81071 12.259 7.81536 16.4752C12.0621 20.9462 16.0468 21.1239 17.6763 20.9631C18.1917 20.9122 18.6399 20.6343 19.0011 20.254L20.4217 18.7584C21.3806 17.7489 21.1102 16.0182 19.8833 15.312L17.9728 14.2123C17.1672 13.7486 16.1858 13.8848 15.5562 14.5477Z" fill="rgba(255, 255, 255, 0.7)" />
                                <path d="M13.2595 1.87983C13.3257 1.47094 13.7122 1.19357 14.1211 1.25976C14.1464 1.26461 14.2279 1.27983 14.2705 1.28933C14.3559 1.30834 14.4749 1.33759 14.6233 1.38082C14.9201 1.46726 15.3347 1.60967 15.8323 1.8378C16.8286 2.29456 18.1544 3.09356 19.5302 4.46936C20.906 5.84516 21.705 7.17097 22.1617 8.16725C22.3899 8.66487 22.5323 9.07947 22.6187 9.37625C22.6619 9.52466 22.6912 9.64369 22.7102 9.72901C22.7197 9.77168 22.7267 9.80594 22.7315 9.83125L22.7373 9.86245C22.8034 10.2713 22.5286 10.6739 22.1197 10.7401C21.712 10.8061 21.3279 10.53 21.2601 10.1231C21.258 10.1121 21.2522 10.0828 21.2461 10.0551C21.2337 9.9997 21.2124 9.91188 21.1786 9.79572C21.1109 9.56339 20.9934 9.21806 20.7982 8.79238C20.4084 7.94207 19.7074 6.76789 18.4695 5.53002C17.2317 4.29216 16.0575 3.59117 15.2072 3.20134C14.7815 3.00618 14.4362 2.88865 14.2038 2.82097C14.0877 2.78714 13.9417 2.75363 13.8863 2.7413C13.4793 2.67347 13.1935 2.28755 13.2595 1.87983Z" fill="rgba(255, 255, 255, 0.7)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4857 5.3293C13.5995 4.93102 14.0146 4.7004 14.4129 4.81419L14.2069 5.53534C14.4129 4.81419 14.4129 4.81419 14.4129 4.81419L14.4144 4.81461L14.4159 4.81505L14.4192 4.81602L14.427 4.81834L14.4468 4.8245C14.4618 4.82932 14.4807 4.8356 14.5031 4.84357C14.548 4.85951 14.6074 4.88217 14.6802 4.91337C14.8259 4.97581 15.0249 5.07223 15.2695 5.21694C15.7589 5.50662 16.4271 5.9878 17.2121 6.77277C17.9971 7.55775 18.4782 8.22593 18.7679 8.7154C18.9126 8.95991 19.009 9.15897 19.0715 9.30466C19.1027 9.37746 19.1254 9.43682 19.1413 9.48173C19.1493 9.50418 19.1555 9.52301 19.1604 9.53809L19.1665 9.55788L19.1688 9.56563L19.1698 9.56896L19.1702 9.5705C19.1702 9.5705 19.1707 9.57194 18.4495 9.77798L19.1707 9.57194C19.2845 9.97021 19.0538 10.3853 18.6556 10.4991C18.2607 10.6119 17.8492 10.3862 17.7313 9.99413L17.7276 9.98335C17.7223 9.96832 17.7113 9.93874 17.6928 9.89554C17.6558 9.8092 17.5887 9.66797 17.4771 9.47938C17.2541 9.10264 16.8514 8.53339 16.1514 7.83343C15.4515 7.13348 14.8822 6.73078 14.5055 6.50781C14.3169 6.39619 14.1757 6.32909 14.0893 6.29209C14.0461 6.27358 14.0165 6.26254 14.0015 6.25721L13.9907 6.25352C13.5987 6.13564 13.3729 5.72419 13.4857 5.3293Z" fill="rgba(255, 255, 255, 0.7)" />
                            </svg>
                            <span>+1012 3456 789</span>
                        </div>
                        <div aria-label="email" style="gap: 10px;">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="rgba(255, 255, 255, 0.7)" xmlns="http://www.w3.org/2000/svg">
                                <g id="style=fill">
                                    <g id="email">
                                        <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M7 2.75C5.38503 2.75 3.92465 3.15363 2.86466 4.1379C1.79462 5.13152 1.25 6.60705 1.25 8.5V15.5C1.25 17.393 1.79462 18.8685 2.86466 19.8621C3.92465 20.8464 5.38503 21.25 7 21.25H17C18.615 21.25 20.0754 20.8464 21.1353 19.8621C22.2054 18.8685 22.75 17.393 22.75 15.5V8.5C22.75 6.60705 22.2054 5.13152 21.1353 4.1379C20.0754 3.15363 18.615 2.75 17 2.75H7ZM19.2285 8.3623C19.5562 8.10904 19.6166 7.63802 19.3633 7.31026C19.1101 6.98249 18.6391 6.9221 18.3113 7.17537L12.7642 11.4616C12.3141 11.8095 11.6858 11.8095 11.2356 11.4616L5.6886 7.17537C5.36083 6.9221 4.88982 6.98249 4.63655 7.31026C4.38328 7.63802 4.44367 8.10904 4.77144 8.3623L10.3185 12.6486C11.3089 13.4138 12.691 13.4138 13.6814 12.6486L19.2285 8.3623Z" fill="rgba(255, 255, 255, 0.7)" />
                                    </g>
                                </g>
                            </svg>
                            <span>demo@gmail.com</span>
                        </div>
                        <div aria-label="location" style="gap: 10px;">
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="32px" height="32px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                <path fill="rgba(255, 255, 255, 0.7)" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24
	C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24
	C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z" />
                            </svg>
                            <span>132 Dartmouth Street Boston, Massachusetts 02156 United States</span>
                        </div>
                    </div>
                    <div class="social-icons flex items-center">
                        <a href="https://www.facebook.com/Ubuyindia/" target="_blank" aria-label="Facebook">
                            <svg fill="rgba(255, 255, 255, 0.7)" width="36px" height="36px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/ubuyindia/?hl=en" target="_blank" aria-label="Instagram">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="rgba(255, 255, 255, 0.7)">
                                <!-- <g fill="none" fill-rule="evenodd"> -->
                                <!-- <path d="m0 0h32v32h-32z" /> -->
                                <path d="m17.0830929.03277248c8.1190907 0 14.7619831 6.64289236 14.7619831 14.76198302v2.3064326c0 8.1190906-6.6429288 14.761983-14.7619831 14.761983h-2.3064325c-8.11909069 0-14.76198306-6.6428924-14.76198306-14.761983v-2.3064326c0-8.11909066 6.64289237-14.76198302 14.76198306-14.76198302zm-.8630324 8.0002641-.2053832-.0002641c-1.7102378 0-3.4204757.05652851-3.4204757.05652851-2.4979736 0-4.52299562 2.02501761-4.52299562 4.52298561 0 0-.05191606 1.4685349-.05624239 3.0447858l-.00028625.2060969c0 1.7648596.05652864 3.590089.05652864 3.5900891 0 2.497968 2.02502202 4.5229856 4.52299562 4.5229856 0 0 1.5990132.0565285 3.2508899.0565285 1.7648634 0 3.6466255-.0565285 3.6466255-.0565285 2.4979736 0 4.4664317-1.9684539 4.4664317-4.4664219 0 0 .0565286-1.8046833.0565286-3.5335605l-.0010281-.4057303c-.0076601-1.5511586-.0555357-3.0148084-.0555357-3.0148084 0-2.4979681-1.9684582-4.46642191-4.4664317-4.46642191 0 0-1.6282521-.05209668-3.2716213-.05626441zm-.2053831 1.43969747c1.4024317 0 3.2005639.04637875 3.2005638.04637875 2.0483524 0 3.3130573 1.2647021 3.3130573 3.31305 0 0 .0463789 1.7674322.0463789 3.1541781 0 1.4176885-.0463789 3.2469355-.0463789 3.2469355 0 2.048348-1.2647049 3.31305-3.3130573 3.31305 0 0-1.5901757.0389711-2.9699093.0454662l-.3697206.0009126c-1.3545375 0-3.0049692-.0463788-3.0049692-.0463788-2.0483172 0-3.36958592-1.321301-3.36958592-3.3695785 0 0-.04637885-1.8359078-.04637885-3.2830941 0-1.3545344.04637885-3.061491.04637885-3.061491 0-2.0483479 1.32130402-3.31305 3.36958592-3.31305 0 0 1.7416035-.04637875 3.1440353-.04637875zm-.0000353 2.46195055c-2.2632951 0-4.0980441 1.8347448-4.0980441 4.098035s1.8347489 4.098035 4.0980441 4.098035 4.0980441-1.8347448 4.0980441-4.098035c0-2.2632901-1.8347489-4.098035-4.0980441-4.098035zm0 1.4313625c1.4727754 0 2.6666784 1.1939004 2.6666784 2.6666725s-1.193903 2.6666726-2.6666784 2.6666726c-1.4727401 0-2.6666784-1.1939005-2.6666784-2.6666726s1.1939031-2.6666725 2.6666784-2.6666725zm4.2941322-2.5685935c-.5468547 0-.9902027.4455321-.9902027.9950991 0 .5495671.443348.9950639.9902027.9950639.5468546 0 .9901674-.4454968.9901674-.9950639 0-.5496023-.4433128-.9950991-.9901674-.9950991z" fill="rgba(255, 255, 255, 0.7)" fill-rule="nonzero" />
                                <!-- </g> -->
                            </svg>
                        </a>
                        <a href="https://x.com/ubuyindia" target="_blank" aria-label="Twitter">
                            <svg fill="rgba(255, 255, 255, 0.7)" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="-143 145 512 512" xml:space="preserve">
                                <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M215.2,361.2
	c0.1,2.2,0.1,4.5,0.1,6.8c0,69.5-52.9,149.7-149.7,149.7c-29.7,0-57.4-8.7-80.6-23.6c4.1,0.5,8.3,0.7,12.6,0.7
	c24.6,0,47.3-8.4,65.3-22.5c-23-0.4-42.5-15.6-49.1-36.5c3.2,0.6,6.5,0.9,9.9,0.9c4.8,0,9.5-0.6,13.9-1.9
	C13.5,430-4.6,408.7-4.6,383.2v-0.6c7.1,3.9,15.2,6.3,23.8,6.6c-14.1-9.4-23.4-25.6-23.4-43.8c0-9.6,2.6-18.7,7.1-26.5
	c26,31.9,64.7,52.8,108.4,55c-0.9-3.8-1.4-7.8-1.4-12c0-29,23.6-52.6,52.6-52.6c15.1,0,28.8,6.4,38.4,16.6
	c12-2.4,23.2-6.7,33.4-12.8c-3.9,12.3-12.3,22.6-23.1,29.1c10.6-1.3,20.8-4.1,30.2-8.3C234.4,344.5,225.5,353.7,215.2,361.2z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/917901655023?text=Hello%20I%20am%20interested%20in%20your%20service" target="_blank" aria-label="WhatsApp">
                            <svg style="border-radius: 60%;" fill="rgba(255, 255, 255, 0.7)" height="34px" width="34px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 504.4 504.4" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M254.8,119.4c-71.6,0-129.6,57.6-129.6,128.8c0,28,9.2,54.4,24.8,75.6l-16.4,48l50-16c20.4,13.6,45.2,21.2,71.6,21.2
			c71.6,0,130-57.6,130-128.8C384.8,177,326.4,119.4,254.8,119.4z M330.8,301.4c-3.2,8.8-18.8,17.2-25.6,18s-6.8,5.6-45.6-9.2
			c-38.4-15.2-62.8-54-64.8-56.8c-2-2.4-15.6-20.4-15.6-38.8c0-18.4,9.6-27.6,13.2-31.2c3.6-3.6,7.6-4.8,10-4.8
			c2.4,0,5.2,0.4,7.2,0.4c2.4,0,5.2-1.2,8.4,6.4c3.2,7.6,10.8,26,11.6,28s1.6,4,0.4,6.4c-1.2,2.4-2,4-3.6,6.4c-2,2-4,4.8-5.6,6.4
			c-2,2-4,4-1.6,7.6c2.4,3.6,10,16,21.2,26c14.4,12.8,26.8,16.8,30.4,18.8c3.6,2,6,1.6,8-0.8c2.4-2.4,9.6-10.8,12-14.8
			c2.4-3.6,5.2-3.2,8.4-2c3.6,1.2,22,10.4,26,12.4c3.6,2,6.4,2.8,7.2,4.4C333.6,285,333.6,292.6,330.8,301.4z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M377.6,0.2H126.4C56.8,0.2,0,57,0,126.6v251.6c0,69.2,56.8,126,126.4,126H378c69.6,0,126.4-56.8,126.4-126.4V126.6
			C504,57,447.2,0.2,377.6,0.2z M254.8,401.4c-27.2,0-52.4-6.8-74.8-19.2l-85.6,27.2l28-82c-14-23.2-22-50.4-22-79.2
			c0-84.8,69.2-153.2,154.4-153.2s154.4,68.4,154.4,153.2S340,401.4,254.8,401.4z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="userInfo.php" method="post">
                        <div class="form-group inline">
                            <div>
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" placeholder="John" style="border: none; border-bottom: 2px solid black; outline: none;">
                            </div>
                            <div>
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" placeholder="Doe" style="border: none; border-bottom: 2px solid black; outline: none;">
                            </div>
                        </div>
                        <div class="form-group inline">
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="demo@gmail.com" style="border: none; border-bottom: 2px solid black; outline: none;">
                            </div>
                            <div>
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 012 3456 789" style="border: none; border-bottom: 2px solid black; outline: none;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:700;">Select Subject?</label>
                            <div class="radio-group">
                                <label style="display: flex; align-items: center;width: fit-content;">
                                    <input type="radio" name="subject" value="general1" checked>
                                    <span style="font-size: 12px; font-weight:600; width: 100%; display: block;">General Inquiry 1</span>
                                </label>
                                <label style="display: flex; align-items: center;width: fit-content;">
                                    <input type="radio" name="subject" value="general2">
                                    <span style="font-size: 12px;font-weight:600; width: 100%; display: block;">General Inquiry 2</span>
                                </label>
                                <label style="display: flex; align-items: center;width: fit-content;">
                                    <input type="radio" name="subject" value="general3">
                                    <span style="font-size: 12px;font-weight:600; width: 100%; display: block;">General Inquiry 2</span>
                                </label>
                                <label style="display: flex; align-items: center;width: fit-content;">
                                    <input type="radio" name="subject" value="general4">
                                    <span style="font-size: 12px;font-weight:600; width: 100%; display: block;">General Inquiry 4</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Write your message.." style="height: 40px; border: none; border-bottom: 2px solid black; outline: none;"></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>