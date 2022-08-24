<?require 'header.php'?>
<link rel="stylesheet" type="text/css" href="css/custom.css">
<div class="text-center background">
<img src="img/people.jpg" class="img-fluid" alt="people">
</div>




<section id="objective">
  <div class="container">
  
  	<div class="row">
    <div class="col-6 text-center"> 
      <h5>Empowering people</h5> 
      <p>We connect all Hong Kongers, new and old; and connect the Hong Kongers to the local British community and visa verse.<p></div>

    <div class="col-6 text-center">
      <h5>All cultures</h5>
      <p>No matter who they are or where they are from, we want the new immigrants to feel welcomed, respected, appreciated and accepted.</p></div>
</div>
 
<div class="row">
    <div class="col-6 text-center">
      <h5>Learn, train and share</h5>
     <p>We aim to teach English as an Additional Language (EAL) and Cultural Orientation, to facilitate the process of acculturation <span id="dots">...</span><span id="more"> and adaptation into understanding the British Core values to be a fully interpreted part of the British community. We aim to facilitate different training programmes, vocational skills and certificates to enable the individuals to enter the work place successfully. Sharing – we encourage the synergy between cultures to share in festivals and celebrations; sharing life together as family.</span></p>
    <button onclick="myFunction();" id="myBtn" class="btn btn-secondary">Read more</button>
    </div>


    <div class="col-6 text-center">
      <h5>Give back</h5>
    <p>We aim to establish a ‘3+4=7’ scheme where individual learn and receive for the first 3 years and the give back into the <span id="dots">...</span><span id="more"> community in the next 4 years.
    Giving back will be in the form of time, volunteering and finance to facilitate others coming through.
    7 is the perfect number anthropologically speaking for an individual to adapt and become bi-cultural. </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>
</div>

<div class="row">
  <div class="col-6 text-center">
    <h5>Cultures and knowledge sharing</h5>
    <p> We share resources and knowledge of the Hong Kong Spirit and Culture in harmony with the <span id="dots">...</span><span id="more"> British Culture and values, welcoming other cultures to share in this harmonious interconnectivity. Celebrating the shared cultural values and strengthen the links between them and others. 
      </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>

    <div class="col-6 text-center">
    <h5>Transformed lives</h5>
     <p>We aim to assist Hong Kongers, and other cultures, to comfortably adapt to British life restoring their identity, self-esteem <span id="dots">...</span><span id="more">  and dignity whilst looking forward to a future of freedom, hope and destiny. For Hong Kongers to reconnect with their roots and heritage to feel truly British Hong Kongers again. </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>
</div>

   <div class="row">
    <div class="col-6 text-center">
    <h5>Fully contribute to community</h5>
    <p>We aim to encourage all individuals to contribute back into society, helping people in the local <span id="dots">...</span><span id="more">community, and reaching back to help others, as they themselves move forward.
     </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>

    <div class="col-6 text-center">
    <h5>Interdependence</h5>
    <p>We aim to encourage synergy in relationships where we teach, train, support, enable and encourage one <span id="dots">...</span><span id="more">another. Greater is the whole than the individual sum of its parts. We are greater together than as individuals working separately alone. </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>
</div>


    <div class="col text-center">
    <h5>Freedom and Power</h5>
    <p>To have a voice again, to be heard, to have the right to a democratic vote and to be free.
    To have individual liberty, mutual respect, <span id="dots">...</span><span id="more">tolerance of all beliefs and religion, the Rule of Law and democracy.
     </span></p>
    <button onclick="myFunction()" id="myBtn" class="btn btn-secondary">Read more</button></div>
</div>
</div>
</section>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body> 
<?require 'footer.php';?>