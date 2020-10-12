/*-----Nav Menu-----*/
const menuBtn = document.querySelector('.nav-menu');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});

/*----Nav Scroll Transistion-----*/
const header = document.querySelector(".nav");
const sectionOne = document.querySelector(".plg-cont-top_title");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add("nav-scroll");
    } else {
      header.classList.remove("nav-scroll");
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

/*----Objetcs Fade In-----*/
const faders = document.querySelectorAll(".fade-in");
// const sliders = document.querySelectorAll(".slide-in");

const appearOptions = {
  threshold: 0.5,
  rootMargin: "0px 0px 75px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
      console.log('hi');
    }
  });
},
appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});

// sliders.forEach(slider => {
//   appearOnScroll.observe(slider);
// });

/*-----Go to Location-----*/
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });
});