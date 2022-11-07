
var hamburger__menu = document.querySelector(".hamburger__menu");
var c = 0;

function handleHamburgerMenuClick () {
     c++
   if ( c % 2 != 0) {
      var navbar = document.querySelector(".navbar-collaps");
      var body = document.querySelector("body");
      var headerSocialsLinks = document.querySelector(".header__socials__links");
      var section = document.querySelector("section");
      navbar.classList.remove("navbar-collaps");
      navbar.classList.add("navbar-collaps-clicked");
      body.style.overflowY = 'hidden';
      headerSocialsLinks.style.display = 'none';
 
      setTimeout( () => {
         body.classList.add('shadow2');
      },50 )
  }
  else{
      var navbar = document.querySelector(".navbar-collaps-clicked");
      var body = document.querySelector("body");
      var headerSocialsLinks = document.querySelector(".header__socials__links");
      var section = document.querySelector("section");
      navbar.classList.remove("navbar-collaps-clicked");
      navbar.classList.add("navbar-collaps");
      body.style.overflowY = 'scroll';
      headerSocialsLinks.style.display = 'flex';
      section.style.visibility = "visible";
      body.classList.remove('shadow2');

   }
}

hamburger__menu.addEventListener('click' , () => {
   handleHamburgerMenuClick();
})

 $(document).ready( function () {
    $(".hamburger__menu").click(
         function () {
             $("#first__one").toggleClass('hamburger__animate__one');
             $("#last__one").toggleClass('hamburger__animate__two');
             $("#middle__one").toggleClass('hamburger__animate__three');
             $("body").toggleClass('shadow2');
             // $(".hamburger__menu").toggleClass(".hamburger__menu2");
             // $(".hamburger__menu2").toggleClass(".hamburger__menu");
         }
    );
  
    $(".navLinks").click( () => {
          $("body").removeClass('scrolloff')
          $(".PortfolioIntro").show(1200);
          $(".introSocialmedia").show(1200);
          $(".scrollDown").show(1200);
          if (window.innerWidth < 992) {
               handleHamburgerMenuClick();
               $('section').css('visibility' , 'visible');
               $('.navbar-collaps-clicked').toggleClass('navbar-collaps');
               $('.navbar-collaps-clicked').toggleClass('navbar-collaps-clicked');
               $('html').removeClass('shadow2');
               $('html').css('overflowY', 'scroll');
               $("#first__one").toggleClass('hamburger__animate__one');
               $("#last__one").toggleClass('hamburger__animate__two');
               $("#middle__one").toggleClass('hamburger__animate__three');
          }
    })

    $(".services__more__content1").click( () => {
         $(".hidden__text1").show(600);
         $(".services__more__content1").hide('slow');
    } )
    $(".services__more__content2").click( () => {
         $(".hidden__text2").show(600);
         $(".services__more__content2").hide('slow');
    } )
    $(".services__more__content3").click( () => {
         $(".hidden__text3").show(600);
         $(".services__more__content3").hide('slow');
    } )


    $(".services__less__content1").click( () => {
         $(".hidden__text1").hide(600);
         $(".services__more__content1").show('slow');
    } )
    $(".services__less__content2").click( () => {
         $(".hidden__text2").hide(600);
         $(".services__more__content2").show('slow');
    } )
    $(".services__less__content3").click( () => {
         $(".hidden__text3").hide(600);
         $(".services__more__content3").show('slow');
    } )

} )






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
