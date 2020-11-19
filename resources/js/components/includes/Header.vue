<template>
<!-- 	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm container-fluid app-header" v-if="isMobile()!=true">
		<div class="container">
			<router-link class="navbar-brand" :to="{name: 'home'}"><img class="w-100" src="/img/logo.gif" alt=""></router-link>
			<button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 Left Side Of Navbar 
				<ul class="navbar-nav mr-auto">
					<form action="" class="search-form" method="POST">
						<div class="input-group md-form form-sm form-2 pl-0">
							<input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
							<div class="input-group-append">
								<span class="input-group-text lime lighten-2" id="basic-text1"><i class="fa fa-search text-grey" aria-hidden="true"></i></span>
							</div>
						</div>
					</form>
				</ul>

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
						<i class="far fa-heart"></i><a class="nav-link" href="">Shortlist</a>
					</li>
					<li class="nav-item d-flex align-items-center" style="padding-left: 8px;">
						<i class="fas fa-shopping-cart"></i><a class="nav-link cart-nav-link" href="">Cart<span class="count">0</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-md navbar-light bg-white container-fluid app-header" v-else>
		<div class="container">
			<div class="float-left">
				<button class="navbar-toggler mob-navbar-toggler" type="button" v-b-toggle.sidebar-backdrop>
					<span class="navbar-toggler-icon"></span>
				</button>
				<router-link class="navbar-brand" :to="{name: 'home'}"><img class="w-75" src="/img/logo.gif" alt=""></router-link>
			</div>
			<div class="float-right mobile-right-menubar">
				<ul class="d-flex">
					<li>
						<a href=""><i class="fa fa-search text-grey" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href=""><i class="far fa-heart"></i></a>
					</li>
					<li>
						<a href="" class="position-relative"><i class="fas fa-shopping-cart"></i><b-badge class="cart-count" variant="light">9</b-badge></a>
					</li>
				</ul>
			</div>
			<div>
				<b-sidebar
				id="sidebar-backdrop"
				title="Sidebar with backdrop"
				:backdrop-variant="variant"
				backdrop
				shadow
				>
				<div class="px-3 py-2">
					<b-form-group label="Backdrop variant" label-for="backdrop-variant">
						<b-form-select id="backdrop-variant" v-model="variant" :options="variants"></b-form-select>
					</b-form-group>
				</div>
			</b-sidebar>
		</div>
	</div>
</nav> -->
<div>
	<div class="header-vue">
		<b-navbar toggleable="lg" class="container">
			<b-navbar-toggle v-b-toggle.sidebar-backdrop target="nav-collapse"></b-navbar-toggle>
			<b-navbar-brand :to="{name: 'home'}" class="nav-brand-anchor"><img class="w-100" src="/img/logo.gif" alt=""></b-navbar-brand>

			<div class="desk-menu w-100">
				<!-- Right aligned nav items -->
				<b-navbar-nav class="w-100 d-flex align-items-center">
					<b-nav-form class="w-100">
						<!-- <b-form-input size="sm" class="mr-sm-2 serach-box" placeholder="Search"></b-form-input> -->
						<div class="input-group">
							<input type="text" class="form-control serach-box" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
							<div class="input-group-append serach-btn">
								<span class="input-group-text search-icon" id="basic-addon2"><i class="fa fa-search text-grey" aria-hidden="true"></i></span>
							</div>
						</div>
					</b-nav-form>
					<b-navbar-nav class="w-100 navbar-menu">
						<b-nav-item href="#">Track Order</b-nav-item>
						<b-nav-item href="#" >Support</b-nav-item>
						<b-nav-item href="#" >Login/Register</b-nav-item>
						<b-nav-item href="#" ><i class="far fa-heart"></i> Shortlist</b-nav-item>
						<b-nav-item href="#" ><i class="fas fa-shopping-cart"></i> Cart<span class="count">0</span></b-nav-item>
					</b-navbar-nav>
				</b-navbar-nav>
			</div>
		</b-navbar>
		<div class="menu-container desk-menu w-100">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="" id="main_nav">
						<ul class="navbar-nav product-menubar-ul">
							<li class="nav-item d-flex align-items-center">
								<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  All Category  </a>
								<div class="dropdown-menu">
									<ul>
										<li><a class="dropdown-item" href="#"> This is from more items</a></li>
										<li><a class="dropdown-item" href="#"> This is from more All Category</a></li>
										<li><a class="dropdown-item" href="#"> This is from more items</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item d-flex align-items-center">
								<a class="nav-link" href="#" data-toggle="dropdown"> Home  </a>
								<div class="dropdown-menu">
									<ul>
										<li><a class="dropdown-item" href="#"> This is from more Home</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Home</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Home</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item d-flex align-items-center">
								<a class="nav-link" href="#" data-toggle="dropdown">Service  </a>
								<div class="dropdown-menu">
									<ul>
										<li><a class="dropdown-item" href="#"> This is from more Service</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Service</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Service</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item d-flex align-items-center">
								<a class="nav-link" href="#" data-toggle="dropdown">  Fashions  </a>
								<div class="dropdown-menu">
									<ul>
										<li><a class="dropdown-item" href="#"> This is from more Fashions</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Fashions</a></li>
										<li><a class="dropdown-item" href="#"> This is from more Fashions</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div> <!-- navbar-collapse.// -->
				</nav>
			</div>
		</div>
		<b-sidebar id="sidebar-backdrop" class="mob-side-bar" :backdrop-variant="variant" backdrop shadow>
			<div class="sidebar-header row d-flex justify-content-between align-items-center w-100 shadow-sm">
				<div class="action-menu d-flex align-items-center">
					<i class="fas fa-user fa-user-icon"></i>
					<a href="" class="login-btn">Login/Register</a>
				</div>
				<div class="header-img">
					<img class="w-100" src="img/sidebar-header-img.png" alt="">
				</div>
			</div>
			<div class="sidebar-header-menu">
				<ul class="d-flex justify-content-between p-0">
					<li>
						<i class="fas fa-user fa-user-icon"></i>
						<a href="">Account</a>
					</li>
					<li>
						<i class="fas fa-user fa-user-icon"></i>
						<a href="">Support</a>
					</li>
					<li>
						<i class="fas fa-user fa-user-icon"></i>
						<a href="">Trac Order</a>
					</li>
				</ul>
			</div>
		</b-sidebar>
	</div>
</div>
</template>

<script>
	export default {
		data() {
			return {
				variant: 'dark',
				variants: [
				'transparent',
				'white',
				'light',
				'dark',
				'primary',
				'secondary',
				'success',
				'danger',
				'warning',
				'info',
				]
			}
		},
		methods: {
			// isMobile() {
			// 	if(/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && window.innerWidth <768) {
			// 		return true 	
			// 	} 
			// 	else {
			// 		return false
			// 	}
			// }
		}
	}
</script>