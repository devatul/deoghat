<!DOCTYPE html5>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        var i=0;
        var sr=["img/WP_20150920_006.jpg","img/WP_20150920_007.jpg","img/WP_20150920_008.jpg"];
        function banner_img()
        {
            document.getElementById("chg").src=sr[i];
            if(i<2)
            i++;
            else
            i=0;
            etTimeout("banner_img()",10000);
        };
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="dist/favicon.ico">
<link href="dist/app.9b5e6902e215989ea47b208537fc2633.css" rel="stylesheet">
</head>

<body>
<!--Navigation part of the site-->
<div class="top">
  <div id="ab" class="block-display transition"></div>
  <span id="bt"><i class="fa fa-expand" aria-hidden="true"></i></span>
</div>
    <div id="menu">
    <div id="logo"><img src="img/logo.jpg" alt="Logo Image" style="width:300px; height:101px"/></div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="imageslidermaker/example.html">About</a></li>
            <li><a href="#">History</a>
                <ul class="list">
                    <li><a href="#">2014</a></li>
                    <li><a href="#">2015</a></li>
                    <li><a href="#">2016</a></li>
                    <li><a href="#">2017</a></li>
                    <li><a href="#">2018</a></li>
                </ul>
            </li>
            <li><a href="gallery.php">gallery</a></li>
            <li><a href="#">Forum</a></li>
        </ul>
    </nav>
    </div>


<div style="float:left; order:1px solid red; width:100%">
  <div class="top">
    <div id="side" class="side-block transition"></div>
    <span id="side-btn"><i class="fa fa-cogs" aria-hidden="true"></i></span>
  </div>
	<!-- <div class="banner" >
	 <div class="ism-slider" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/_u/1445774269070_370219.jpg">
      <div class="ism-caption ism-caption-0" data-delay='900'>India Gate Carnival of 1965 War: Lal Bahadur Shastri </div>
    </li>
    <li>
    <a href="" target="_blank">
      <img src="ism/image/slides/_u/1445774269070_370219.jpg">
      <div class="ism-caption ism-caption-0">Me With Lal Bahadur shashtri</div>
    </a>
    </li>
    <li>
      <img src="ism/image/slides/_u/1445774386081_710462.jpg">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
    <li>
      <img src="ism/image/slides/_u/1445774342703_358491.jpg">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
    <li>
      <img src="ism/image/slides/_u/1445774422685_207279.jpg">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
  </ol>
	</div>
</div> -->
  <div class="leftMenu">
    <div class="row">
        <div id="myApp"></div>
    </div>
  </div>
  <div class="wrapper">
  	<div class="col-xs-12" style="height:100%">
      <div class="form-container">
        <form onsubmit="submitmsg(); return false;">
          <div class="form-group">
            <input type="text" class="form-control" id="msg" placeholder="submit your msg">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="rightMenu"><a href="dist/index.html">go to react</a></div>
</div>
<script src="bundle.js" type="text/javascript"></script>
<script type="text/javascript" src="dist/vendor.6c2ea3c8636adc634dd5.js"></script>
<script type="text/javascript" src="dist/app.ee0d021b8bb22be2f5f4.js"></script>
<script>
function submitmsg(){
  alert('You submited : '+$("#msg").val());
}

  $("#bt").click(function(){
    console.log('--------------------',$('#ab')[0].classList);
    //$("#ab").toggle();
    $('#ab')[0].classList.toggle('block-display');
    $('#ab')[0].classList.toggle('block-display1');
  })
  $("#side-btn").click(function(){
    console.log('--------------------',$('#side')[0].classList);
    //$("#ab").toggle();
    $('#side')[0].classList.toggle('side-block');
    $('#side')[0].classList.toggle('side-block1');
  })

</script>
</body>
</html>
