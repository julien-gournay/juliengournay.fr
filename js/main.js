function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  window.addEventListener("scroll", reveal);



  function reveal2() {
    var reveal2s = document.querySelectorAll(".reveal2");
  
    for (var i = 0; i < reveal2s.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveal2s[i].getBoundingClientRect().top;
      var elementVisible = 350;
  
      if (elementTop < windowHeight - elementVisible) {
        reveal2s[i].classList.add("active");
      } else {
        reveal2s[i].classList.remove("active");
      }
    }
  }
  window.addEventListener("scroll", reveal2);















  // utility functions
if(!Util) function Util () {};

Util.hasClass = function(el, className) {
  return el.classList.contains(className);
};

Util.addClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.add(classList[0]);
  if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
};

Util.removeClass = function(el, className) {
  var classList = className.split(' ');
  el.classList.remove(classList[0]);
  if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
};

Util.toggleClass = function(el, className, bool) {
  if(bool) Util.addClass(el, className);
  else Util.removeClass(el, className);
};




window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", this.window.scrollY > 0);
})