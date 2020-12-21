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
							<label for="emailORphone">Email ID/Phone No.</label>
							<input type="text" v-model="emailORphone" class="form-control emailORphoneINPUT" id="emailORphone" placeholder="Enter your Email ID or Mobile No.">
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
					<p class="register-new"><a href="">New to Kidsparadise? Register Here</a></p>
					<p class="agree-text">By continuing, you agree to Firstcry's <a href="https://www.firstcry.com/termsofuse" target="_self">Conditions of Use</a> and <a href="https://www.firstcry.com/privacypolicy" target="_self">Privacy  Notice.</a></p>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				emailORphone: ''
			}
		},
		methods:{
			checkLoginID(){
				axios.post('./checkloginpre',{
					emailORphone : this.emailORphone
				})
			}
		}
	}
</script>