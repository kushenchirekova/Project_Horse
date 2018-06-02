var slideIndex = 1;
     	showSlides(slideIndex);

     	function plusSlides(n){
     		showSlides (slideindex += n);
          }

          function currentSlide(n){
               showSlides (n);
          }

          function showSlides(n){
               var i;
               var slides = document.getElementsByClassName("mySlides");
               var dots = document.getElementsByClassName("dot");

               if (n > slides.length-1){
                    slideIndex =0;
               }else if (n < 0){
                    slideIndex=slides.length
               }else{
                  slideIndex = n
               }
               for (var i =0;i<slides.length; i++) {
                   slides[i].style.display="none";
               }
               for (var i = 0; i<dots.length; i++) {
                    dots[i].className= dots[i].className.replace("active","");
               }
               console.log(slides[slideIndex])
               slides[slideIndex-1].style.display = "block";
               dots[slideIndex-1].className+= " active";
           }

         


 
