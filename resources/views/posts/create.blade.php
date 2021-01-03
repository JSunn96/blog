@extends('main')

@section('title', 'Új Post')

@section('styles')

<!--===============================================================================================-->
	<link rel="icon"  href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet"  href="/css/util.css">
	<link rel="stylesheet"  href="/css/main.css">
<!--===============================================================================================-->

	
@endsection

@section('content')

<div class="container-contact100">
		<div class="wrap-contact100">
			
			{!! Form::open(array('route' => 'posts.store', 'class' => 'contact100-form validate-form', 'data-parsley-validate'=>'')) !!}
				
					<span class="contact100-form-title">
					Új Post
				</span>
					
				<div class="wrap-input100 validate-input" data-validate="Cím szükséges">
					
					{{ Form::text('title' , '', array('class' => 'input100' , 'placeholder' => 'Post címe', )) }}
					
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Tartalom szükséges">
					{{ Form::textarea('body', null , array('class' => 'input100' , 'placeholder' => 'Post tartalma', )) }}
				</div>
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						{{Form::submit('Post', array('class' => 'contact100-form-btn'))}}
					</div>
				</div>
				 
			{!! Form::close() !!}






       <!--
			<form class="contact100-form validate-form">
				<hr>				
			
				<span class="contact100-form-title">
					Új Post
				</span>

				<div class="wrap-input100 validate-input" data-validate="Cím szükséges">
					<input class="input100" id="postTitle" type="text" name="postTitle" placeholder="Cím">
					</label>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Tartalom szükséges">
					<textarea class="input100" name="message" placeholder="Bejegyzés tartalma"></textarea>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Post
						</button>
					</div>
				</div>
				 
			</form>
			-->
            
		</div>
	</div>



	<div id="dropDownSelect1"></div>


@endsection

@section('script')

<!--============================================================= -->
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');



</script>

@endsection