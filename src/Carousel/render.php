<div class="container">
	<header>
		<h1 class="main-title">We're CubeTech</h1>
	</header>

	<section class="content-section">
		<div class="photo-collage">
			<div class="polaroid top-left">
				<img src="frame1.png" alt="Team members in a meeting">
			</div>
			<div class="polaroid top-right">
				<img src="frame2.png" alt="Team members collaborating">
			</div>
			<div class="polaroid bottom-left">
				<img src="frame3.png" alt="Team members at work">
			</div>
			<div class="polaroid bottom-right">
				<img src="frame4.png" alt="Team members discussing">
			</div>
		</div>

		<div class="about-text">
			<p>We're a passionate and innovative team based in Cebu, Philippines, dedicated to delivering exceptional products that our customers love and rely on. At CubeTech, we pride ourselves on our collaborative culture, fostering an environment where creativity thrives and every voice matters.</p>

			<p>Together, we strive for excellence in everything we do, ensuring that we exceed expectations and make a positive impact in our community.</p>

			<p>CubeTech is all about crafting software solutions that meet client needs and drive growth. We're focused on building secure, user-friendly tools that add value—no hidden costs, just straightforward solutions. By enhancing productivity, we aim to be a reliable partner our clients can count on for the long haul.</p>
		</div>
	</section>

	<section class="mission-vision-section">
		<div class="mission-box">
			<h2 class="section-title">Our Mission</h2>
			<p>Empower businesses every day by providing innovative software solutions that drive growth and unlock their full potential.</p>
		</div>

		<div class="vision-box">
			<h2 class="section-title">Our Vision</h2>
			<p>CubeTech delivers innovative, secure, and user-friendly software tailored to client needs. We focus on transparency, efficiency, and long-term partnerships, empowering growth with reliable solutions that boost productivity.</p>
		</div>
	</section>

	<div class="container">
		<div class="carousel">
			<button class="carousel-nav carousel-prev" id="prevBtn" aria-label="Previous slide">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<polyline points="15 18 9 12 15 6"></polyline>
				</svg>
			</button>

			<div class="carousel-inner" id="carouselInner">
				<div class="team-member">
					<img src="Mae.png" alt="Maae Jumuad" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Maae Jumuad</h3>
						<p class="team-member-role">DIRECTOR</p>
					</div>
				</div>

				<div class="team-member">
					<img src="Cherry.png" alt="Cherry Mae Mingote" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Cherry Mae Minguito</h3>
						<p class="team-member-role">SALES ANG MARKETING</p>
					</div>
				</div>

				<div class="team-member">
					<img src="Lyneth.png" alt="Lyneth Estandarte" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Lyneth Escuadro</h3>
						<p class="team-member-role">FINANCE MANAGER</p>
					</div>
				</div>

				<div class="team-member">
					<img src="Macdenver.png" alt="Macdomer Minguito" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Macdenver Magbojos</h3>
						<p class="team-member-role">FULL-STACK DEVELOPER</p>
					</div>
				</div>

				<div class="team-member">
					<img src="Chester.png" alt="Chester Kyles Colita" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Chester Kyles Colita</h3>
						<p class="team-member-role">DEVOPS ENGINEER</p>
					</div>
				</div>

			</div>

			<button class="carousel-nav carousel-next" id="nextBtn" aria-label="Next slide">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<polyline points="9 18 15 12 9 6"></polyline>
				</svg>
			</button>
		</div>

		<div class="carousel-indicators" id="indicators">
			<button class="carousel-indicator active" data-index="0" aria-label="Go to slide 1"></button>
			<button class="carousel-indicator" data-index="1" aria-label="Go to slide 2"></button>
		</div>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const carouselInner = document.getElementById('carouselInner');
		const prevBtn = document.getElementById('prevBtn');
		const nextBtn = document.getElementById('nextBtn');
		const indicators = document.getElementById('indicators');
		const teamMembers = document.querySelectorAll('.team-member');

		let currentIndex = 0;
		let visibleCount = getVisibleCount();
		const maxIndex = Math.max(0, teamMembers.length - visibleCount);

		updateCarousel();

		prevBtn.addEventListener('click', prev);
		nextBtn.addEventListener('click', next);

		createIndicators();

		window.addEventListener('resize', function() {
			visibleCount = getVisibleCount();
			updateCarousel();
		});

		function prev() {
			if (currentIndex > 0) {
				currentIndex--;
				updateCarousel();
			}
		}

		function next() {
			if (currentIndex < maxIndex) {
				currentIndex++;
				updateCarousel();
			}
		}

		function goToSlide(index) {
			currentIndex = Math.min(Math.max(0, index), maxIndex);
			updateCarousel();
		}

		function updateCarousel() {
			const slideWidth = 100 / visibleCount;
			carouselInner.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

			prevBtn.disabled = currentIndex === 0;
			nextBtn.disabled = currentIndex >= maxIndex;

			updateIndicators();
		}

		function getVisibleCount() {
			if (window.innerWidth < 640) return 1;
			if (window.innerWidth < 768) return 2;
			if (window.innerWidth < 1024) return 3;
			return 4;
		}

		function createIndicators() {
			indicators.innerHTML = '';
			const indicatorCount = Math.min(maxIndex + 1, 5);

			for (let i = 0; i < indicatorCount; i++) {
				const indicator = document.createElement('button');
				indicator.classList.add('carousel-indicator');
				if (i === 0) indicator.classList.add('active');
				indicator.setAttribute('data-index', i);
				indicator.setAttribute('aria-label', `Go to slide ${i + 1}`);

				indicator.addEventListener('click', function() {
					goToSlide(parseInt(this.getAttribute('data-index')));
				});

				indicators.appendChild(indicator);
			}
		}

		function updateIndicators() {
			const indicatorButtons = document.querySelectorAll('.carousel-indicator');
			indicatorButtons.forEach((button, index) => {
				if (parseInt(button.getAttribute('data-index')) === currentIndex) {
					button.classList.add('active');
				} else {
					button.classList.remove('active');
				}
			});
		}
	});
</script>