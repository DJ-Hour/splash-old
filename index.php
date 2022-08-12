<?php
function randomString($length = 3) {
    $randomString = '';
    $characters = implode("", array_merge(range('a', 'z'), range('A', 'Z')));
    for ($i = 0; $i < $length; $i++) $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
    return $randomString;
}
function encode($output) { 
	  $randomFunc = randomString();
    $randomOut = randomString();
    $randomNum = randomString();
    $randomVal = mt_rand(999999, 99999999);
    $return = '<!-- This splash was made by the dj hour dev team by dj hour no one else -->
    <script>var ' . $randomOut . ' = ""; var ' . $randomNum . ' = [';
    foreach(str_split($output) as $x){ $return .= '"'.base64_encode(randomString().(ord($x) + $randomVal).randomString()) . '", '; if (mt_rand(0, 1)){ $return .= "\n"; } }
    $return = rtrim($return, ', ');
    $return .= ']; ' . $randomNum . '.forEach(function ' . $randomFunc . '(value) { ' . $randomOut . ' += String.fromCharCode(parseInt(atob(value).replace(/\D/g,\'\')) - ' . $randomVal . '); } ); document.write(decodeURIComponent(escape(' . $randomOut . '))); </script>'  ;;
    return $return;
}
ob_start("encode");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DJ Hour &bullet; Splash</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="cz64eBDWf7i8h5be4aCKjWOMr300Aw/custom.css?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/custom.css');?>">
<link rel="stylesheet" href="cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.css?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.css');?>">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/1004467067279396924/1006657429582389349/logo69.png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/gh/foobar404/wave.js/dist/bundle.js"></script>
</head>
<body style="width: 100vw; height: 100vh; position: fixed; top: 0; left: 0; z-index: 999">
<audio volume="0" src="https://stream.dj-hour.co.uk" class="djhour-stream"></audio>
<div class="songbg" draggable="false">
</div>
<div class="songart" draggable="false">
</div>
<div class="info">
<span class="songTitle">Loading..</span>
<br>
<span class="songArtist">Loading..</span>
</br>
</div>
<canvas class="vis"></canvas>
<span class="audio-btn-play" onclick="playDJhour()"><i class="audio-play fas fa-play"></i></span>
<script src="cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.js?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.js'); ?>"></script>
<script src="cz64eBDWf7i8h5be4aCKjWOMr300Aw/vis.js?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/vis.js'); ?>"></script>
<script>
    document.addEventListener('contextmenu',(e)=>{
    e.preventDefault();
  }
  );
  document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
</script>
</body>
</html>
