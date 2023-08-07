<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/8.3__iPad_Mini_portrait.png">
    <link rel="apple-touch-startup-image" media="screen and (device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="splash_screens/12.9__iPad_Pro_landscape.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                <img src="img/1.png" class="image">
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
                <div class="card-content">
                    <h1><span class="material-symbols-sharp">barcode_reader</span></h1>
                    <h3>QR Code Reader</h3>
                </div>
            </div>

            <div class="card twitter-card">
                <div class="card-content">
                    <h1><span class="material-symbols-sharp">linked_camera</span></h1>
                    <h3>Smartphone Reader</h3>
                </div>
            </div>

            <div class="card instagram-card">
                <div class="card-content">
                    <h1><span class="material-symbols-sharp">match_word</span></h1>
                    <h3>By Name</h3>
                </div>
            </div>

            <div class="card yt-card">
                <div class="card-content">
                    <h1><span class="material-symbols-sharp">person_play</span></h1>
                    <h3>Followers</h3>
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
                    <h2>1A</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1B</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1C</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1D</h2>
                </div>
            </div>

            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1A</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1B</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1C</h2>
                </div>
            </div>
            
            <div class="card-two">
                <div class="card-two-title">
                    <p>Page Views</p>
                    <div class="icon-face"></div>
                </div>
                <div class="card-two-content">
                    <h2>1D</h2>
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