var i = -18; // fudge to delay start of typing
var txt = 'Start a collaboration or just have a chat with us_'; /* The text */
var speed = 40; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typeWriter-container").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter()
