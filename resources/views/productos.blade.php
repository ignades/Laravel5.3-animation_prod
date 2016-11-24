@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')

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
    *zoom: 1;
}

.productbox {
	position: relative;
	border: 1px solid #ddd;
	border-radius: 4px;
	-webkit-transition: all .2s ease-in-out; 
}
.caption {
	 
	background-color:rgba(0,0,0,0.7);
	position: absolute;
	bottom: 0;
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

.img-responsive img{
	width: 100%;    
}

.container {
	width: 100%;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  padding: 5px;
}
  .img-responsive img{
      max-width: 200px;
      min-width: 150px;
  }
  .img-responsive{
      text-align: center;
  } 
</style>
<?php 					 
echo '
	<div class="col-md-12">
	   <div class="box box-default">
	      <div class="box-header with-border">
			<div class="container">
			    <div class="row">';
	 

	foreach ($res as $key => $value) {
	echo '
					<div class="col-xs-8 col-sm-3 col-md-3 col-lg-2">
					<div class="productbox">
			           <div class="imgthumb img-responsive">
	                     <img class="img-responsive" src="http://localhost/laravel_auth/public/img/productos/big/f5.jpg" title="this image needs to be centered">
								<ul class="products">
								    <li>
								        <a href="#">
								            <h4>Articulo</h4>
								            <p>'.ucfirst($value->nombre_prod).'</p>
								            <p>'.ucfirst($value->descr_prod).'</p>
								            <p>$'.ucfirst(number_format($value->precio,2)).'</p>
								        </a>
								    </li> 
								</ul>
		                 </div> 
			        </div> 
	';
	}
	echo '		    </div>
				</div>
			</div>
		</div>
	</div></div>
';
 
?> 