<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

// tenemoss que agregar opciones para consumir directamente aqui este servicio
// como tiene un https vamos a necesitar la pare de seguridad, es decir la lectura a esos sitios seguros

$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

$respuesta = file_get_contents($url, false,stream_context_create($opciones)); 
//funcion que permite leer el contenido y convertirlo a String

$objResupuesta = json_decode($respuesta);

//print_r($objResupuesta);

foreach ($objResupuesta->list as $video){
  // print_r($video->title);
  // print_r($video->channel);
  // en lugar de agregar uh <br> vamos a pasarlo a una lista html
}

// lsita html

?>

<ul>

  <?php foreach ($objResupuesta->list as $video) { ?>

  <li>
    <?php echo ($video->title); ?> | <?php echo ($video->channel); ?>
  </li>

  <?php } ?>

</ul>

