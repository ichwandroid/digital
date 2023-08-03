<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/8.3__iPad_Mini_portrait.png">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/12.9__iPad_Pro_landscape.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="manifest.json">
    <script src="config.js"></script>
    <script src="src/App.js"></script>
    <script src="src/main.js"></script>
    <title>Digital Pickup</title>
</head>

<body onload="init()">
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="img/dp.png" class="image">
                </div>
            <div class="title">
                <h1>Digital Pickup</h1>
                <h4>Beta Version 2023</h4>
            </div>

            <div class="switch-btn">
                <div class="switch-text">
                    <h3>Dark Mode</h3>
                </div>
                <div class="switch-slider">
                    <label class="switch">
                        <input type="checkbox" name="theme" />
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="background-top"></div>

        <div class="container">
            <div class="card facebook-card">
                <div class="card-title">
                    <div class="icon"></div>
                    <p>@nathanf</p>
                </div>

                <div class="card-content">
                    <h1>1987</h1>
                    <h3>Followers</h3>
                </div>

                <div class="card-footer">
                    <div class="footer-wrapper">
                        <div class="icon-up"></div>
                        <h4>12 Today</h4>
                    </div>
                </div>
            </div>

            <div class="card twitter-card">
                <div class="card-title">
                    <div class="icon"></div>
                    <p>@nathanf</p>
                </div>

                <div class="card-content">
                    <h1>1044</h1>
                    <h3>Followers</h3>
                </div>

                <div class="card-footer">
                    <div class="footer-wrapper">
                        <div class="icon-up"></div>
                        <h4>99 Today</h4>
                    </div>
                </div>
            </div>

            <div class="card instagram-card">
                <div class="card-title">
                    <div class="icon"></div>
                    <p>@realnathanf</p>
                </div>

                <div class="card-content">
                    <h1>11k</h1>
                    <h3>Followers</h3>
                </div>

                <div class="card-footer">
                    <div class="footer-wrapper">
                        <div class="icon-up"></div>
                        <h4>1099 Today</h4>
                    </div>
                </div>
            </div>

            <div class="card yt-card">
                <div class="card-title">
                    <div class="icon"></div>
                    <p>Nathan F.</p>
                </div>

                <div class="card-content">
                    <h1>8239</h1>
                    <h3>Followers</h3>
                </div>

                <div class="card-footer">
                    <div class="footer-wrapper">
                        <div class="icon-down"></div>
                        <h4>144 Today</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container title">
            <h2>Overview - Today</h2>
        </div>
    </section>
    <section>
        <div class="container marg">
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>78</h2>
                    <div class="icon"></div>
                    <h4>3%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Likes</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>52</h2>

                    <h4 id="down">2%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Likes</p>
                    <div class="icon-insta"></div>
                </div>
                <div class="card-two-content">
                    <h2>5462</h2>

                    <h4>2257%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-insta"></div>
                </div>
                <div class="card-two-content">
                    <h2>52k</h2>

                    <h4>1357%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Retweets</p>
                    <div class="icon-twitter"></div>
                </div>
                <div class="card-two-content">
                    <h2>177</h2>

                    <h4>303%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Likes</p>
                    <div class="icon-twitter"></div>
                </div>
                <div class="card-two-content">
                    <h2>507</h2>

                    <h4>553%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-yt"></div>
                </div>
                <div class="card-two-content">
                    <h2>78</h2>

                    <h4 id="down">19%</h4>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-yt"></div>
                </div>
                <div class="card-two-content">
                    <h2>78</h2>

                    <h4 id="down">12%</h4>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Challenge by <a href="https://www.frontendmentor.io/?ref=challenge">Frontend Mentor</a> - Coded By Jon</p>
    </footer>

    <script src="index.js" type="text/javascript"></script>
</body>

</html>