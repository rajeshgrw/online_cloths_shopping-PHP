
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>HomePage</title>

  <meta name="robots" content="noindex">

  <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/oliviale/pen/bOWqbj">

  <link href="https://fonts.googleapis.com/css?family=Poppins:900|Quicksand:300,500" rel="stylesheet">

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <style id="INLINE_PEN_STYLESHEET_ID">
a
{
text-decoration: none;
color: inherit;
}
    * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: faf5f6;
  font-family: "Quicksand", sans-serif;
  color: #333;
}

aside.context {
  text-align: center;
  color: #333;
  line-height: 1.7;
}
aside.context a {
  text-decoration: none;
  color: #333;
  padding: 3px 0;
  border-bottom: 1px dashed;
}
aside.context .explanation {
  max-width: 700px;
  margin: 4em auto 0;
}

footer {
  text-align: center;
  margin: 3em auto;
  width: 100%;
}
footer a {
  text-decoration: none;
  display: inline-block;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background: transparent;
  border: 1px dashed #333;
  color: #333;
  margin: 5px;
}
footer a:hover {
  background: rgba(255, 255, 255, 0.1);
}
footer a .icons {
  margin-top: 12px;
  display: inline-block;
  font-size: 20px;
}

h1 {
  width: 100%;
  margin: 3em auto 1.5em;
  font-size: 40px;
  text-align: center;
}
h1 small {
  text-transform: none;
  display: block;
  margin: 20px 0;
  font: 300 20px "QuickSand", sans-serif;
  color: #999;
}

h4 {
  width: 100%;
  margin: 2em auto 0;
  font-size: 20px;
  text-align: center;
}
h4 small {
  text-transform: uppercase;
  display: block;
  margin: 10px 0;
  font: 300 15px "QuickSand", sans-serif;
  color: #999;
}

.main-content {
  display: flex;
  flex-wrap: wrap;
  margin: 3em auto 0;
  max-width: 1000px;
  justify-content: space-around;
  align-items: center;
}

.palette__wrapper {
  flex: 1;
  padding: 20px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.palette {
  width: 200px;
  height: 200px;
  position: relative;
  display: inline-block;
  perspective: 800px;
}
.palette__cover {
  border-radius: 6px;
  width: inherit;
  height: inherit;
  position: absolute;
  top: 0;
  z-index: 2;
  transition: 0.3s ease;
  transform-origin: top left;
  font: 900 28px/0.9 "Poppins", sans-serif;
  text-transform: uppercase;
  color: #fff;
  overflow: hidden;
}
.palette__cover__border {
  width: 80%;
  height: 80%;
  border: 7px solid #fff;
  margin: 10%;
}
.palette__cover span {
  display: inline-block;
  position: absolute;
  bottom: 7.5px;
  left: 10px;
  padding: 10px;
  max-width: 50%;
}
.palette__cover__top {
  position: absolute;
  left: 0;
  width: calc(100% + 64px);
  margin-left: -32px;
  z-index: 4;
  border-radius: 3px 3px 4px 4px;
  opacity: 0;
}
.palette__base {
  background: #222;
  width: inherit;
  height: inherit;
  position: absolute;
  top: 0;
  border-radius: 8px;
  padding: 15px;
  grid-gap: 8px;
}
.palette:hover .palette__cover {
  transform: rotateX(78deg);
}
.palette:hover .palette__cover__top {
  animation: startTransition 0.17s forwards 0.1s;
}

@keyframes startTransition {
  0% {
    opacity: 0;
    top: 200px;
    transform: scale(0.5);
    height: 0;
  }
  40% {
    opacity: 1;
  }
  100% {
    top: 22px;
    opacity: 1;
    transform: scale(1);
    height: 15px;
    box-shadow: 0 5px 10px -2px rgba(0, 0, 0, 0.2);
  }
}
.palette__shade {
  border-radius: 4px;
  box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.9);
}

.palette--one .palette__base {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
}
.palette--one .palette__shade:nth-child(1) {
  grid-row: 1/span 2;
  grid-column: 2/span 1;
  margin: 20px 0;
  background: #fadc89;
}
.palette--one .palette__shade:nth-child(2) {
  background: #fce95b;
}
.palette--one .palette__shade:nth-child(3) {
  background: #ffd03a;
}
.palette--one .palette__shade:nth-child(4) {
  background: #fde008;
}
.palette--one .palette__shade:nth-child(5) {
  background: #fec309;
}
.palette--one .palette__cover {
  background: #ffc303;
}
.palette--one .palette__cover__top {
  background: #ecb404;
}
.palette--one .palette__cover span {
  max-width: 50%;
  background: #ffc303;
}

.palette--two .palette__base {
  display: grid;
  grid-gap: 12px;
  justify-self: center;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
}
.palette--two .palette__cover {
  background: #ee4266;
}
.palette--two .palette__cover__top {
  background: #e23a5d;
}
.palette--two .palette__cover span {
  max-width: 62%;
  background: #ee4266;
}
.palette--two .palette__shade:nth-child(1) {
  background: #ee898d;
}
.palette--two .palette__shade:nth-child(2) {
  background: #ec6b73;
}
.palette--two .palette__shade:nth-child(3) {
  background: #d25980;
}
.palette--two .palette__shade:nth-child(4) {
  background: #c24d88;
}

