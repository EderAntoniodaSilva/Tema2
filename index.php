<?php include 'bd/listagemPostos.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Pontos de saúde publica de Hortolândia</title>
	<link rel="stylesheet" type="text/css" href="css/bootstap.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />
	<link rel="stylesheet" type="text/css" href="css/base.css">

    <header>
        <nav>
          <ul>

              <li><a href="#">Home</a></li>
              <li><a href="formulario.html">Contato</a></li>
              <li><a href="sobre.html">Sobre</a></li>
              <li><a href="cadastroPosto.html">Cadastro</a></li>
          </ul>
        </nav>

    </header>
</head>
<body>
    <div class="conteiner">

	<div id="mapid"></div>
	<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js" ></script>
	<script>

	/* gel locarização do mapa */
	var mymap = L.map('mapid').setView([-22.870,-47.208,], 13);

/*	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
	maxZoom: 18,attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	'Imagery © <a href="http://mapbox.com">Mapbox</a>',id: 'mapbox.streets'}).addTo(mymap);
	*/
	L.tileLayer('https://api.mapbox.com/styles/v1/ederdasilva/cit2zwz1200542xtmme5hacdz/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZWRlcmRhc2lsdmEiLCJhIjoiY2l0MnpvOWhlMHR2MjJwcGd6dWxjdHZvaSJ9.DqBnMNDaFaA7T3GnDcAIuQ', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'your.mapbox.project.id',
    accessToken: 'pk.eyJ1IjoiZWRlcmRhc2lsdmEiLCJhIjoiY2l0MnpvOWhlMHR2MjJwcGd6dWxjdHZvaSJ9.DqBnMNDaFaA7T3GnDcAIuQ'
	}).addTo(mymap);

	//marcado no mapa
        <?php
               foreach ($postos as $posto){

                   $latitude = $posto['latitude'];
                   $longitude = $posto['longitude'];
                   $nome = $posto['nome_posto'];
                   $rua = $posto['rua'];
                   $num = $posto['numero'];
                   $bairro = $posto['bairro'];
                   $fone = $posto['fone'];

	               echo "L.marker([$latitude, $longitude]).addTo(mymap)"
                       .".bindPopup('<b>$nome</b><br><b>Rua: $rua, $numero - $bairro</b><br><b>$fone</b>');";
                }
        ?>

	</script>

	<script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
	<footer>
  	<small>Este site esta bobre a licença  <a href="http://choosealicense.com/licenses/apache-2.0/"> Apache 2.0</a></small>
	</footer>
    </div>

</body>
</html>
