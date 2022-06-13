let mask = document.querySelector(".mask");
window.addEventListener("load", () => {
  mask.classList.add("hide");
  setTimeout(() => {
    mask.remove();
  }, 600);
});

window.onload = function(){

  var scrolled;
  var timer;

  document.getElementById('top').onclick = function(){
    console.log(window.pageYOffset);
   // window.scrollTo(0,0)
   scrollToTop();
  }
  function scrollToTop(){
    if (scrolled>0){
      window.scrollTo(0,scrolled);
      scrolled = scrolled - 100;
      timer = setTimeout(scrollToTop,100);
    }
    else{
      clearTimeout(timer);
      window.scrollTo(0,0);
    }
  }
}

