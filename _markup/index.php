<?php 
$version = "1.0.4";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/_markup/assets/img/favicon.svg" type="image/svg" sizes="64x64">
	<title>Billion</title>
	<link rel="stylesheet" type="text/css" href="/_markup/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="/_markup/assets/lightbox/jquery.lightbox.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/main.css?v=<?=$version?>">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/ge.css?v=<?=$version?>">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/responsive_ge.css?v=<?=$version?>">

	<link rel="preload" as="image" href="https://billion.404.ge/_markup/assets/img/leaf.svg">
	<link rel="preload" as="image" href="https://billion.404.ge/_markup/assets/img/fruits-min.png">
	<link rel="preload" as="image" href="https://billion.404.ge/_markup/assets/img/bag2-min.png">
	<link rel="preload" as="image" href="https://billion.404.ge/_markup/assets/img/sprite.svg">


<script>
    var map, markers, myLatLng;
    var locations = [
        { lat: 41.6329098036272, lng: 41.618115356584624 },
        { lat: 41.63791340938079, lng: 41.629273345180316 },
        { lat: 41.650677259216636, lng: 41.6384572281014 },
    ];

    function googleMap() {
    	var mapStyle = [{"featureType":"administrative.land_parcel","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}];
        
        map = new google.maps.Map(document.getElementById('map'), {
            center: locations[0], 
            zoom: 12,
            scrollwheel: false,
            disableDefaultUI: true,
            zoomControl: true,
            styles: mapStyle
        });

        markers = locations.map(location => {
            return new google.maps.Marker({
                position: location,
                map: map,
                icon: '/_markup/assets/img/marker.svg',
                animation: google.maps.Animation.DROP,
                draggable: false
            });
        });
    }

    function initMaps() {
        if (window.ggMaps) {
            return false;
        }
        window.ggMaps = true;
        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLSXv1i5iAG3WdJzqWsVOaFddXAxiDUQ&callback=googleMap';
        document.head.appendChild(script);
    }

    document.addEventListener('DOMContentLoaded', () => {
        // setTimeout(initMaps, 3500);
    });
</script>
</head>
<body class="home">

<div class="mobile-navigation"></div>

<header>
	<div class="top">
		<div class="center">
			<div class="content">
				<ul class="social">
					<li><a href="" class="facebook" aria-label="Facebook">facebook</a></li>
					<li><a href="" class="instagram" aria-label="Instagram">instagram</a></li>
					<li><a href="" class="youtube" aria-label="Youtube">youtube</a></li>
				</ul>

				<div class="line"></div>

				<div class="phone">
					<a href="" aria-label="Contact number" class="call">
						<span>032 215 15 09</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="bottom">
		<div class="center">
			<a href="" class="logo" aria-label="Logo">Logo</a>

			<div class="right">
				<nav>
					<ul>
						<li><a href="" aria-label="მარკეტების რუკა" class="active">მარკეტების რუკა</a></li>
						<li><a href="" aria-label="ფასდაკლებები">ფასდაკლებები</a></li>
						<li>
							<a href="" aria-label="პროდუქტები">პროდუქტები</a>
							<ul>
								<li><a href="" aria-label="ხილ-ბოსტნეული">ხილ-ბოსტნეული</a></li>
								<li><a href="" aria-label="სასმელი">სასმელი</a></li>
								<li><a href="" aria-label="ჩაი ყავა კაკაო">ჩაი ყავა კაკაო</a></li>
								<li><a href="" aria-label="პურფუნთუშეული">პურფუნთუშეული</a></li>
							</ul>
						</li>
						<li><a href="" aria-label="ვაკანსიები">ვაკანსიები</a></li>
						<li><a href="" aria-label="სიახლეები">სიახლეები</a></li>
						<li>
							<a href="" aria-label="შესახებ">შესახებ</a>
							<ul>
								<li><a href="" aria-label="ჩვენ შესახებ">ჩვენ შესახებ</a></li>
								<li><a href="" aria-label="ჩვენი გუნდი">ჩვენი გუნდი</a></li>
							</ul>
						</li>
						<li><a href="" aria-label="გალერეა">გალერეა</a></li>
						<li><a href="" aria-label="კონტაქტი">კონტაქტი</a></li>
					</ul>
				</nav>

				<div class="languages">
					<ul>
						<li><a href="" class="active">KA</a></li>
						<li><a href="">EN</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>


<main>
	<section class="welcome">
		<div class="leaf">leaf</div>
		<div class="wave">wave</div>

		<div class="center">
			<div class="left">
				<div class="slogan">
					<span>გაიმარტივე ცხოვრება</span>
				</div>

				<h2>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია</h2>
				<h1>საბეჭდი და ტიპოგრაფიულიინდ</h1>
				<div class="clearfix"></div>
				<button type="button" class="mainBtn"><span>ტიპოგრაფიული</span><em></em></button>

				<div class="bubles">
					<div class="buble b1"></div>
					<div class="buble b2"></div>
					<div class="buble b3"></div>
					<div class="buble b4"></div>
				</div>
			</div>

			<div class="right">
				<div class="fruits">fruits</div>
				<div class="bag">bag</div>

				<div class="bubles">
					<div class="buble b1"></div>
					<div class="buble b2"></div>
					<div class="buble b3"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-us">
		<div class="center">
			<h2 class="sec-title">ჩვენ შესახებ</h2>

			<div class="content">
				<div class="image-box">
					<div class="image" style="background-image:url('/_markup/assets/img/about.jpg')">
						<img src="/_markup/assets/img/about.jpg" alt="" loading="lazy" class="imageHide">	
					</div>
				</div>

				<div class="text">
					<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია. განსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია. განსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა
					საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5</p>

					<a href="" class="read-more">სრულად ნახვა</a>
				</div>

				<div class="clearfix"></div>

				<div class="products" id="scroll-container">
					<div class="wrapper">
						<div class="item">
							<div class="box">
								<div class="icon icon1"></div>
								<p>ბილიონის წარმოება</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon2"></div>
								<p>ხილ-ბოსტნეული</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon3"></div>
								<p>სასმელი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon4"></div>
								<p>ჩაი ყავა კაკაო</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon5"></div>
								<p>პურ ფუნთუშეული</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon6"></div>
								<p>ტკბილეული ნაყინი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon7"></div>
								<p>სნექი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon8"></div>
								<p>კონსერვი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon9"></div>
								<p>სოსისი, ძეხვეული</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon10"></div>
								<p>ხორცი, ნახევარ-ფაბრიკატები</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon11"></div>
								<p>კვერცხი, რძის ნაწარმი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon12"></div>
								<p>ზღვის პროდუქტები</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon13"></div>
								<p>სახლის მოვლა, ჰიგიენა</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon14"></div>
								<p>ცხოველთა კვება</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon15"></div>
								<p>საკანცელარიო, ჭურჭელი</p>
							</div>
						</div>

						<div class="item">
							<div class="box">
								<div class="icon icon16"></div>
								<p>სანტექნიკა</p>
							</div>
						</div>						
					</div>
				</div>

				<div class="buttons">
					<a href="javascript:void(0)" arial-label="prev" id="scroll-left-button">prev</a>
					<a href="javascript:void(0)" arial-label="next" id="scroll-right-button">next</a>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</section>

	<section class="market-map">
		<div class="center">
			<h2 class="sec-title">მარკეტების რუკა</h2>

			<div class="map-box">
				<div class="addresses">
					<ul>
						<li><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li style="opacity:0.8"><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li style="opacity:0.4"><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
						<li style="opacity:0.2"><a href="">ბათუმი, ჭავჭავაძის 80</a></li>
					</ul>

					<a href="" class="see-on-map">რუკაზე ნახვა</a>
				</div>

				<div class="right">
					<div class="map" id="map" style="background-image:url('/_markup/assets/img/theMap.jpg')">map</div>
				</div>

				<div class="clearer"></div>
			</div>
		</div>
	</section>

	<section class="vacancy">
		<div class="wave"></div>
		<div class="center">
			<div class="right">
				<h2>ბილიონში ვაკანსიები გვაქ!</h2>
				<a href="" class="employMe"><span>მსურს დასაქმება</span><em></em></a>
			</div>

			<div class="clearfix"></div>
		</div>
	</section>

	<section class="news">
		<div class="center">
			<h2 class="sec-title">სიახლეები</h2>

			<div class="news-box">
				<div class="owl-carousel owl-theme" id="owl-news-slider">
					<div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>


				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>

				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>

				    <div class="item">
				    	<a href="" class="content">
				    		<div class="image-box">
				    			<img src="/_markup/assets/img/news.jpg" alt="" loading="lazy">
				    			<em class="cover"></em>
				    			<span>12.12.2023</span>
				    		</div>

				    		<div class="text">
				    			<h3>სიახლის სათაური</h3>

				    			<p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა </p>
				    		</div>
				    		<div class="button-arrow" arial-label="read more"></div>
				    	</a>
				    </div>
				</div>
			</div>

			<div class="clearfix"></div>
			<a href=""><span>ყველა სიახლის ნახვა</span><em></em></a>
		</div>
	</section>
</main>

<footer>

</footer>



<script src="/_markup/assets/js/jquery.js"></script>
<script src="/_markup/assets/lightbox/jquery.lightbox.js"></script>
<script src="/_markup/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/_markup/assets/js/owl.carousel.min.js"></script>
<script src="/_markup/assets/js/compressed.js?v=<?=$version?>"></script>
<script src="/_markup/assets/aos/aos.js"></script>
</body>

</html>