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
		var height = $(document).height() - 116;
		$('main').css('height', height+"px");
	}

	run(){
		this.welcomeSection();
	}
}

/* VisiableTracker */
var visiableTracker = new VisiableTracker;
visiableTracker.run();

/* Home */
var home = new Home;
home.run();