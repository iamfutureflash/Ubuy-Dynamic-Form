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
            background-color: #efefef;
            font-family: 'Inter', sans-serif;
            /* overflow: hidden; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1500px;
        }

        .content {
            display: flex;
            flex-grow: 1;
            padding: 20px;
        }

        .text-content {
            position: absolute;
            /* flex: 1; */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 300px;
        }

        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .circle {
            width: 600px;
            height: 600px;
            background-color: #f4c430;
            border-radius: 50%;
            position: relative;
            /* overflow: hidden; */
        }

        .profile-image {
            position: absolute;
            bottom: 0;
            top: -38%;
            width: 600px;
            height: 1032px;
            object-fit: cover;
        }

        .tagline {
            /* z-index: 10; */
            position: absolute;
            top: 47%;
            left: 81%;
            font-size: 6rem;
            font-weight: bold;
            line-height: 1;
            width: inherit;
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
    <div class="container">
        <?php include 'navbar.php' ?>
        <div class="flex p-20 relative">
            <div class="text-content  text-wrap leading-relaxed">
                <h2 style="white-space: pre-line;letter-spacing: 0.1rem;">
                    Lorem ipsum dolor sit
                    amet,consectetur adipiscing elit.
                    Vestibulum ultrices fi.....
                </h2>
                <a href="#" class="font-bold text-base">Read More</a>
            </div>
            <div class="image-content">
                <div class="circle">

                    <img src="images/left_look.png" alt="Profile" class="profile-image">
                    <div class="tagline">less is<br>more.</div>
                </div>
            </div>
        </div>
        <footer>
            <div class="social-icons flex items-center">
                <a href="https://www.facebook.com/Ubuyindia/" target="_blank" aria-label="Facebook">
                    <svg fill="#000000" width="36px" height="36px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/ubuyindia/?hl=en" target="_blank" aria-label="Instagram">
                    <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <path d="m0 0h32v32h-32z" />
                            <path d="m17.0830929.03277248c8.1190907 0 14.7619831 6.64289236 14.7619831 14.76198302v2.3064326c0 8.1190906-6.6429288 14.761983-14.7619831 14.761983h-2.3064325c-8.11909069 0-14.76198306-6.6428924-14.76198306-14.761983v-2.3064326c0-8.11909066 6.64289237-14.76198302 14.76198306-14.76198302zm-.8630324 8.0002641-.2053832-.0002641c-1.7102378 0-3.4204757.05652851-3.4204757.05652851-2.4979736 0-4.52299562 2.02501761-4.52299562 4.52298561 0 0-.05191606 1.4685349-.05624239 3.0447858l-.00028625.2060969c0 1.7648596.05652864 3.590089.05652864 3.5900891 0 2.497968 2.02502202 4.5229856 4.52299562 4.5229856 0 0 1.5990132.0565285 3.2508899.0565285 1.7648634 0 3.6466255-.0565285 3.6466255-.0565285 2.4979736 0 4.4664317-1.9684539 4.4664317-4.4664219 0 0 .0565286-1.8046833.0565286-3.5335605l-.0010281-.4057303c-.0076601-1.5511586-.0555357-3.0148084-.0555357-3.0148084 0-2.4979681-1.9684582-4.46642191-4.4664317-4.46642191 0 0-1.6282521-.05209668-3.2716213-.05626441zm-.2053831 1.43969747c1.4024317 0 3.2005639.04637875 3.2005638.04637875 2.0483524 0 3.3130573 1.2647021 3.3130573 3.31305 0 0 .0463789 1.7674322.0463789 3.1541781 0 1.4176885-.0463789 3.2469355-.0463789 3.2469355 0 2.048348-1.2647049 3.31305-3.3130573 3.31305 0 0-1.5901757.0389711-2.9699093.0454662l-.3697206.0009126c-1.3545375 0-3.0049692-.0463788-3.0049692-.0463788-2.0483172 0-3.36958592-1.321301-3.36958592-3.3695785 0 0-.04637885-1.8359078-.04637885-3.2830941 0-1.3545344.04637885-3.061491.04637885-3.061491 0-2.0483479 1.32130402-3.31305 3.36958592-3.31305 0 0 1.7416035-.04637875 3.1440353-.04637875zm-.0000353 2.46195055c-2.2632951 0-4.0980441 1.8347448-4.0980441 4.098035s1.8347489 4.098035 4.0980441 4.098035 4.0980441-1.8347448 4.0980441-4.098035c0-2.2632901-1.8347489-4.098035-4.0980441-4.098035zm0 1.4313625c1.4727754 0 2.6666784 1.1939004 2.6666784 2.6666725s-1.193903 2.6666726-2.6666784 2.6666726c-1.4727401 0-2.6666784-1.1939005-2.6666784-2.6666726s1.1939031-2.6666725 2.6666784-2.6666725zm4.2941322-2.5685935c-.5468547 0-.9902027.4455321-.9902027.9950991 0 .5495671.443348.9950639.9902027.9950639.5468546 0 .9901674-.4454968.9901674-.9950639 0-.5496023-.4433128-.9950991-.9901674-.9950991z" fill="#202327" fill-rule="nonzero" />
                        </g>
                    </svg>
                </a>
                <a href="https://x.com/ubuyindia" target="_blank" aria-label="Twitter">
                    <svg fill="#000000" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
                    <svg style="border-radius: 50%;" fill="#000000" height="34px" width="34px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
            <div style="white-space: pre-line;letter-spacing: 0.1rem;">Arlington Heights, IL</div>
        </footer>
    </div>
</body>

</html>