@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
  <link rel="stylesheet" href="css/lightbox/lightbox.min.css">
 
<style>

.thumbnail
{
	display:inline-block;
	height: auto !important;
	min-height:auto !important;
}
.text-left {
	display:inline-block;
	text-align:left
}
ul.products li {
    width: 200px;
    display: inline-block;
    vertical-align: top;
    *display: inline;
    
}
/* CSS used here will be applied after bootstrap.css */

.productbox {
	position: relative;
	border: 1px solid #ddd;
	border-radius: 4px;
	-webkit-transition: all .2s ease-in-out; 
}
.caption {
	 
	background-color:rgba(0,0,0,0.7);
	position: absolute;
	bottom: -50px;
	width: 100%;
	max-height: 40%;
	overflow: hidden;
	font-size: 11px;
	color: #FFF;
}
 
.finalprice {
	font-size:15px;
	color: #AAFCAE;
}

h5 {
	margin-top: 0px;
	color: white;
	max-height: 30px;
	overflow: hidden;
}

.container {
	width: 100%;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  padding: 5px;
}
.btn-block {
margin-top: 5px;
}
.saleoffrate{
	position: absolute;
	top:10px;
	left: 10px;
	padding-top: 13px;
	text-align:center;
	background-color: rgba(76, 174, 76,0.8);
	color: #FFFFFF;
	border-radius: 50%;
	height: 50px;
	width: 50px;
	line-height: 13px;
}
/* @media (min-width: 384px) and (max-width: 768px) {*/
.img-responsive img{
	width: 100%; 

}
  .img-responsive{
      text-align: center;        
}  
/*}*/
</style>

<div class="col-md-12">
   <div class="box box-default">
      <div class="box-header with-border">
		<div class="container">
		    <div class="row float-left">
		    @foreach ($res as $prod)
				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-2">
					<div id="caption{{ $prod->id }}" class="productbox">
						<div class="thumbnail img-responsive">
							<a class="link" href="{{asset('/img/productos/big').'/'.$prod->foto }}" data-lightbox="link-{{ $prod->id }}"> 
								 <img class="img-responsive" data-lightbox="roadtrip" id="img{{ $prod->id }}" src="{{asset('/img/productos/big').'/'.$prod->foto }}" title="this image needs to be centered" alt="hola">
							</a>
						</div>
						<div id="caption{{ $prod->id }}x" class="caption">							 
							<h5>{{ ucfirst($prod->nombre_prod) }}</h5>
							<a href="{{asset('/img/productos/big').'/'.$prod->foto }}" id="zoom{{ $prod->id }}" class="link btn btn-default btn-xs pull-right" role="button" data-lightbox="link-{{ $prod->id }}" alt="hola">
							<i  class="glyphicon  glyphicon-plus"></i>
							</a>
							<a href="#" class="btn btn-info btn-xs" role="button">Button</a>
						</div>
					</div>
				</div>
			@endforeach 
			</div>
	    </div>
   </div>
 </div>
</div>
</div>
</div>
   <script src="js/lightbox/lightbox-plus-jquery.min.js"></script> 
<!-- Ligthbox2 Jquery -->
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })

 $(document).ready(function (){

$('.caption').hide();

$('.productbox').mouseover(function() {

	var caption = $(this).attr('id');
	var m = caption+"x";
	$('#'+m).show();
	$('#'+m).addClass('caption');

		$('#'+m).animate(
				{
				bottom: '0px'
				},
				500,
				'linear'
		);
	});
});



</script>

@endsection