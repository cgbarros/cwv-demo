<html>
  <head>
    <title>FID - Good</title>
  </head>
  <body>
    <h1>Interactive button</h1>
    
    <p>Click on the button to see an amazing image!</p>

    <button id="imgAppear">Click Me!</button>

    <div id="placeholder">
    </div>
    
    <p>
      <a href="index.php">Back to index</a>
    </p>
    
    <!-- 
      <img src="img/my_image.jpg" alt="Content of the image">
    -->

    <script>
      document
        .querySelector('#imgAppear')
        .addEventListener('click', fid, {once: true})

      function fid(){
        var myImg = document.createElement('img')
        myImg.src = "img/mineirinho.jpeg"
        myImg.alt = "Mineirinho Ultra Adventures"

        document.querySelector('#placeholder').append(myImg)
      }
    </script>
  </body>
</html>