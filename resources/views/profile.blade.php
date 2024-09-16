

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">




<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<h1>BOSS !!!!</h1>
<h3>Boss kamusta buhay buhay?</h3>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://i.ytimg.com/vi/epcC23SjYAo/maxresdefault.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Boss</h1> 
      <p>Architect & Engineer</p> 
      <p>kupal</p>
    </div>
  </div>
</div>
<br><br>
<button class="active"><a href="{{route('home')}}">Back</a></button>
</body>
</html>
