$(document).ready(function () {

    /*        
   --------------- Animate Nav Bar Size on Scroll  -----------------
   */

   var scrollTop           = 0,
   logo                    = $('.logo-container')
   bDarkBlue               = $('#b-dark-blue'),
   eDarkBlue               = $('#e-dark-blue'),
   hDarkBlue               = $('#h-dark-blue'),
   iDarkBlue               = $('#i-dark-blue'),
   lightBlueDot            = $('#light-blue-dot'),
   nDarkBlue               = $('#n-dark-blue'),
   dDarkBlue               = $('#d-dark-blue'),
   plightBlue              = $('#p-light-blue'),
   iligthBlue              = $('#i-light-blue')
   darkBlueDot             = $('#dark-blue-dot'),
   xLightBlue              = $('#x-light-blue'),
   eLightBlue              = $('#e-light-blue'), 
   lLightBlue              = $('#l-light-blue'),
   sLightBlue              = $('#s-light-blue');

   $(window).scroll(function () {
       scrollTop = $(window).scrollTop();

       if (scrollTop > 200) {
           // $('.nav-bar').css('background-color', '#f5f5f5');
           $('.nav-bar').css('box-shadow', '0 30px 50px -16px rgba(0, 0, 0, .29)');
       }

       if (scrollTop < 200) {
           // $('.nav-bar').css('background-color', '#fff');
           $('.nav-bar').css('box-shadow', '0 4px 13px 0 rgba(0, 0, 0, 0');

       }

   });

    /*        
   --------------- Contact us form  -----------------
   */
   var sendContactUsFormButton     = $('#submit-contact-us'),
       mailSentModal               = $('#mail-sent-modal');

   // Handle Contact us form email sent event
   var requestContactUsElm = document.querySelector( '#wpcf7-f91-o1' );
   // Verify element exist
   if (requestContactUsElm) {
   requestContactUsElm.addEventListener( 'wpcf7mailsent', function( event ) {
       animateContactUsForm();
   }, false );
   };

   function animateContactUsForm(){
   // load spinner  
   sendContactUsFormButton.html('');
   sendContactUsFormButton.append("<div class='loading-spinner'></div>"); 
   // wait for 1.5 sec
   setTimeout(function(){
       $('body').css('overflow', 'hidden');
       // Show Mail Sent Modal
       sendContactUsFormButton.html('SEND');
       mailSentModal.fadeIn(700);
   }, 1500);
   }

    /*        
   --------------- Animate BehindPixels Logo  -----------------
   */

 logo.mouseenter(function(){    
   bDarkBlue.css('transform', 'translateX(0px)');
   
   eDarkBlue.css('transform', 'translateX(0px)');        
   eDarkBlue.css('opacity', '1');

   hDarkBlue.css('transform', 'translateX(0px)');            
   hDarkBlue.css('opacity', '1');

   iDarkBlue.css('transform', 'translateX(0px)');            
   iDarkBlue.css('opacity', '1');

   lightBlueDot.css('transform', 'translateY(0px)');
   lightBlueDot.css('opacity', '1');
   lightBlueDot.css('fill', '#2391B9');

   nDarkBlue.css('transform', 'translateX(0px)');            
   nDarkBlue.css('opacity', '1');

   dDarkBlue.css('transform', 'translateY(0px)');            
   dDarkBlue.css('opacity', '1');

   plightBlue.css('transform','translateX(0px)');

   iligthBlue.css('transform', 'translateY(0px)');
   iligthBlue.css('opacity', '1');

   darkBlueDot.css('transform', 'translateY(0px)');
   darkBlueDot.css('opacity', '1');
   darkBlueDot.css('fill', '#0D6182');

   eLightBlue.css('transform', 'translateX(0px)');            
   eLightBlue.css('opacity', '1');

   lLightBlue.css('transform', 'translateX(0px)');            
   lLightBlue.css('opacity', '1');

   sLightBlue.css('transform', 'translateX(0px)');            
   sLightBlue.css('opacity', '1');

   xLightBlue.css('transform', 'translateX(0px)');            
   xLightBlue.css('opacity', '1');
   
 })
 
  logo.mouseleave(function(){     

   bDarkBlue.css('transform','translateX(75px)');

   eDarkBlue.css('transform', 'translateX(10px)');    
   eDarkBlue.css('opacity', '0');

   hDarkBlue.css('opacity', '0');
   hDarkBlue.css('transform', 'translateX(10px)');
   
   iDarkBlue.css('transform', 'translateX(10px)');            
   iDarkBlue.css('opacity', '0');

   lightBlueDot.css('transform', 'translateY(40px)');
   lightBlueDot.css('opacity', '0');
   lightBlueDot.css('fill', '#0D6182');

   nDarkBlue.css('transform', 'translateX(10px)');            
   nDarkBlue.css('opacity', '0');

   dDarkBlue.css('transform', 'translateY(10px)');            
   dDarkBlue.css('opacity', '0');

   plightBlue.css('transform','translateX(-12px)');
   
   iligthBlue.css('transform', 'translateY(10px)');
   iligthBlue.css('opacity', '0');

   darkBlueDot.css('transform', 'translateY(40px)');
   darkBlueDot.css('opacity', '0');
   darkBlueDot.css('fill', '#0D6182');

   eLightBlue.css('transform', 'translateX(-20px)');            
   eLightBlue.css('opacity', '0');

   lLightBlue.css('transform', 'translateX(-20px)');            
   lLightBlue.css('opacity', '0');

   sLightBlue.css('transform', 'translateX(-20px)');            
   sLightBlue.css('opacity', '0');

   xLightBlue.css('transform', 'translateX(-20px)');            
   xLightBlue.css('opacity', '0');
 })

   // End Document Ready
})