.palette--three .palette__cover {
  background: #0075c4;
}
.palette--three .palette__cover__top {
  background: #016cb4;
}
.palette--three .palette__cover span {
  max-width: 48%;
  background: #0075c4;
}
.palette--three .palette__base {
  display: grid;
  grid-gap: 8px;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(4, 1fr);
}
.palette--three .palette__shade:nth-child(1) {
  grid-row: 1/span 2;
  grid-column: 1/span 2;
  background: #93dfe3;
}
.palette--three .palette__shade:nth-child(2) {
  grid-row: 3/span 2;
  background: #01c0f3;
}
.palette--three .palette__shade:nth-child(3) {
  grid-row: 1/span 2;
  grid-column: 3/span 2;
  background: #21d0e5;
}
.palette--three .palette__shade:nth-child(4) {
  grid-row: 3/span 2;
  grid-column-start: 4;
  background: #00aae7;
}
.palette--three .palette__shade:nth-child(6) {
  background: #69b3cd;
}
.palette--three .palette__shade:nth-child(5) {
  background: #4ad1eb;
}
.palette--three .palette__shade:nth-child(8) {
  background: #0983d5;
}
.palette--three .palette__shade:nth-child(7) {
  background: #149ecb;
}

.palette--four .palette__base {
  display: grid;
  grid-template-columns: 50% auto;
  grid-template-rows: auto 20% 20%;
}
.palette--four .palette__shade:nth-child(1) {
  grid-row: 1/span 2;
  background: #bfbfbf;
}
.palette--four .palette__shade:nth-child(2) {
  grid-row: 3/span 1;
  background: #a1a1a1;
}
.palette--four .palette__shade:nth-child(3) {
  background: #717171;
}
.palette--four .palette__shade:nth-child(4) {
  background: #585858;
}
.palette--four .palette__shade:nth-child(5) {
  background: #cafc03;
}
.palette--four .palette__cover {
  background: #cafc03;
}
.palette--four .palette__cover__top {
  background: #cafc03;
}
.palette--four .palette__cover span {
  max-width: 59%;
  background: #cafc03;
}



.palette--five .palette__base {
  display: grid;
  grid-template-columns: 50% auto;
  grid-template-rows: auto 20% 20%;
}
.palette--five .palette__shade:nth-child(1) {
  grid-row: 1/span 2;
  background: #bfbfbf;
}
.palette--five .palette__shade:nth-child(2) {
  grid-row: 3/span 1;
  background: #a1a1a1;
}
.palette--five .palette__shade:nth-child(3) {
  background: #717171;
}
.palette--five .palette__shade:nth-child(4) {
  background: #585858;
}
.palette--five .palette__shade:nth-child(5) {
  background: #4b4b4b;
}
.palette--five .palette__cover {
  background: #2a2e45;
}
.palette--five .palette__cover__top {
  background: #171926;
}
.palette--five .palette__cover span {
  max-width: 59%;
  background: #2a2e45;
}

  </style>

  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-6d8bf8b4b479137260842506acbb12717dace0823c023e08b96360e60b0840d9.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
  
<h1>E-Garments Hicas<small>...</small></h1>
<div class="main-content">
  <div class="palette__wrapper">
    <div class="palette palette--one">
      <div class="palette__cover">
        <a href="customer/index.php"><div class="palette__cover__border"><span>Retail User</span></div></a>
      </div>
      <div class="palette__cover__top"></div>
      <div class="palette__base">
        <a href="customer/index.php"><div class="palette__shade"></div></a>
        <a href="customer/index.php"><div class="palette__shade"></div></a>
        <a href="customer/index.php"><div class="palette__shade"></div></a>
        <a href="customer/index.php"><div class="palette__shade"></div></a>
        <a href="customer/index.php"><div class="palette__shade"></div></a>
        <a href="customer/index.php"><div class="palette__shade"></div></a>
      </div>
    </div>
    <h4><a href="customer/index.php">Retail<small>User</small></a></h4>
  </div>

<div class="palette__wrapper">
    <div class="palette palette--four">
      <div class="palette__cover"> 
        <a href="customer/admin_area/index.php"><div class="palette__cover__border"><span>Retail Admin</span></div></a>
      </div>
      <div class="palette__cover__top"></div>
      <div class="palette__base">
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="customer/admin_area/index.php"><div class="palette__shade"></div></a>
      </div>
    </div>
    <h4><a href="customer/admin_area/index.php">Retail<small>Employee Admin</small></a></h4>
  </div>


  <div class="palette__wrapper">
    <div class="palette palette--two">
      <div class="palette__cover"> 
        <a href="wholesale/index.php"><div class="palette__cover__border"><span>Whole- sale User</span></div></a>
      </div>
      <div class="palette__cover__top"></div>
      <div class="palette__base">
        <a href="wholesale/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/index.php"><div class="palette__shade"></div></a>
      </div>
    </div>
    <h4><a href="wholesale/index.php">Wholesale<small>User</small></a></h4>
  </div>
  <div class="palette__wrapper">
    <div class="palette palette--three">
      <div class="palette__cover"> 
        <a href="wholesale/admin_area/index.php"><div class="palette__cover__border"><span>whole- sale admin</span></div></a>
      </div>
      <div class="palette__cover__top"></div>
      <div class="palette__base">
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="wholesale/admin_area/index.php"><div class="palette__shade"></div></a>
      </div>
    </div>
    <h4><a href="wholesale/admin_area/index.php">Wholesale<small>Employee Admin</small></a></h4>
  </div>
  

<div class="palette__wrapper">
    <div class="palette palette--five">
      <div class="palette__cover"> 
        <a href="admin/admin_area/index.php"><div class="palette__cover__border"><span>Sales Admin</span></div></a>
      </div>
      <div class="palette__cover__top"></div>
      <div class="palette__base">
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
        <a href="admin/admin_area/index.php"><div class="palette__shade"></div></a>
      </div>
    </div>
    <h4><a href="admin/admin_area/index.php">Sales<small>Admin</small></a></h4>
  </div>

</div>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</body>

</html>