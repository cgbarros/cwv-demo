<html>
  <head>
    <title>CLS - Why are you not clicking on the thing?</title>
		<style>
		 #placeholder {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  grid-auto-rows: minmax(100px, auto);
}
		</style>
  </head>
  <body>
    <h1>Click on the thing!</h1>
    
    <p>Click in the image below</p>

    <div id="placeholder">
		<?php
		  for ($i = 0; $i < 15; $i++){
				$imgNum = sprintf("%02d", $i+1);
				echo "<img src='https://www.imagenspng.com.br/wp-content/uploads/2020/02/emoji-png-$imgNum.png' alt='Suspicious'>\n";
			}
		 ?>
     <img src="http://www.skybondsor.com/wp-content/uploads/2011/08/click-me.png" id="clickme">
    </div>
    
    <p>
      <a href="index.php">Back to index</a>
    </p>
		<script>
	  	document
       .querySelector('#clickme') // fetch the img
       .addEventListener('click',clicked) // run the function "clicked" when we click on it

      // show an alert when run
      function clicked(){
       window.alert('You did it!')
      }
    </script>
  </body>
</html>