const navSlide=()=>{const burger=document.querySelector('.hamburger');const nav=document.querySelector('.nav-links');const navLinks=document.querySelectorAll('.nav-links li');burger.addEventListener('click',()=>{nav.classList.toggle('nav-active');navLinks.forEach((link,index)=>{if(link.style.animation){link.style.animation='';}else{link.style.animation=`navLinkFade 0.5s ease forwards ${index / 7 + 0.7}s`;}});burger.classList.toggle('toggle');});}
navSlide();(function($){"use strict";$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:(target.offset().top-57)},1000,"easeInOutExpo");return false;}}});$('.js-scroll-trigger').click(function(){$('.navbar-collapse').collapse('hide');});$('body').scrollspy({target:'#mainNav',offset:57});var navbarCollapse=function(){if($("#mainNav").offset().top>100){$("#mainNav").addClass("navbar-shrink");}else{$("#mainNav").removeClass("navbar-shrink");}};navbarCollapse();$(window).scroll(navbarCollapse);$('.popup-gallery').magnificPopup({delegate:'a',type:'image',tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:true,navigateByImgClick:true,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.'}});})(jQuery);