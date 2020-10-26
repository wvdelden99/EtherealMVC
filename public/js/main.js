/*-----Nav Icon Onclick-----*/
document.querySelector('.nav-list_icon-item').addEventListener('click', function () {
  document.querySelector('.dropdown').classList.toggle('dropdown-show')
});
/*-----Nav Menu/Sidenav-----*/
const menuBtn = document.querySelector('.nav-menu');
const sideNav = document.querySelector('.sidenav');
const sidenavTransparent = document.querySelector('.sidenav-transparent');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
    sideNav.classList.add("sidenav-open");
    sidenavTransparent.classList.add("transparent-active");
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
    sideNav.classList.remove("sidenav-open");
    sidenavTransparent.classList.remove("transparent-active");
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