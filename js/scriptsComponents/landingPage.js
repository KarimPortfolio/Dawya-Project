
// Hnadling the sounds controls
var muteBtn = document.querySelector('.mute_button');
muteBtn.style.display = 'none';

muteBtn.addEventListener('click' , () => {
    var soundBtn = document.querySelector('.sound_on_button');
    var audio = document.querySelector('.audio');
    setTimeout( () => {
        soundBtn.style.display = 'flex';
        muteBtn.style.display = 'none';
        audio.removeAttribute('muted');
    },3)
})



var hamburger__menu = document.querySelector(".hamburger__menu");
var c = 0;

function handleHamburgerMenuClick () {
     c++
   if ( c % 2 != 0) {
      var navbar = document.querySelector(".navbar-collaps");
      var body = document.querySelector("body");
      navbar.classList.remove("navbar-collaps");
      navbar.classList.add("navbar-collaps-clicked");
      body.style.overflowY = 'hidden';
      setTimeout( () => {
         body.classList.add('shadow2');
      },50 )
  }
  else{
      var navbar = document.querySelector(".navbar-collaps-clicked");
      var body = document.querySelector("body");
      navbar.classList.remove("navbar-collaps-clicked");
      navbar.classList.add("navbar-collaps");
      body.style.overflowY = 'scroll';
   }
}

//call the function
hamburger__menu.addEventListener('click' , () => {
   handleHamburgerMenuClick();
})

//jQuery Scripts
$(document).ready( function () {
    $(".hamburger__menu").click(
         function () {
             $("#first__one").toggleClass('hamburger__animate__one');
             $("#last__one").toggleClass('hamburger__animate__two');
             $("#middle__one").toggleClass('hamburger__animate__three');
             $("body").toggleClass('shadow2');
         }
    );
    $(".hamburger__menu2").click(
         function () {
             $("body").toggleClass('shadow2');
         }
    );
  
    $(".navLinks").click( () => {
          $("body").removeClass('scrolloff')
          $(".PortfolioIntro").show(1200);
          $(".introSocialmedia").show(1200);
          $(".scrollDown").show(1200);
          console.log('clicked from jQuery');
          if (window.innerWidth < 992) {
               handleHamburgerMenuClick();
               $('section').css('visibility' , 'visible');
               $('.navbar-collaps-clicked').toggleClass('navbar-collaps');
               $('body').toggleClass('shadow2');
               $('html').css('overflowY', 'scroll');
               $("#first__one").toggleClass('hamburger__animate__one');
               $("#last__one").toggleClass('hamburger__animate__two');
               $("#middle__one").toggleClass('hamburger__animate__three');
          }
    })

    //sound controls
    $('.sound_on_button').click( () => {
        $('.sound_on_button').hide();
        $('.mute_button').show();
        // $('.audio').attr('muted','');
        $('.audio').attr('muted','');
    })

} )


// navbar change style on scroll
window.addEventListener('scroll' , () => {
 var header  = document.querySelector("header");
 var headerLogo = document.querySelector(".logo img");
 if (window.scrollY > 30) {
     header.style.backgroundColor = "#FFFF";
     header.style.boxShadow = "0px 0px 8px 0px rgba(0, 0, 0, 0.135)";
     header.style.position = "fixed";
     header.style.width = "100%";
     header.style.zIndex = "500";
     headerLogo.style.width = "60px";
     headerLogo.style.height = "60px";
 }else{
     header.style.backgroundColor = "transparent";
     header.style.boxShadow = "0px 0px 5px 0px transparent";
     header.style.position = "relative";
     headerLogo.style.width = "80px";
     headerLogo.style.height = "80px";
 }
})


//Type writer script

var app = document.querySelector('.type');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 70,
});

typewriter
  .pauseFor(400)
  .typeString('<span style="color:#7caa29; font-family: "Work Sans",sans-serif;"><strong> Profiter La Nature </strong></span>')
  .pauseFor(500)
  .deleteChars(11)
  .typeString('<span style="color:#7caa29; font-family: "Work Sans",sans-serif;"><strong> Des Activities à La Nature </strong> </span>')
  .pauseFor(500)
  .deleteChars(28)
  .typeString('<span style ="color:#7caa29 ; font-family: "Work Sans" , sans-serif;"><strong>Des Ateliers à La Nature</strong></span>')
  .pauseFor(600)
  .start();

//typre writer script


// let demo  = new TxtAnime();
// txt.overlay('.element',{
//     // overlay-1 - overlay-3
//     effect : 'overlay-1',
    
//     // start time in seconds
//     delayStart: 0,
    
//     // repeat the animation or not
//     loop : true,
    
//     // replay the effect after... in seconds
//     loopTime : 5,
//     // background color
//     overlayColor: '#03a9f4',
//     // text color
//     textColor : '#161414',
//     // waiting time in seconds
//     outTime: 3,
//   });