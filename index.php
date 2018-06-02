
<html>
<head>
    <title>Horse</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="gallery.css" rel="stylesheet" type="text/css">
    <link href="menu.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header>
        
    <div class="row">
        <div class="logo">
         <img src="images/logo.png">
    </div>
            
    
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.html">HOME</a>
    <a href="‪aboutus.html">About</a>
    <a href="create.html">Create</a>
    <a href="index.html">Contact</a>
  </div>


    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>  
        
   
        
    <div class="hero">

    <h1>I would travel only by horse, if I had the choice.</h1>
        
    <div class="button">
        <a href="" class="btn btn-one"> Watch photo</a>
        <a href="C:\Users\Asus\Desktop\ДЕЛАЙ\addpage.html" class="btn btn-two"> Gallery</a>    
    </div>    
            
    </div>
    
    </header>

      <div class="slideshow-container">
     	<div class="mySlides fade">
     		<div class="numbertext">1/3</div>
     	 <img src="images/p3.jpg" style="width:50%" alt="">
     	 <div class="text"></div>
     	</div> 

     	<div class="mySlides fade">
     		<div class="numbertext">2/3</div>
     	 	<img src="images/p4.jpg" style="width:50%" alt="">
     	 	<div class="text"></div>
     	</div>
     	<div class="mySlides fade">
     		 <div class="numbertext">3/3</div>
     		 <img src="images/horsered.jpg" style="width:100%" alt="">
     		 <div class="text"></div>
     	
     	<a class="prev" onclick="plusSlides(-1)">&#10094</a>
     	<a class="next" onclick="plusSlides(1)">&#10095</a>
     </div>
     <br>

     <div style="text-align: center;">
	      <span class="dot" onclick="currentSlide(1)"></span>

	      <span class="dot" onclick="currentSlide(2)"></span>
      </div>
        
      <div class="container">

			<div class="block1">
      <?php
        $link = mysqli_connect("127.0.0.1", "root", "", "web_horses");
        $sql="SELECT * FROM horses";
        $result=mysqli_query($link,$sql);
        // Numeric array
        $items=mysqli_fetch_all($result,MYSQLI_ASSOC);

            foreach ($items as $item) {
              echo '<div class="block1__item">
          <img class="horimg" src="../' . $item["photoUrl"] . '" alt="Sale" width="310px">
          <h3>' . $item["name"] .'</h3>
          <h3 class="text1">'.$item["description"].'</h3> </div>';
            }




        mysqli_close($link);

        ?>
				


				<div class="block4">
				<h2><em>Bosnian Mountain Horseе</em></h2>
				<div class="block1__item">
					<img src="images/horse2.jpg" alt="Bestsellers" width="310px">
					
				</div>
			</div>
		
	</section>
     <footer>
  <div><p class="get_know"> HORSE <br> Better then car</p>
  </div>
  <div class="Stores">
  
  <hr>
  <p class="shop1">
     Francois Street<br> 
     French<br>
     Tel: 123-456-7890
  </p>
  <p class="shop2">
    M. Valéry FRONTERE<br> 
    Immeuble Dumeilleur
   31 avenue du général Leclerc<br>
    Tel: 123-456-7890
  </p>
</div>
<div class="hourse">
  
  <hr>
  <p class="Hourse">
    Mon - Fri: 8am - 8pm<br>
    ​​Saturday: 9am - 9pm<br>
    ​​</p>
</div>
</footer>
<script>
    function process(responses){
      console.log(responses);
      let a = document.getElementsByClassName("horimg");
      let b = document.getElementsByClassName("text1");
       for(let i=0;i<b.length;i++){
          a[i].src = responses[i].image;
          b[i].innerHTML = responses[i].text;
       }
      }
    
    
    function onSuccess(response){
      response.json().then(process);
    }
    
    function onFail(response){}
    
    function call(event){
      fetch("https://demo1843804.mockable.io/index").then(onSuccess,onFail);
    }
    call();
</script>
<script src="sript.js"></script>
<script src="menu.js"></script>
</body>    
</html>
