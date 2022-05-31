

<?php $__env->startSection('content'); ?>
<div class="main-panel">
    
    <!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.html" class="header__logo">
								<img src="<?php echo e(url('front/img/logo.svg')); ?>" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
										<li><a href="index.html">Home slideshow bg</a></li>
										<li><a href="index2.html">Home static bg</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="catalog1.html">Catalog Grid</a></li>
										<li><a href="catalog2.html">Catalog List</a></li>
										<li><a href="details1.html">Details Movie</a></li>
										<li><a href="details2.html">Details TV Series</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="pricing.html" class="header__nav-link">Pricing Plan</a>
								</li>

								<li class="header__nav-item">
									<a href="faq.html" class="header__nav-link">Help</a>
								</li>

								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="about.html">About</a></li>
										<li><a href="signin.html">Sign In</a></li>
										<li><a href="signup.html">Sign Up</a></li>
										<li><a href="404.html">404 Page</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="signin.html" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="<?php echo e(url('front/img/home/home__bg.jpg')); ?>"></div>
			<div class="item home__cover" data-bg="<?php echo e(url('front/img/home/home__bg2.jpg')); ?>"></div>
			<div class="item home__cover" data-bg="<?php echo e(url('front/img/home/home__bg3.jpg')); ?>"></div>
			<div class="item home__cover" data-bg="<?php echo e(url('front/img/home/home__bg4.jpg')); ?>"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
						<div class="item">
                        <?php $__currentLoopData = $movies->movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
                                    <img src="<?php echo e(asset('admin/images/movies/'.$movie['movie_image'])); ?>">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo e($movie['movie_name']); ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo e($movie['genre']); ?></a>
										<a href="#"><?php echo e($movie['movie_duration']); ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
							<!-- end card -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">New items</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
											<span class="card__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Benched</a></h3>
											<span class="card__category">
												<a href="#">Comedy</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Whitney</a></h3>
											<span class="card__category">
												<a href="#">Romance</a>
												<a href="#">Drama</a>
												<a href="#">Music</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Blindspotting</a></h3>
											<span class="card__category">
												<a href="#">Comedy</a>
												<a href="#">Drama</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
											<span class="card__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Benched</a></h3>
											<span class="card__category">
												<a href="#">Comedy</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover6.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover5.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover4.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover3.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover2.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo e(url('front/img/covers/cover.jpg')); ?>" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <!-- partial -->
</div>
<!-- main-panel ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thefastlane_app\resources\views/new.blade.php ENDPATH**/ ?>