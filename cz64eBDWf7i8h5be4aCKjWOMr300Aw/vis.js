let canvas = document.querySelector("canvas");
audio = document.querySelector("audio");
let wave = new Wave(audio, canvas);

audio.crossOrigin = 'anonymous'

canvas.height = window.innerHeight - 30;
canvas.width = window.innerWidth - 30;

wave.addAnimation(new wave.animations.Wave({
lineWidth: 10,
count: 125,
rounded: true,
color: 'rgba(206, 206, 206, 0.568)',
fillColor: 'rgba(206, 206, 206, 0.568)',
lineColor: "rgba(206, 206, 206, 0.568)",
}));

document.body.style.overflow = "hidden";
