function CarregaJanela(ua) {
  elemento = document.getElementById("conteudobox");
  elemento.innerHTML = "<center><img src=\"engine/imgs/loader.gif\"></center>";
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "engine/ajax/getDetails.php?ua=" + escape(ua);
  request.open("GET", url, true);
  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      if (request.status == 200) {
        elemento.innerHTML = request.responseText;
      }
    }
  };
  request.send(null);
}