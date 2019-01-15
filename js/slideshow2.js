var b = 0;
var images2 = [];
var time2 = 2000;

//image list

images2[0] = "./Pictures/Artist1.jpg";
images2[1] = "./Pictures/Artist2.jpg";
images2[2] = "./Pictures/Artist3.jpg";

function changeImg2() {
  document.slide2.src = images2[b];

  if (b < images2.length - 1) {
    b++;
  } else {
    b = 0;
  }
  setTimeout("changeImg2()", time2);
}

window.addEventListener("load", changeImg2, false);
