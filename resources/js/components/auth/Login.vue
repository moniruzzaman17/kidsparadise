<template>
	<div>
		<div class="w-100 login-pre"><br>
			<div class="container-fluid head text-center">
				<!-- <a href="javascript:void(0)" :to="{name: 'home'}"><img src="/img/logo.gif" alt="Kidsparadise logo"></a> -->
				<router-link :to="{name: 'home'}"><img src="/img/logo.gif" alt="Kidsparadise logo"></router-link>
			</div>
			<div class="container m-auto login-wrapper">
				<div class="login-pre-body">
					<h5 class="login-header">Login</h5>
					<form action="" class="login-pre-form" method="POST" @submit.prevent="login()">
						<div class="form-group">
							<label for="logname" class="required">Full Name</label>
							<input type="text" v-model="cusName" class="form-control inputBox" id="logname" placeholder="Enter your full name" readonly>
							<div class="invalid-feedback d-block">
								<!-- {{errors.get('cusName')}} -->
							</div>
						</div>
						<div class="form-group">
							<label for="logmobile" class="required">Mobile No.</label>
							<div style="display: flex;">
								<input type="text" value="+88" class="form-control emailORphoneINPUT" id="logmobile" placeholder="Enter your valid mobile no." readonly style="width: 12%; margin-right: 15px;">
								<input type="text" v-model="mobile" class="form-control emailORphoneINPUT" id="mobile" placeholder="Enter your valid mobile no." readonly>
							</div>
							<div class="invalid-feedback d-block">
								<!-- {{errors.get('mobile')}} -->
							</div>
						</div>
						<div class="form-group">
							<label for="logpass" class="required">Password</label>
							<input type="password" v-model="cusPass" class="form-control inputBox" id="logpass" placeholder="Enter your password">
							<div class="invalid-feedback d-block">
								<!-- {{errors.get('cusEmail')}} -->
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="action-button btn form-control" value="Login">
						</div>
					</form>
					<p class="continue-with">or Continue With</p>
					<div class="social-action">
						<a href="" class="social-login-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
						<a href="" class="social-login-gm"><i class="fab fa-google"></i> Google</a>
					</div>
					<p class="register-new"><a href="">New to Kidsparadise? Register Here</a></p>
					<p class="agree-text">By continuing, you agree to Firstcry's <a href="https://www.firstcry.com/termsofuse" target="_self">Conditions of Use</a> and <a href="https://www.firstcry.com/privacypolicy" target="_self">Privacy  Notice.</a></p>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	class Errors{
		constructor(){
			this.errors = {};
		}

		get(field){
			if (this.errors[field]) {
				return this.errors[field][0];
			}
		}

		record(errors){
			this.errors = errors.errors;
		}
	}

	export default {
		data(){
			return {
				cusName: this.$route.params.name,
				mobile: this.$route.params.mn,
				cusEmail: '',
				cusPass: ''
			}
		},
		mounted(){
		},
		methods:{
			login(){
				if (this.mobile == '' || typeof this.mobile === 'undefined') {
					this.$router.push({name:'preLogin'})
				}
			// axios.post('/api/checkloginpre', {
			// 	mobile: this.mobile
			// })
			// .then((response) => {
			// 	console.log(response.data);
			// 	if (response.data == true) {
			// 		this.$router.push({path:'/', params: { userId: '123' }})
			// 	}
			// 	else {
			// 		this.failed = 'Number not matched'
			// 	}
			// })
			// .catch(error => this.errors.record(error.response.data));
		}
	}
}
</script>