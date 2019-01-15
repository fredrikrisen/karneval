var i = 0;
var images = [];
var time = 2000;

//image list

images[0] = "./Pictures/Karnevalen06.jpg";
images[1] = "./Pictures/Karnevalen07.jpg";
images[2] = "./Pictures/Karnevalen08.jpg";
images[3] = "./Pictures/Karnevalen09.jpg";

function changeImg1() {
  document.slide.src = images[i];

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }
  setTimeout("changeImg1()", time);
}

window.addEventListener("load", changeImg1, false);
