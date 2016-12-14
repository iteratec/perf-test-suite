$(window).ready(function() {
  var head = document.getElementsByTagName("head")[0];
  var script = document.createElement("script");
  script.setAttribute("src","assets/js/heavy_lifting.js");
  script.setAttribute("type","text/javascript");
  script.setAttribute("async",true);
  //script.setAttribute("charset","ISO-8859-1");
  head.appendChild(script);
});
