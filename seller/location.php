<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>🌏 Google Maps Geolocation Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        
html {
    font-family: sans-serif;
    line-height: 1.15;
    height: 100%;
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #1a1a1a;
    text-align: left;
    height: 100%;
    background-color: #fff;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.map {
    flex: 1;
    background: #f0f0f0;
}


    </style>
  </head>
  
  <body>
    <main class="container">
      <div id="map" class="map"></div>
    </main>


    <script src="script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBwvKwKxs9diyBpHQuQ_pcYCI77RNhSbU&callback=init"></script>
  </body>
  
</html>