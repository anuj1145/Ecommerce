<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="{{asset('public/themes/less/simplex.less')}}">
	<link rel="stylesheet/less" type="text/css" href="{{asset('public/themes/less/classified.less')}}">
	<link rel="stylesheet/less" type="text/css" href="{{asset('public/themes/less/amelia.less')}}">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="{{asset('public/themes/less/bootshop.less')}}">
	<script src="{{asset('public/themes/js/less.js')}}" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{asset('public/themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{asset('public/themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{asset('public/themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{asset('public/themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('public/themes/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
	<style type="text/css" id="enject"></style>
  </head>
<body>
@include('front.layout.header')
@yield('slider')
<div id="mainBody">
	<div class="container">
	<div class="row">
@yield('content')
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
@include('front.layout.footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{asset('public/themes/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/themes/js/google-code-prettify/prettify.js')}}"></script>
	
	<script src="{{asset('public/themes/js/bootshop.js')}}"></script>
    <script src="{{asset('public/themes/js/jquery.lightbox-0.5.js')}}"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="{{asset('public/themes/switch/themeswitch.css')}}" type="text/css" media="screen" />
<script src="{{asset('public/themes/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="{{asset('public/themes/css/#')}}" name="bootshop"><img src="{{asset('public/themes/switch/images/clr/bootshop.png')}}" alt="bootstrap business templates" class="active"></a>
	<a href="{{asset('public/themes/css/#')}}" name="businessltd"><img src="{{asset('public/themes/switch/images/clr/businessltd.png')}}" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="{{asset('public/themes/css/#')}}" name="amelia" title="Amelia"><img src="{{asset('public/themes/switch/images/clr/amelia.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="spruce" title="Spruce"><img src="{{asset('public/themes/switch/images/clr/spruce.png')}}" alt="bootstrap business templates" ></a>
		<a href="{{asset('public/themes/css/#')}}" name="superhero" title="Superhero"><img src="{{asset('public/themes/switch/images/clr/superhero.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="cyborg"><img src="{{asset('public/themes/switch/images/clr/cyborg.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="cerulean"><img src="{{asset('public/themes/switch/images/clr/cerulean.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="journal"><img src="{{asset('public/themes/switch/images/clr/journal.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="readable"><img src="{{asset('public/themes/switch/images/clr/readable.png')}}" alt="bootstrap business templates"></a>	
		<a href="{{asset('public/themes/css/#')}}" name="simplex"><img src="{{asset('public/themes/switch/images/clr/simplex.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="slate"><img src="{{asset('public/themes/switch/images/clr/slate.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="spacelab"><img src="{{asset('public/themes/switch/images/clr/spacelab.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="united"><img src="{{asset('public/themes/switch/images/clr/united.png')}}" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="{{asset('public/themes/css/#')}}" name="pattern1"><img src="{{asset('public/themes/switch/images/pattern/pattern1.png')}}" alt="bootstrap business templates" class="active"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern2"><img src="{{asset('public/themes/switch/images/pattern/pattern2.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern3"><img src="{{asset('public/themes/switch/images/pattern/pattern3.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern4"><img src="{{asset('public/themes/switch/images/pattern/pattern4.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern5"><img src="{{asset('public/themes/switch/images/pattern/pattern5.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern6"><img src="{{asset('public/themes/switch/images/pattern/pattern6.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern7"><img src="{{asset('public/themes/switch/images/pattern/pattern7.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern8"><img src="{{asset('public/themes/switch/images/pattern/pattern8.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern9"><img src="{{asset('public/themes/switch/images/pattern/pattern9.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern10"><img src="{{asset('public/themes/switch/images/pattern/pattern10.png')}}" alt="bootstrap business templates"></a>
		
		<a href="{{asset('public/themes/css/#')}}" name="pattern11"><img src="{{asset('public/themes/switch/images/pattern/pattern11.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern12"><img src="{{asset('public/themes/switch/images/pattern/pattern12.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern13"><img src="{{asset('public/themes/switch/images/pattern/pattern13.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern14"><img src="{{asset('public/themes/switch/images/pattern/pattern14.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern15"><img src="{{asset('public/themes/switch/images/pattern/pattern15.png')}}" alt="bootstrap business templates"></a>
		
		<a href="{{asset('public/themes/css/#')}}" name="pattern16"><img src="{{asset('public/themes/switch/images/pattern/pattern16.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern17"><img src="{{asset('public/themes/switch/images/pattern/pattern17.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern18"><img src="{{asset('public/themes/switch/images/pattern/pattern18.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern19"><img src="{{asset('public/themes/switch/images/pattern/pattern19.png')}}" alt="bootstrap business templates"></a>
		<a href="{{asset('public/themes/css/#')}}" name="pattern20"><img src="{{asset('public/themes/switch/images/pattern/pattern20.png')}}" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>