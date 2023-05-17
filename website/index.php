<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include_once("navbar-not-logged-in.php");
    ?>
    <img class="home-image" src="media/home-image.png">
    <div class="container-home">
        <div class="container-destination">
            <div class="row">
                <div class="flights">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0225 24.6771L20.3626 23.4351L18.4343 14.6347L22.1195 11.2191C22.6757 10.7037 22.7085 9.83871 22.1931 9.28257C21.6777 8.72644 20.8127 8.69357 20.2565 9.20901L16.5713 12.6245L7.94252 10.0341L6.60242 11.2761L13.5561 15.419L9.8708 18.8345L7.31322 18.0909L6.30815 19.0224L9.4622 21.0816L11.2762 24.3828L12.2812 23.4513L11.7338 20.8447L15.4191 17.4292L19.0225 24.6771Z"
                            fill="black" />
                    </svg>
                    Flights
                </div>
                <div class="hotels">
                    <svg class="hotel-logo" width="32" height="22" viewBox="0 0 32 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.72727 11.7333C11.1418 11.7333 13.0909 9.768 13.0909 7.33333C13.0909 4.89867 11.1418 2.93333 8.72727 2.93333C6.31273 2.93333 4.36364 4.89867 4.36364 7.33333C4.36364 9.768 6.31273 11.7333 8.72727 11.7333ZM26.1818 2.93333H14.5455V13.2H2.90909V0H0V22H2.90909V17.6H29.0909V22H32V8.8C32 5.55867 29.3964 2.93333 26.1818 2.93333Z"
                            fill="white" />
                    </svg>
                    Hotels

                </div>
                <div class="rent-a-car">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_27)">
                            <path
                                d="M25.89 7.38875C25.615 6.5775 24.845 6 23.9375 6H8.8125C7.905 6 7.14875 6.5775 6.86 7.38875L4 15.625V26.625C4 27.3813 4.61875 28 5.375 28H6.75C7.50625 28 8.125 27.3813 8.125 26.625V25.25H24.625V26.625C24.625 27.3813 25.2437 28 26 28H27.375C28.1313 28 28.75 27.3813 28.75 26.625V15.625L25.89 7.38875ZM8.8125 21.125C7.67125 21.125 6.75 20.2037 6.75 19.0625C6.75 17.9213 7.67125 17 8.8125 17C9.95375 17 10.875 17.9213 10.875 19.0625C10.875 20.2037 9.95375 21.125 8.8125 21.125ZM23.9375 21.125C22.7963 21.125 21.875 20.2037 21.875 19.0625C21.875 17.9213 22.7963 17 23.9375 17C25.0787 17 26 17.9213 26 19.0625C26 20.2037 25.0787 21.125 23.9375 21.125ZM6.75 14.25L8.8125 8.0625H23.9375L26 14.25H6.75Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_27">
                                <rect width="33" height="33" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    Rent A Car
                </div>
            </div>
            <div class="destination-box">
                <div class="from">
                    <p class="small-text">FROM</p>
                    <p class="big-text">*City Name*</p>
                    <p class="country">*Country*</p>
                </div>
                <div class="circle">
                    <div class="rectangle">
                        <svg width="38" height="26" viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.0186 16.7143H0V20.4286H13.0186V26L20.4286 18.5714L13.0186 11.1429V16.7143ZM24.1243 14.8571V9.28571H37.1429V5.57143H24.1243V0L16.7143 7.42857L24.1243 14.8571Z"
                                fill="#D9D9D9" />
                        </svg>

                    </div>
                </div>
                <div class="to">
                    <p class="small-text">TO</p>
                    <p class="big-text">*City Name*</p>
                    <p class="country">*Country*</p>
                </div>
                <div class="date-box">
                    <div class="date-container">
                        <div class="date-half">
                            <p class="small-text">DEPARTURE</p>
                            <p class="big-text">Wed, 10 May</p>
                        </div>
                        <div class="other-half">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="32" height="32" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_3_65" transform="scale(0.0104167)" />
                                    </pattern>
                                    <image id="image0_3_65" width="96" height="96"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="date-container">
                        <div class="date-half">
                            <p class="small-text">ARRIVAL</p>
                            <p class="big-text">Tue, 16 May</p>
                        </div>
                        <div class="other-half">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="32" height="32" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_3_65" transform="scale(0.0104167)" />
                                    </pattern>
                                    <image id="image0_3_65" width="96" height="96"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="book.php" class="book-a-flight-button">Search Flights
                    <svg width="96" height="48" viewBox="0 0 96 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3_72)">
                            <path d="M64.04 22H16V26H64.04V32L80 24L64.04 16V22Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_3_72">
                                <rect width="96" height="48" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
            </div>
        </div>
    </div>
    <div class="container-home3">
        <div class="container-home2">
            <p class="home-title">Popular Destinations</p>
            <div class="popular-destinations">
                <div class="popular-container1">
                <img class="popular-section1" src="media/bahamas-hotel-image.png" >
                </div>
                <div class="popular-container2">
                <p class="big-text left">Margaritaville Resort Deluxe Rooms</p>
                <p class="medium-text left">STARS</p>
                <p class="small-text left">Caribbean, The Bahamas</p>
                <p class="price left">$430 Per Night</p>
                </div>
                <div class="popular-container3">
                <a href="book.php" class="book-button">Book Now</a>
                </div>
            </div>
            <div class="popular-destinations">
                <div class="popular-container1">
                <img class="popular-section1" src="media/trump-tower-image.png" >
                </div>
                <div class="popular-container2">
                <p class="big-text left">Trump Tower</p>
                <p class="medium-text left">STARS</p>
                <p class="small-text left">Las Vegas, United States of America</p>
                <p class="price left">$740 Per Night</p>
                </div>
                <div class="popular-container3">
                <a href="book.php" class="book-button">Book Now</a>
                </div>
            </div>
            <div class="popular-destinations">
                <div class="popular-container1">
                <img class="popular-section1" src="media/titanic-hotel-image.jpg" >
                </div>
                <div class="popular-container2">
                <p class="big-text left">Titanic Beach Resort</p>
                <p class="medium-text left">STARS</p>
                <p class="small-text left">Antalya, Turkiye</p>
                <p class="price left">$300 Per Night</p>
                </div>
                <div class="popular-container3">
                <a href="book.php" class="book-button">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>