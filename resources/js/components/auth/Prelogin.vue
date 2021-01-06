<template>
	<div>
		<div class="w-100 login-pre"><br>
			<div class="container-fluid head text-center">
				<!-- <a href="javascript:void(0)" :to="{name: 'home'}"><img src="/img/logo.gif" alt="Kidsparadise logo"></a> -->
				<router-link :to="{name: 'home'}"><img src="/img/logo.gif" alt="Kidsparadise logo"></router-link>
			</div>
			<div class="container m-auto login-wrapper">
				<div class="login-pre-body">
					<h5 class="login-header">Login/Register</h5>
					<form action="" class="login-pre-form" method="POST" @submit.prevent="checkLoginID()">
						<div class="form-group">
							<label for="mobile">Mobile No.</label>
							<input type="text" v-model="mobile" class="form-control emailORphoneINPUT" id="mobile" placeholder="Enter your valid mobile no.">
							<div class="invalid-feedback d-block">
								{{errors.get('mobile')}} {{failed}}
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="action-button btn form-control" value="Continue">
						</div>
					</form>
					<p class="continue-with">or Continue With</p>
					<div class="social-action">
						<a href="" class="social-login-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
						<a href="" class="social-login-gm"><i class="fab fa-google"></i> Google</a>
					</div>
					<!-- <p class="register-new"><a href="">New to Kidsparadise? Register Here</a></p> -->
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
    metaInfo: {
      title: 'PreLogin',
      titleTemplate: '%s - Yay!',
      htmlAttrs: {
        lang: 'en',
        amp: true
      }
    },
	data(){
		return {
			mobile: '',
			errors: new Errors(),
			failed: ''
		}
	},
	mounted(){
	},
	methods:{
		checkLoginID(){
			axios.post('/api/checkloginpre', {
				mobile: this.mobile
			})
			.then((response) => {
				console.log(response.data);
				if (response.data[0] == true) {
					this.$router.push({name:'login', params: { mn: response.data[1], name: response.data[2] }})
				}
				else if(response.data[0] == false) {
					this.$router.push({name:'register', params: { mn: response.data[1] }})
				}
				else {
					return 0;
				}
			})
			.catch(error => this.errors.record(error.response.data));
		}
	}
}
</script>