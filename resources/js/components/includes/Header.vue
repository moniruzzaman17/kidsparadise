<template>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm container-fluid app-header" v-if="!isMobile()">
		<div class="container">
			<router-link class="navbar-brand" :to="{name: 'home'}"><img class="w-100" src="/img/logo.gif" alt=""></router-link>
			<button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<form action="" class="search-form" method="POST">
						<div class="input-group md-form form-sm form-2 pl-0">
						  <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
						  <div class="input-group-append">
						    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search text-grey"
						        aria-hidden="true"></i></span>
						  </div>
						</div>
					</form>
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto navbar-menu">
					<li class="nav-item">
						<a class="nav-link" href="">Track Order</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Support</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Login/Register</a>
					</li>
					<li class="nav-item d-flex align-items-center" style="padding-left: 8px;">
						<i class="fas fa-heart"></i><a class="nav-link" href="">Shortlist</a>
					</li>
					<li class="nav-item d-flex align-items-center" style="padding-left: 8px;">
						<i class="fas fa-shopping-cart"></i><a class="nav-link cart-nav-link" href="">Cart<span class="count">0</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm container-fluid app-header" v-else>
		<div class="container">
			<router-link class="navbar-brand" :to="{name: 'home'}"><img class="w-100" src="/img/logo.gif" alt=""></router-link>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse shadow-sm" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<form action="" class="search-form" method="POST">
						<div class="input-group md-form form-sm form-2 pl-0">
						  <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
						  <div class="input-group-append">
						    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search text-grey"
						        aria-hidden="true"></i></span>
						  </div>
						</div>
					</form>
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto navbar-menu">
					<li class="nav-item">
						<a class="nav-link" href="">Track Order</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Support</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Login/Register</a>
					</li>
					<li class="nav-item d-flex align-items-center" style="padding-left: 8px;">
						<i class="fas fa-heart"></i><a class="nav-link" href="">Shortlist</a>
					</li>
					<li class="nav-item d-flex align-items-center" style="padding-left: 8px;">
						<i class="fas fa-shopping-cart"></i><a class="nav-link cart-nav-link" href="">Cart<span class="count">0</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</template>

<script>
	export default {methods: {
		isMobile() {
			if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				return true 	
			} else {
				return false
			}
		}
	}
}
</script>