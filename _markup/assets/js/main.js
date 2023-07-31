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
		$('main').css('height', height+"px");
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