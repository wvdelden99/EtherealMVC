/*-----Nav Icon Onclick-----*/
// document.querySelector('.nav-list_icon-item').addEventListener('click', function () {
//   document.querySelector('.dropdown').classList.toggle('dropdown-show')
// });

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

/*-----Edit Button-----*/
  /*-----Edit Button Personal Info-----*/
const editBtn = document.querySelector('.edit_btn');
const cancelBtn = document.querySelector('.alt-btn');
const dataArea = document.querySelector('.dashboard-data');
const editArea = document.querySelector('.dashboard-edit');

editBtn.addEventListener('click', () => {
    editBtn.classList.add('hide');
    dataArea.classList.add("hide");
    editArea.classList.add("show");
});
cancelBtn.addEventListener('click', () => {
    editBtn.classList.remove('hide');
    dataArea.classList.remove("hide");
    editArea.classList.remove("show");
});

  /*-----Edit Button Email-----*/
const editBtn2 = document.querySelector('.edit_btn2');
const cancelBtn2 = document.querySelector('.alt-btn2');
const dataArea2 = document.querySelector('.dashboard-data2');
const editArea2 = document.querySelector('.dashboard-edit2');
  
editBtn2.addEventListener('click', () => {
    editBtn2.classList.add('hide');
    dataArea2.classList.add("hide");
    editArea2.classList.add("show");
});
cancelBtn2.addEventListener('click', () => {
    editBtn2.classList.remove('hide');
    dataArea2.classList.remove("hide");
    editArea2.classList.remove("show");
});

  /*-----Edit Button Password-----*/
const editBtn3 = document.querySelector('.edit_btn3');
const cancelBtn3 = document.querySelector('.alt-btn3');
const dataArea3 = document.querySelector('.dashboard-data3');
const editArea3 = document.querySelector('.dashboard-edit3');
    
editBtn3.addEventListener('click', () => {
    editBtn3.classList.add('hide');
    dataArea3.classList.add("hide");
    editArea3.classList.add("show");
});
cancelBtn3.addEventListener('click', () => {
    editBtn3.classList.remove('hide');
    dataArea3.classList.remove("hide");
    editArea3.classList.remove("show");
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