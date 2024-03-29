@extends('layout.layout')
<header>
	<div class="banner"></div>
	<nav>
		  
		<div id="logo">

			<img width="50" height="50" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/external-neptune-space-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" alt="external-neptune-space-vitaliy-gorbachev-lineal-color-vitaly-gorbachev"/>

			Neptune's <br> Book Store
		</div>
		<ul class="navigation-menu">
			<li><a href="#">Products</a>
				<ul class="subnav">
					<li class="card-med" id="sup-dog">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/qPvaAv2gxwM3l0z7dl_eoh9v6h58HlzewBUfEgX6AZE/rs:fit:368:386/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMTIv/ZmM4YjNlYmItMDNj/Ni00NGM3LTliNGUt/YTUyOWUzOGU4NTE2/LnBuZw.png"></div>
						<a href="#">
							<span>Dogs</span>
							<span>Shop All <span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
					</li>
					<li class="card-med" id="sup-cat">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/US6gJ6fHUOJqruLB7KDe5zEa82iDSp7OdO-bv-aLtvU/rs:fit:368:310/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjU5/LzdmOWU1ZjU0LTMx/ZDQtNDgwNS1iM2E2/LWM3NzgyMTcyNzJh/NC5wbmc.png"></div>
						<a href="#">
							<span>Cats</span>
							<span>Shop All <span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
					</li>
					<li class="card-med" id="sup-bird">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/6OkSfKKP476ZKzGJoDlXfXuWzX-vjlDRotIVMTz3lmo/rs:fit:368:396/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzA1/LzRkNmI1YjIwLTQy/YWQtNDVlMC05ZDI5/LTA0MTkyMWZkNWE1/NS5wbmc.png"></div>
						<a href="#">
							<span>Birds</span>
							<span>Shop All <span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
					</li>
					<li class="card-med" id="sup-fish">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/41Pv7w9rcbn7II_gB2vwvVCQRYE5mvpca1ZbsvMujR0/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjE5/LzRlZjE1YTgyLTI3/NjYtNDlkNC1hMGE3/LWY4ZjRmNzhjM2M5/NS5wbmc.png"></div>
						<a href="#">
							<span>Fish</span>
							<span>Shop All <span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
					</li>
				</ul>


			<li><a href="#">Services</a>
				<ul class="subnav">
					<li class="card-med" id="serv-groom">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/T11rfGmMKgcStJyAFKNgtOfE79cadabx0DVMnvzA9Pk/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNDQx/LzFlYWU4MWY3LWQ1/ZjYtNDM2Ny1hZjM5/LWVmNTFmMGM5Njk4/MS5wbmc.png"></div>
						<a href="#">
							<span>Grooming</span>
							<span>More Info <span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
					</li>
					<li class="card-med" id="serv-board">
						<div class="card-image"><img src="https://ouch-cdn2.icons8.com/F5Ea1suZtMYimKDkJr0CJLO_1bju6-bTyT1EuDKEg8s/rs:fit:368:254/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMjcx/LzVjMzE4NWM0LWZh/NTMtNGQ1OS05ZTM2/LTZjYzBhNGU3ODg0/NC5wbmc.png"></div>
						<a href="#">
							<span>Boarding</span>
							<span>More Info<span class="material-symbols-outlined">
									arrow_forward
								</span></span>
						</a>
				</ul>
			</li>
			<li><a href="#locate">Locations &amp; Hours</a>
			</li>
			<li>
				<a href="#">About Us</a>
			</li>
		</ul>
		<div id="utility">
			<span class="material-symbols-outlined">
				search
			</span>
			{{-- <button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
				Login
			</span></button> --}}

		</div>
	</nav>
</header>
<form action="/login">
	@csrf
<section class="hero">
	<h1>Make your reading experience more enjoyable!</h1>
	<div class="btn-group">
		{{-- <button class="btn-filled-dark"><span class="material-symbols-outlined">
				Sign In
			</span></button> --}}
		{{-- <button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
				Sign In
			</span></button> --}}
	</div>
