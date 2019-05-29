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

$(window).on('load',function(){
  $('#loader').fadeOut('slow');
});


/*
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('loader').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },1000);
  }
}*/