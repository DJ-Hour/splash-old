var playing = false;
function updatePlayerText() {
    $.getJSON("https://azuracast.dj-hour.co.uk/api/nowplaying/1", function(data) {
        $(".songTitle").text(data.now_playing.song.title.replace(/(.{25})..+/, "$1..."));
        $(".songArtist").text(data.now_playing.song.artist.replace(/(.{30})..+/, "$1..."));
        $(".songart").css("background-image", `url(${data.now_playing.song.art})`)
        $(".songbg").css("background-image", `url(${data.now_playing.song.art})`)
    }).fail(function() {
        $(".songTitle").text("API ERROR");
        $(".songArtist").text("API ERROR");
        $(".songart").css("background-image", "url(https://cdn.discordapp.com/attachments/1007350185313185903/1009124597775470633/logo69.png)")
    });
}


updatePlayerText();
setInterval(updatePlayerText, 2500);
function playDJhour() {
    if (playing == true) {
        $(".audio-play")[0].className = "audio-play fas fa-play";
        playing = false;
        audio.volume = 0;
    } else {
        $(".audio-play")[0].className = "audio-play fas fa-pause";
        playing = true;
        audio.src = "https://stream.dj-hour.co.uk";
        audio.volume = 0.5;
        audio.play();
    }
}
var audio = $(".djhour-stream")[0];

$("#audio-volume").on("input", function () {
    if (playing == true) {
      audio.volume = $("#audio-volume")[0].value;
    }
});
