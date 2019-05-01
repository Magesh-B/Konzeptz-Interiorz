window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("page1").style.top = "0";
  } else {
    document.getElementById("page1").style.top = "-50px";
  }
}
