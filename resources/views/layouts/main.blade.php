<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KFC Landing Page | Responsive Design</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="main">
    @include('partial.navbar')
    <div class="content">
		@yield('container')
    </div>

    <div class="footer">
      <ul class="sci">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
	  @if($title=="Home")
      <div class="prevNext">
        <p>Always Fresh</p>
        <span class="prev"><ion-icon name="chevron-back-outline"></ion-icon></span>
        <span class="next"><ion-icon name="chevron-forward-outline"></ion-icon></span>
      </div>
	  
	  @endif
	  
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    //toggle 
    const menutoggle = document.querySelector('.toggle');
    const navigation = document.querySelector('.navigation');
    menutoggle.onclick = function(){
      menutoggle.classList.toggle('active')
      navigation.classList.toggle('active')
    }

    //slider
    const slides = document.querySelectorAll('.slides');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    i = 0;
    
    function ActiveSlide(n){
      for(slide of slides)
      slide.classList.remove('active');
      slides[n].classList.add('active');
    }

    // function for next btn
    next.addEventListener('click', function(){
      if(i == slides.length - 1){
        i = 0;
        ActiveSlide(i);
      }
      else 
      {
        i++;
        ActiveSlide(i);
      }
    })

     // function for prev btn
     prev.addEventListener('click', function(){
      if(i == 0){
        i = slides.length - 1;
        ActiveSlide(i);
      }
      else 
      {
        i--;
        ActiveSlide(i);
      }
    })
  </script>
</body>
</html>