
function myFunction(id) {
 alert(id);
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    id.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    id.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}