<!DOCTYPE html>
<html>
<style>
  .map-responsive {

    overflow: hidden;

    padding-bottom: 56.25%;

    position: relative;

    height: 0;

  }

  .map-responsive iframe {

    left: 0;

    top: 0;

    height: 100%;

    width: 100%;

    position: absolute;

  }
</style>

<head>
  <link rel="icon" type="image/x-icon" href="img/Logo.jpeg">
  <title>GOOGLE MAPS</title>

</head>

<body>
  <h1>Google Maps</h1>
  <hr>
  <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15245.628033451016!2d-93.
    01972823776515!3d17.199033658412493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed
    06c96e4dbf17%3A0xd521a9b29f8d1e1e!2s29740%20Ray%C3%B3n%2C%20Chis.!5e0!3m2!1ses-419!2smx!4v16
    64990595654!5m2!1ses-419!2smx" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</body>

</html>
<!DOCTYPE html>
<html>

<body>

  <p>Haga clic para obtener sus coordenadas.</p>

  <button onclick="getLocation()">Obtener</button>

  <p id="demo"></p>

  <script>
    var x = document.getElementById("demo");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
    }
  </script>

</body>

</html>