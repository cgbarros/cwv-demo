<html>
  <head>
    <title>LCP - Medium</title>
  </head>
  <body>
    <h1>Chicken on a leash</h1>
    
    <p>This is an amazing product. Look at it:</p>

    <div id="placeholder">
    </div>

    <p>Buy one now!</p>
    
    <p>
      <a href="index.php">Back to index</a>
    </p>

   <script>
    var myImg = document.createElement('img')
    myImg.src = "img/chicken_leash.jpg"
    myImg.alt = "Chicken leash"

   // setTimeout(<function>,<delay in ms>)

   setTimeout(
     function(){
      document
       .querySelector('#placeholder')
       .append(myImg)
     },
     3000
   )

   </script>

  </body>
</html>