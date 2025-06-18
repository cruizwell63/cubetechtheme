<div>
	<div class="container">
		<div class="carousel">
			<button class="carousel-nav carousel-prev" id="prevBtn" aria-label="Previous slide">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<polyline points="15 18 9 12 15 6"></polyline>
				</svg>
			</button>

			<div class="carousel-inner" id="carouselInner">
				<div class="team-member">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Mae.png" alt="Team members in a meeting" class="team-member-image">
					<div class="team-member-info">
						<h3 class="team-member-name">Maae Jumuad</h3>
						<p class="team-member-role">DIRECTOR</p>
					</div>
				</div>

				<div class="team-member">
					<img class="team-member-image" src="<?php echo get_template_directory_uri(); ?>/img/Cherry.png" alt="Team members in a meeting">
					<div class="team-member-info">
						<h3 class="team-member-name">Cherry Mae Minguito</h3>
						<p class="team-member-role">SALES AND MARKETING</p>
					</div>
				</div>

				<div class="team-member">
					<img class="team-member-image" src="<?php echo get_template_directory_uri(); ?>/img/Lyneth.png" alt="Team members in a meeting">
					<div class="team-member-info">
						<h3 class="team-member-name">Lyneth Escuadro</h3>
						<p class="team-member-role">FINANCE MANAGER</p>
					</div>
				</div>

				<div class="team-member">
					<img class="team-member-image" src="<?php echo get_template_directory_uri(); ?>/img/Macdenver.png" alt="Team members in a meeting">
					<div class="team-member-info">
						<h3 class="team-member-name">Macdenver Magbojos</h3>
						<p class="team-member-role">FULL-STACK DEVELOPER</p>
					</div>
				</div>

				<div class="team-member">
					<img class="team-member-image" src="<?php echo get_template_directory_uri(); ?>/img/Chester.png" alt="Team members in a meeting">
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

		<div class="carousel-indicators" id="indicators"></div>
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

			function getVisibleCount() {
				if (window.innerWidth < 640) return 1;
				if (window.innerWidth < 768) return 2;
				if (window.innerWidth < 1024) return 3;
				return 4;
			}

			function getMaxIndex() {
				const visibleCount = getVisibleCount();
				return Math.max(0, Math.ceil(teamMembers.length - visibleCount));
			}

			function updateCarousel() {
				const visibleCount = getVisibleCount();
				const slideWidth = 100 / visibleCount;
				carouselInner.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

				prevBtn.disabled = currentIndex === 0;
				nextBtn.disabled = currentIndex >= getMaxIndex();

				updateIndicators();
			}

			function updateIndicators() {
				const indicatorButtons = document.querySelectorAll('.carousel-indicator');
				indicatorButtons.forEach((button, index) => {
					button.classList.toggle('active', index === currentIndex);
				});
			}

			function createIndicators() {
				indicators.innerHTML = '';
				const visibleCount = getVisibleCount();
				const indicatorCount = Math.ceil(teamMembers.length / visibleCount);

				for (let i = 0; i < indicatorCount; i++) {
					const button = document.createElement('button');
					button.classList.add('carousel-indicator');
					if (i === 0) button.classList.add('active');
					button.setAttribute('data-index', i);
					button.setAttribute('aria-label', `Go to slide ${i + 1}`);
					button.addEventListener('click', function() {
						currentIndex = i;
						updateCarousel();
					});
					indicators.appendChild(button);
				}
			}

			prevBtn.addEventListener('click', () => {
				if (currentIndex > 0) {
					currentIndex--;
					updateCarousel();
				}
			});

			nextBtn.addEventListener('click', () => {
				if (currentIndex < getMaxIndex()) {
					currentIndex++;
					updateCarousel();
				}
			});

			window.addEventListener('resize', () => {
				currentIndex = 0;
				createIndicators();
				updateCarousel();
			});

			createIndicators();
			updateCarousel();
		});
	</script>
</div>