<style>
  html, body {
  font-family: 'Source Sans Pro', sans-serif;
  text-transform: uppercase;
  background: url('bg_trn.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: #fff;
  text-align: center;

 
}

.btn p {
   font-size: 14px;
}

p#or {
   font-size: 10px;
}

a {
   text-decoration: none;
   color: inherit;
}


* {
   box-sizing: border-box;   
}

div.row {
   padding: 10px 0;
   width: 100%;
   margin: 0 auto;
}

.btn,
p {
   display: inline-block;
   vertical-align: middle;
}

.btn {
   position: relative;
   width: 240px;
   height: 60px;
   margin: 10px;
}

.btn p {
   width: 100%;
   height: 100%;
}

.btn a {
   display: block;
   width: 100%;
   height: 60px;
}

.btn span {
   display: block;
   width: 100%;
   height: 60px;
   padding-top: 23px;
}

p#or {
    margin: 0 14px ;
  color: rgba(50,50,50,1);
  text-align: center;
  text-shadow: 
    1px 0px 0px rgba(35, 231, 214, 1),
    -1px 0px 0px rgba(210, 17, 50, 1);
  font-family: 'Ubuntu Condensed', sans-serif;
  font-size: 15px;
}


h1 {
  margin: 50px 0 0 0;
  color: rgba(50,50,50,1);
  text-align: center;
  text-shadow: 
    1px 0px 0px rgba(35, 231, 214, 1),
    -1px 0px 0px rgba(210, 17, 50, 1);
  font-family: 'Ubuntu Condensed', sans-serif;
  font-size: 60px;
}
.animation {
  text-align: center;
  text-transform: uppercase;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 50px;
  letter-spacing: 1px;
  color: #fff;
  display: inline-block;
  animation: fadeIn 1.5s forwards;
  opacity: 0;
  transition-timing-function: cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

.first {
  display: inline-block;
  animation: firstSpan 1.5s forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
  color: rgba(50,50,50,1);
  z-index: 1;
  position: relative;
  font-family: 'Ubuntu Condensed', sans-serif;
  font-size: 60px;
}

.oh {
  display: inline-flex;
  overflow: hidden;
}

.second {
  animation: secondSpan 1.5s forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
 
  z-index: -1;
  display: inline-block;
  color: rgba(50,50,50,1);
  font-family: 'Ubuntu Condensed', sans-serif;
  font-size: 60px;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: scale(1);
  } 
  50% {
    opacity: 1;
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes firstSpan {
  0% {
    transform: translateX(50%);
  }
  60% {
    transform: translateX(50%);
  }
  100% {
    transform: translateX(0%);
  }
}

@keyframes secondSpan {
  0% {
    transform: translateX(-100%);
  }
  60% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(-0%);
  }
}


/* Button resets and style */
button {
  margin: 15px auto;
  font-family: "Source Code Pro";
  font-size: 20px;
  color: #ffffff;
  cursor: pointer;
  border-radius: 100px;
  padding: 15px 20px;
  border: 0px solid #000;   
  align-items: center;
  justify-content: center;
  }

button.pulse-button {
  animation: borderPulse 1000ms infinite ease-out, colorShift 10000ms infinite ease-in;
}

button.pulse-button-hover {
  animation: colorShift 10000ms infinite ease-in;
}

button:hover,
button:focus {
  animation: borderPulse 1000ms infinite ease-out, colorShift 10000ms infinite ease-in, hoverShine 200ms;
}

@keyframes colorShift {
  0%, 100% {
      background: #0045e6;
  }
  33% {
    background: #fb3e3e;
  }
  66%{
    background: #0dcc00;
  }
}

@keyframes borderPulse {
  0% {
    box-shadow: inset 0px 0px 0px 5px rgba(255, 255, 255,.4), 0px 0px 0px 0px rgba(255,255,255,1);
  }
  100% {
    box-shadow: inset 0px 0px 0px 3px rgba(117, 117, 255,.2), 0px 0px 0px 10px rgba(255,255,255,0);
  }
}


@keyframes hoverShine {
  0%{
    background-image: linear-gradient(135deg, rgba(255,255,255,.4) 0%, rgba(255,255,255,0) 50%, rgba(255,255,255,0) 100%);
  }
  50%{
    background-image: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,.4) 50%, rgba(255,255,255,0) 100%);
  }
  100%{
    background-image: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 50%, rgba(255,255,255,.4) 100%);
  }
  }


</style>
<html lang="en" class="notranslate">
<body>
<div class="row">
<h1>
      <div class="animation">
        <span class="first">TRAINING</span> 
        <span class="oh">
          <span class="second">CLASSROOM</span>
        </span>
      </div>
    </h1>
    <div class="animation">
        <button class="pulse-button"><a href="index.php">PRE TEST</a></button>
      <p id="or">or</p>
        <button class="pulse-button"><a href="">RECORD TRAINING</a></button>
    </div>

    
</div>
</body>
</html>
