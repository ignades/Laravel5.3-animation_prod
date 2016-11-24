@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
<style>
  .img-responsive img{
      max-width: 200px;
      min-width: 150px;
  }
  .img-responsive{
      text-align: left;
      padding:5px;
  } 

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
    width: 150px;
    display: inline-block;
    vertical-align: top;

}
</style>
You are logged in!
<?php 					 
echo '
<div class="col-md-12">
   <div class="box box-default">
      <div class="box-header with-border">
		<div class="container">
		    <div class="row">';
	 

	foreach ($res as $key => $value) {
	echo '
					<div class="col-xs-8 col-sm-6 col-md-6 col-lg-2">
					<div class="productbox">
						<div class="imgthumb img-responsive">
	                     <img class="img-responsive" src="http://localhost/laravel_auth/public/img/productos/big/f5.jpg" title="this image ne">
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
@endsection
