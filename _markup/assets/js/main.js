class VisiableTracker{
	constructor(){
		this.trackElement = "section, footer";
		this.addRemoveClass = "g-visible";
	}

	track(){
		const elements = document.querySelectorAll(this.trackElement);

		const observer = new IntersectionObserver(entries => {
		  entries.forEach(entry => {
		    if (entry.isIntersecting) {
		      entry.target.classList.add(this.addRemoveClass);
		    } else {
		      entry.target.classList.remove(this.addRemoveClass);
		    }
		  });
		});

		elements.forEach(element => {
		  observer.observe(element);
		});
	}

	run(){
		this.track();
	}
}

class Home{
	welcomeSection(){
		var height = $(window).height() - 116;
		$('.home main .welcome').css('height', height+"px");
	}

	run(){
		this.welcomeSection();
	}
}

class About{
	products(){
		var containerWidth = $('.home main .about-us .center .content').width();
		var oneItemWidth = (containerWidth / 10);

		$('.home main .about-us .center .content .products .wrapper .item').css('flex-basis', oneItemWidth+"px");

		var items = $('.home main .about-us .center .content .products .wrapper .item').length;
		var fullWidth = (items * oneItemWidth) + 8;

		$('.home main .about-us .center .content .products .wrapper').css('width', fullWidth+"px");
		
	}

	makeProductDragable(){
		if($('.home main .about-us .center .content .products').length){
			let isMouseDown = false;
			let startX;
			let scrollLeft;

			const scrollContainer = document.querySelector('.home main .about-us .center .content .products');

			scrollContainer.addEventListener('mousedown', (e) => {
			  isMouseDown = true;
			  startX = e.pageX - scrollContainer.offsetLeft;
			  scrollLeft = scrollContainer.scrollLeft;
			});

			scrollContainer.addEventListener('mouseup', () => {
			  isMouseDown = false;
			});

			scrollContainer.addEventListener('mouseleave', () => {
			  isMouseDown = false;
			});

			scrollContainer.addEventListener('mousemove', (e) => {
			  if (!isMouseDown) return;
			  e.preventDefault();
			  const x = e.pageX - scrollContainer.offsetLeft;
			  const walk = (x - startX) * 2;
			  scrollContainer.scrollLeft = scrollLeft - walk;
			});
		}
	}

	productScrolls(){
		setTimeout(function(){
			$(document).on('click', '#scroll-left-button', function() {
				$('#scroll-container').animate({
			      scrollLeft: '-=270'
			    }, 'slow');
			});

			$(document).on('click', '#scroll-right-button', function() {
				$('#scroll-container').animate({
			      scrollLeft: '+=270'
			    }, 'slow');
			});
		}, 500);
	}

	run(){
		this.products();
		this.productScrolls();
		this.makeProductDragable();
	}
}

class News{
	setLastActiveClass(owl) {
      var activeItems = $('#owl-news-slider').trigger('refresh.owl.carousel').find('.owl-item.active');
      var lastActive = activeItems.last().index();
      $('#owl-news-slider .owl-item').removeClass('last-active');
      $('#owl-news-slider .owl-item').eq(lastActive).addClass('last-active');
    }

	owlSlider(){
		var that = this;
		var owl = $('#owl-news-slider').owlCarousel({
		    loop:false,
		    margin:20,
		    nav:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:4
		        }
		    },
		    onDrag: function(){
		    	setTimeout(function(){
		    		that.setLastActiveClass($('#owl-news-slider'));	
		    	}, 500);
		    	
		    }
		});

	    this.setLastActiveClass(owl);
	}

	addHoveredClass(){
		$(document).on('mouseenter', '.home main .news .news-box #owl-news-slider .item a', function(){
			$(this).addClass('hovered');
		});
	}

	removeHoveredClass(){
		$(document).on('mouseleave', '.home main .news .news-box #owl-news-slider .item a', function(){
			$(this).removeClass('hovered');
		});
	}

	run(){
		this.owlSlider();
		this.addHoveredClass();
		this.removeHoveredClass();
	}
}

class GoogleMapClass{
	closeAllInfoWindows() {
	  infoWindows.forEach(function (infoWindow) {
	    infoWindow.close();
	  });
	}

	loadMap(map, locations){
		var that = this;
		var mapStyle = [{"featureType":"administrative.land_parcel","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}];

        map = new google.maps.Map(document.getElementById('map'), {
            center: locations[0].position, 
            zoom: 12,
            scrollwheel: false,
            disableDefaultUI: true,
            zoomControl: true,
            styles: mapStyle
        });


        locations.map(location => {
            var marker = new google.maps.Marker({
                position: location.position,
                map: map,
                icon: '/_markup/assets/img/marker.svg',
                animation: google.maps.Animation.DROP,
                draggable: false
            });

            var infoWindow = new google.maps.InfoWindow({
      			content: location.content
    		});

    		marker.addListener('click', function () {
				that.closeAllInfoWindows();
				var index = markers.indexOf(marker);
				console.log(index);
				$('.inner-page main .market-map .center .map-box .addresses ul li a').removeClass('active');
				$('.inner-page main .market-map .center .map-box .addresses ul li a[data-index="'+index+'"]').addClass('active');
				infoWindow.open(map, marker);
			});

    		infoWindows.push(infoWindow);
    		markers.push(marker);
        });

        $(document).on('click', '.inner-page main .market-map .center .map-box .addresses ul li a', function(){
			$('.inner-page main .market-map .center .map-box .addresses ul li a').removeClass('active');
			$(this).addClass('active');

			var index = parseInt($(this).attr('data-index'));
			var position = $(this).attr('data-position');

			that.closeAllInfoWindows();

			infoWindows[index].open(map, markers[index]);
			map.setCenter(markers[index].getPosition());
		});
	}

	loadLocations(locations){
		if($('.inner-page main .market-map .center .map-box .addresses').length){
			var out = "";
			// console.log(markers.length);
			// console.log(locations.length);

			var x = (markers.length > 0) ? (markers.length - locations.length) : 0;
			locations.forEach(function (item) {
				out += '<li><a href="javascript:void(0)" data-index="'+x+'" data-position="{ lat: '+item.position.lat+', lng: '+item.position.lng+' }">'+item.title+'</a></li>';
				x++;
			});

			$('.inner-page main .market-map .center .map-box .addresses ul').html(out);
		}
	}

	changeMapInit(){
		$(document).on('click', '.markets_list', function(){
			$('.inner-page main .market-map .center .map-box .right .top ul li a').removeClass('active');
			$(this).addClass('active');

			googleMap(markets_list);
		});

		$(document).on('click', '.tone_list', function(){
			$('.inner-page main .market-map .center .map-box .right .top ul li a').removeClass('active');
			$(this).addClass('active');

			googleMap(tone_list);
		});

		$(document).on('click', '.fastfood_list', function(){
			$('.inner-page main .market-map .center .map-box .right .top ul li a').removeClass('active');
			$(this).addClass('active');

			googleMap(fastfood_list);
		});
	}

	run(){
		this.changeMapInit();
	}
}

/* VisiableTracker */
var visiableTracker = new VisiableTracker;
visiableTracker.run();

/* Home */
var home = new Home;
home.run();

/* About */
var about = new About;
about.run();

/* News */
var news = new News;
news.run();

/* Google map */
var myGoogleMapClass = new GoogleMapClass;
myGoogleMapClass.run();