</section>
</form>
<section>
	<h2>Shop by Pet</h2>

	<ul class="shop-pets">
		<li class="card-large card-light" id="sup-dog">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/5ccPOQq69UKQcbmXfjvOScfFc9NXKG0Xu6DPNQ8b0f8/rs:fit:368:247/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMTEw/LzFlODdiYzcyLTBl/OWEtNDFlNS05N2Ey/LTMzYTA4MDQ5MWU1/OC5wbmc.png"></div>
			<ul>
				Dogs
				<li><a href="#">Food &amp; Treats</a></li>
				<li><a href="#">Toys</a></li>
				<li><a href="#">Beds &amp; Furniture</a></li>
				<li><a href="#">Outdoor Supplies</a></li>
				<li><a href="#">Clothing</a></li>

				<button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
						arrow_forward
					</span></button>

			</ul>


		</li>

		<li class="card-large card-dark" id="sup-cat">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/RjiKOF2gGKiIVnIMFi0O1a4aU7DoHfhbkXr2JbUYZ3A/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMzEy/LzliNDQ3MmVlLWZh/YjMtNDQwNy1iOWVh/LWMwOTdlYWNjNWE3/NS5wbmc.png"></div>
			<ul>Cats
				<li><a href="#">Food &amp; Treats</a></li>
				<li><a href="#">Toys</a></li>
				<li><a href="#">Beds &amp; Furniture</a></li>
				<button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">
						arrow_forward
					</span></button>
			</ul>

		</li>

		<li class="card-large card-dark" id="sup-bird">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/DF-XRInvbvWS9fQSpWc_SegC3meXZK8BmE-PjrdrF3Q/rs:fit:368:396/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzI3/LzQyYWIyNzliLWJj/ZDgtNGEyMC04MGRi/LTk3MzU4YWFmNTVk/OS5wbmc.png"> </div>
			<ul>Birds
				<li><a href="#">Food &amp; Treats</a></li>
				<li><a href="#">Toys</a></li>
				<li><a href="#">Furniture</a></li>
				<button class="btn-outline-dark">Shop All<span class="material-symbols-outlined">
						arrow_forward
					</span></button>
			</ul>

		</li>
		<li class="card-large card-light" id="sup-fish">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/41Pv7w9rcbn7II_gB2vwvVCQRYE5mvpca1ZbsvMujR0/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjE5/LzRlZjE1YTgyLTI3/NjYtNDlkNC1hMGE3/LWY4ZjRmNzhjM2M5/NS5wbmc.png"></div>
			<ul>
				Fish
				<li><a href="#">Food</a></li>
				<li><a href="#">Aquariums</a></li>
				<li><a href="#">Rocks &amp; Decorations</a></li>
				<button class="btn-outline-light">Shop All<span class="material-symbols-outlined">
						arrow_forward
					</span></button>
			</ul>

		</li>
	</ul>
</section>

<section>
	<h2>Our Services</h2>

	<ul class="services">
		<li class="card-large card-dark card-wide" id="serv-groom">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/T11rfGmMKgcStJyAFKNgtOfE79cadabx0DVMnvzA9Pk/rs:fit:368:313/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNDQx/LzFlYWU4MWY3LWQ1/ZjYtNDM2Ny1hZjM5/LWVmNTFmMGM5Njk4/MS5wbmc.png"></div>
			<ul>
				Dog Grooming<span class="subtitle">Tail-wagging transformations are our specialty.</span>
				<li><a href="#">Coat Care</a><span>$80</span></li>
				<li><a href="#">Nail Care</a><span>$16</span></li>
				<li><a href="#">Doggie Deluxe Spa Day</a><span>$160</span></li>
				<button class="btn-filled-dark"><span class="material-symbols-outlined">
						calendar_month
					</span>Book Now</button>

			</ul>


		</li>
		<li class="card-large card-dark card-wide" id="serv-board">
			<div class="card-image"><img src="https://ouch-cdn2.icons8.com/F5Ea1suZtMYimKDkJr0CJLO_1bju6-bTyT1EuDKEg8s/rs:fit:368:254/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvMjcx/LzVjMzE4NWM0LWZh/NTMtNGQ1OS05ZTM2/LTZjYzBhNGU3ODg0/NC5wbmc.png"></div>
			<ul>
				Dog Boarding<span class="subtitle">Where fun and care never take a day off.</span>
				<li><a href="#">Doggie Daycare</a><span>$80</span></li>
				<li><a href="#">Short Term Boarding</a><span>$80</span></li>
				<button class="btn-filled-dark"><span class="material-symbols-outlined">
						calendar_month
					</span>Book Now</button>
			</ul>

		</li>
	</ul>
</section>

<section id="locate">

	<div>
		<h2>Location &amp; Hours</h2>
		<p>Our knowledgeable and friendly staff is always ready to assist you in making the best choices for your furry, feathered, or finned friends.</p>
		<div class="btn-group">
			<button class="btn-filled-dark"><span class="material-symbols-outlined">
pin_drop
</span>Find a Store</button>
			<button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
contact_support
</span> Contact Us</button>
		</div>
	</div>
</section>

<footer>

	<ul>
		Products
		<li><a href="#">Food &amp; Treats</a></li>
		<li><a href="#">Toys</a></li>
		<li><a href="#">Beds &amp; Furniture</a></li>
		<li><a href="#">Outdoor Supplies</a></li>
		<li><a href="#">Clothing</a></li>
		<li><a href="#">Aquariums</a></li>
		<li><a href="#">Rocks &amp; Decorations</a></li>
	</ul>

	<ul>
		Shop by Pet
		<li><a href="#">Dogs</a></li>
		<li><a href="#">Cats</a></li>
		<li><a href="#">Birds</a></li>
		<li><a href="#">Fish</a></li>
	</ul>


	<ul>
		Our Services
		<li><a href="#">Grooming</a></li>
		<li><a href="#">Boarding</a></li>
	</ul>
	<ul>
		Our Company
		<li><a href="#">Locations &amp; Hours</a></li>
		<li><a href="#">About Us</a></li>
	</ul>


</footer>