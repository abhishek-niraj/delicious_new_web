<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<body>
	<div class="conatiner">


		<div id="maincrousel" class="carousel slide main_banner" data-bs-ride="carousel">
			<div class="carousel-inner ">
				<div class="carousel-item active" data-bs-interval="2000">
					<img src="assets/img/pizza.jpg" class="d-block w-100 carousel-img" alt="">
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="assets/img/delicious.jpeg" class="d-block w-100 carousel-img" alt="">
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="assets/img/everything.jpg " class="d-block w-100 carousel-img" alt="...">

				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#maincrousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#maincrousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>



		<div class="main-slider demo" style="height: fit-content;">

			<div> <img src="assets/img/product_image/pizza1.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/burger.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/pasta.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/parcel.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/noodles.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/springroll.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
			<div> <img src="assets/img/product_image/pizza1.jpg" class="d-block w-100 carousel-img slick-slider-img" alt="">
			</div>
		</div>

		<div class="row align-items-centere grey_background">

			<div class="col-md-7">
				<video id="main_banner" class="video-js" controls autoplay muted loop height="pixels ">
					<source src="assets/img/video/main_video.mp4" class="video_zoom" type="video/mp4">
					<source src="assets/img/video/main_video.mp4" class="video_zoom" type="video/mp4">
				</video>
			</div>
			<div class="col-md-5">
				<img src="assets/img/zomato.jpeg" class="zomato">


			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="mb-3">
					<h1 class="common-heading semibold text-center text-md-left"><span>Our Baking Story</span></h1>
					<div class="bottom-dots clearfix mb-2 mb-md-4 d-flex justify-content-center d-md-block">
						<span class="dot line-dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
				</div>

				<p class="common-para" style="text-align: justify;">.</p>
			</div>
			<div class="col-md-6">
				<div class="about-img mt-2 mt-md-0">
					<img src="assets/img/rajan.jpeg" class="author_picture" alt="about-img" width="450" height="450">
				</div>
			</div>
		</div>
		<div class="row  card_container">
			<div class="col-sm-2">
				<div class="card category-card">
					<img src=" assets/img/product_image/pizza1.jpg" class="card-img-top category_banner" alt="assets/img/6.jpg">

				</div>
			</div>
			<div class="col-sm-2">
				<div class="card category-card">
					<img src=" assets/img/product_image/pizza1.jpg" class="card-img-top category_banner" alt="assets/img/6.jpg">

				</div>
			</div>
			<div class="col-sm-2">
				<div class="card category-card">
					<img src=" assets/img/product_image/burger.jpg" class="card-img-top category_banner " alt="assets/img/product_image/6.jpg">

				</div>
			</div>
			<div class="col-sm-2">
				<div class="card category-card">
					<img src=" assets/img/product_image/springroll.jpg" class="card-img-top category_banner" alt="assets/img/product_image/6.jpg">

				</div>
			</div>
			<div class="col-sm-2">
				<div class="card category-card">
					<img src=" assets/img/product_image/noodles.jpg" class="card-img-top category_banner" alt="assets/img/product_image/6.jpg">

				</div>
			</div>
			<div class="col-sm-2">
				<div class="card category-card">
					<img src="assets/img/product_image/pasta.jpg" class="card-img-top category_banner" alt="assets/img/6.jpg">

				</div>
			</div>
		</div>

		<div class="row align-items-center video_row ">
			<div class="col-md-1">

			</div>
			<div class="col-md-3">

				<video id="my-video" class="video-js" controls autoplay muted loop>
					<source src="assets/img/video/video1.mp4" type="video/mp4">
					<source src="assets/img/video/video1.mp4" type="video/mp4">

				</video>

			</div>

			<div class="col-md-4">

				<h2>❝Round or square, thick or thin, every pizza is beautiful❞</h2>


			</div>
			<div class="col-md-1">

			</div>
			<div class="col-md-2">
				<img src="assets/img/round_pizza.png" id="image" class="card-img-top reveal" alt="assets/img/round_pizza.png">

			</div>
		</div>
	</div>

</body>

<script>
	$(document).ready(function() {

		$('.demo').slick({
			dots: true,
			infinite: false,
			slidesToShow: 4,
			slidesToScroll: 4,
			dots: true,
			speed: 300,
			infinite: true,
			autoplaySpeed: 5000,
			autoplay: true,
			responsive: [{
					breakpoint: 991,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
	});
	const image = document.getElementById('image');

	window.addEventListener('scroll', () => {
		const scrollY = window.scrollY;
		const rotationAmount = scrollY / 10; // Adjust the division factor for desired rotation speed

		// Rotate clockwise on scroll down
		image.style.transform = `translate(-50%, -50%) rotate(${rotationAmount}deg)`;
	});
</script>