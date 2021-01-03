@extends('main')

@section('title' , 'Edit post')

@section('content')

	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

							</div><!-- post-info -->

                            {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
                            {{ Form::label('title', 'Cím:') }}
							{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

                            {{ Form::label('body', "Tartalom:", ['class' => 'form-spacing-top']) }}
							{{ Form::textarea('body', null, ['class' => 'form-control']) }}

							

							<ul class="tags">
								<li><a href="#">Mnual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recommendation</a></li>
								<li><a href="#">Inspiration</a></li>
							</ul>
						</div><!-- blog-post-inner -->

						<div class="post-icons-area">
							<ul class="post-icons">
								<li><a href="#"><i class="ion-heart"></i>57</a></li>
								<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
								<li><a href="#"><i class="ion-eye"></i>138</a></li>
							</ul>

							<ul class="icons">
								<li>SHARE : </li>
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							</ul>
						</div>

						<div class="post-footer post-info">

							<div class="left-area">
								<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
							</div>

							<div class="middle-area">
								<a class="name" href="#"><b>Katy Liu</b></a>
								<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
							</div>

						</div><!-- post-info -->


					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->

				<div class="col-lg-4 col-md-12 no-left-padding">

					<div class="single-post info-area">

						<div class="sidebar-area about-area">
                        <hr>
							<dl class="dl-horizontal">
                                <dt>Létrehozva:</dt>
                                <dd>{{ date('M j, Y',strtotime($post->updated_at)) }}</dd>
                            </dl>

                            <dl class="dl-horizontal">
                                <dt>Frissítve:</dt>
                                <dd>{{ date('M j, Y',strtotime($post->updated_at)) }}</dd>
                            </dl>
                            <hr>
                            <div class="row-12" style="display: flex;">
                                <div class="col-sm-6">
                                    {!! Html::linkRoute('posts.show', 'Mégsem', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                                </div>
                            

                            
                                <div class="col-sm-6">
                                    {!! Html::linkRoute('posts.update', 'Mentés', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
                                </div>
                            </div>
						

					

						<div class="tag-area">

							<h4 class="title"><b>TAG CLOUD</b></h4>
							<ul>
								<li><a href="#">Manual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recomendation</a></li>
								<li><a href="#">Interpritation</a></li>
								<li><a href="#">Manual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recomendation</a></li>
								<li><a href="#">Interpritation</a></li>
							</ul>
                        {!! Form::close() !!}
						</div><!-- subscribe-area -->

					</div><!-- info-area -->

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- post-area -->


	<section class="recomended-area section">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/alex-lambley-205711.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
								Concepts in Physics?</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/caroline-veronez-165944.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

							<div class="blog-info">
								<h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
									Concepts in Physics?</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>
							</div><!-- blog-info -->

						</div><!-- single-post -->

					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/marion-michele-330691.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

							<div class="blog-info">
								<h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
									Concepts in Physics?</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>
							</div><!-- blog-info -->

						</div><!-- single-post -->

					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

	<section class="comment-section">
		<div class="container">
			<h4><b>POST COMMENT</b></h4>
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="contact-form-name" class="form-control"
										placeholder="Enter your name" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="contact-form-email" class="form-control"
										placeholder="Enter your email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea name="contact-form-message" rows="2" class="text-area-messge form-control"
										placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->

					<h4><b>COMMENTS(12)</b></h4>

					<div class="commnets-area">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

						<div class="comment">
							<h5 class="reply-for">Reply for <a href="#"><b>Katy Lui</b></a></h5>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<div class="commnets-area ">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a>

				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->

	</section>

@endsection