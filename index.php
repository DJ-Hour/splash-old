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
<link rel="stylesheet" href="cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.css?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.css');?>">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/1004467067279396924/1006657429582389349/logo69.png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<audio volume="0" class="djhour-stream">
<source src="https://stream.dj-hour.co.uk" />
</audio>
<div class="songbg" draggable="false"><div id="visuals"></div></div>
<div class="songart" draggable="false">
</div>
<div class="info">
<span class="songTitle">Loading..</span>
<br>
<span class="songArtist">Loading..</span>
</br>
</div>
<span class="audio-btn-play" onclick="playDJhour()"><i class="audio-play fas fa-play"></i></span>
<script src="cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.js?<?php echo filemtime('cz64eBDWf7i8h5be4aCKjWOMr300Aw/app.js'); ?>"></script>
<script> 
/** 
 * Disable right-click of mouse, F12 key, and save key combinations on page 
 */ 
 document.addEventListener("contextmenu", function(e){ 
 e.preventDefault(); 
 }, false); 
 document.addEventListener("keydown", function(e) { 
 //document.onkeydown = function(e) { 
 // "I" key 
 if (e.ctrlKey && e.shiftKey && e.keyCode == 73) { 
 disabledEvent(e); 
 } 
 // "J" key 
 if (e.ctrlKey && e.shiftKey && e.keyCode == 74) { 
 disabledEvent(e); 
 } 
 // "S" key + macOS 
 if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) { 
 disabledEvent(e); 
 } 
 // "U" key 
 if (e.ctrlKey && e.keyCode == 85) { 
 disabledEvent(e); 
 } 
 // "F12" key 
 if (event.keyCode == 123) { 
 disabledEvent(e); 
 } 
 // "C" key 
 if (e.ctrlKey && event.keyCode == 67) { 
 disabledEvent(e); 
 } 
 }, false); 
 function disabledEvent(e){ 
 if (e.stopPropagation){ 
 e.stopPropagation(); 
 } else if (window.event){ 
 window.event.cancelBubble = true; 
 } 
 e.preventDefault(); 
 return false; 
 }</script> 
</body>
</html>
