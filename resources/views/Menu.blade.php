 @extends('layouts.main')
 
 
 
 @section('container')

	   <link rel="stylesheet" href="style2.css">
	  
	  <fieldset>
  <label style="burger.png">
    <input type="radio" name="images" value="Fiddle Leaf">
  </label>
  <!--<label style="--_img: url(https://assets.codepen.io/2585/pink-princess.jpeg)">-->
  <label style="--_img: url(Menuimages/1.png)">
    <input type="radio" name="images" value="Pink Princess">
  </label>
  <label style="--_img: url(Menuimages/2.png)">
    <input type="radio" name="images" value="Monstera" checked>
  </label>
  <label style="--_img: url(Menuimages/3.png)">
    <input type="radio" name="images" value="Pothos">
  </label>
  <label style="--_img: url(Menuimages/4.png)">
    <input type="radio" name="images" value="Rubber Tree">
  </label>
</fieldset>
	  
    
	 
	 
	 
	 
 @endsection

