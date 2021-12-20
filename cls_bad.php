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

function sleep(ms){
  return new Promise(resolve => setTimeout(resolve, ms))
}

async function cls(){
  
  var row = 1
  var column = 1
  
  for(let i = 0;i < 20;i++){
    await sleep(500);
    var myImg = document.createElement('img')
    myImg.src = "https://i.imgur.com/xoLaWUa.jpg"
    myImg.alt = "Suspicious"

    var myDiv = document.createElement('div')
    myDiv.id = "mydiv"+i
    myDiv.style['grid-row'] = row
    myDiv.style['grid-column'] = column
    myDiv.append(myImg)

    document
      .querySelector('#placeholder')
      .append(myDiv)
    
    if(column == 4){
      column = 1
      row++
    } else {
      column++
    }
    
  }
}

cls();
		</script>
  </body>
</html>