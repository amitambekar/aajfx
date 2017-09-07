<!DOCTYPE html>
<html>
<script src="jquery-1.11.0.min.js"></script>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('forex.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    text-align: center;
    margin-left: 9%;
    margin-top: 4%;
    /*position: absolute;
    top: 30%;
    left: 30%;
    transform: translate(-50%, -50%);
    text-align: center;*/
}

hr {
    margin: auto;
    width: 40%;
}

.watch
{
    width:200px;
    height: 200px;
    float:left;
    margin-right:10px;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
  </div>
  <div class="middle">
    <h1>COMING SOON AAJFX</h1>
    <div class="watch">
        <iframe src="canvas1.html?timezone=+5.5"></iframe>   
        <span>India</span>
    </div>
    <div class="watch">
        <iframe src="canvas1.html?timezone=-4"></iframe>
        <span>New York</span>
    </div>
    <div class="watch">
        <iframe src="canvas1.html?timezone=+1"></iframe>
        <span>London</span>
    </div>
    <div class="watch">
        <iframe src="canvas1.html?timezone=+3"></iframe>
        <span>Moscow</span>
    </div>
    <div class="watch">
        <iframe src="canvas1.html?timezone=+9"></iframe>   
        <span>Tokyo</span>
    </div>
    
  </div>
  <div class="bottomleft"><h1 style="margin-left: 26%;margin-top: 100px;">FOREX BROKER</h1></div>
</div>
</body>
<script>
//width="200" height="200" frameBorder="0" scrolling="no"
$('iframe').attr('width',200);
$('iframe').attr('height',200);
$('iframe').attr('frameBorder',0);
$('iframe').attr('scrolling','No');
</script>
</html>