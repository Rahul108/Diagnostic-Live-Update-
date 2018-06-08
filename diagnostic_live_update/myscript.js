function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("output").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "output.php", true);
  xhttp.send();
}