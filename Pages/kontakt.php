  
<section id="kontakt">
    <br>
    <br>

    <h1>Kontakt</h1>

    <div class="left">

        <h3>My Google Maps Demo</h3>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
        </script>

    </div>

    <div class="right">
        <h2>Kontakty</h2>


        <h3>Bernhard Tengler</h3>

        <p>Náves Svobody 49, 783 71 Olomouc</p>
        Tel, fax 585 316 420<br>
        Mob. 603 971 488<br>
        email:tengler@koupelnyolomouc.cz<br>
        Ludìk Janeèko<br>

        Ludìk Janeèko<br>
        Mob. 603 971 499<br>
    </div>


</section>