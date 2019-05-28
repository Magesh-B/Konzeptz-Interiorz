window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("page1").style.top = "0";
  } else {
    document.getElementById("page1").style.top = "-50px";
  }
}
/*
var websiteLoaderVariable = document.getElementById("websiteLoader");
window.addEventListener('load', function()
{
  websiteLoaderVariable.style.display = "none";
})
*/

$(window).load(function(){
  $('.loader').fadeOut();
});