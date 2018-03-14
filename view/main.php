<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma - Cadastrar</title>

        <!-- CSS e Bootstrap -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet">
        <link href="./assets/css/signin.css" rel="stylesheet">

    </head>
    <body class="bg-info">
        <div class="container">
            <p id="demo">Ao clicar no botão <strong>localizar</strong>, você está aceitando os <a href="#">termos de serviço:</a></p>
            <br>
            <button onclick="getLocation()">Localizar</button>
            <br>
            <div id="mapholder"></div>
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyCKyovpWnG2a6wi9uyMitpRf3xNyvBJ_xo" type="text/javascript"></script>
            <script>
                var x = document.getElementById("demo");
                function getLocation()
                {
                    if (navigator.geolocation)
                    {
                        navigator.geolocation.getCurrentPosition(showPosition, showError);
                    } else {
                        x.innerHTML = "Geolocalização não é suportada nesse browser.";
                    }
                }

                function showPosition(position)
                {
                    lat = position.coords.latitude;
                    lon = position.coords.longitude;
                    latlon = new google.maps.LatLng(lat, lon)
                    mapholder = document.getElementById('mapholder')
                    mapholder.style.height = '550px';
                    mapholder.style.width = '700px';

                    var myOptions = {
                        center: latlon, zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL}
                    };
                    var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
                    var marker = new google.maps.Marker({position: latlon, map: map, title: "Você está Aqui!"});
                }

                function showError(error)
                {
                    switch (error.code)
                    {
                        case error.PERMISSION_DENIED:
                            x.innerHTML = "Usuário rejeitou a solicitação de Geolocalização."
                            break;
                        case error.POSITION_UNAVAILABLE:
                            x.innerHTML = "Localização indisponível."
                            break;
                        case error.TIMEOUT:
                            x.innerHTML = "O tempo da requisição expirou."
                            break;
                        case error.UNKNOWN_ERROR:
                            x.innerHTML = "Algum erro desconhecido aconteceu."
                            break;
                    }
                }
            </script>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>
</html>