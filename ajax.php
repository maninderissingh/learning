<script>
function doc(){
var xmlhttp;

xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","a.ctp",false);
xmlhttp.send();
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
</script>
<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<p> This text should not be reloaded</p>
<button onclick="doc()">Click</button>


