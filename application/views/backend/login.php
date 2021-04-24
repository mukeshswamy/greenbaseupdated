<div class="login">
	<div class="login__form">
		<div class="login__logo">
			<img src=<?php echo base_url('assets/images/logo.svg'); ?>
			alt="Logo" />
		</div>
		<form class="login__formField" id="loginForm">
			<div class="input-group mb-3">
				<input
					type="email"
					class="form-control"
					id="email"
					placeholder="email"
					aria-label="email"
					aria-describedby="basic-addon1"
					onfocus="alertD_None()"
					required
				/>
			</div>

			<div class="input-group mb-3">
				<input
					type="password"
					id="password"
					class="form-control"
					placeholder="password"
					aria-label="password"
					aria-describedby="basic-addon2"
					onfocus="alertD_None()"
					required
				/>
			</div>
			<p id="alertMessage" style="text-align: center"></p>
			<div class="login__button">
				<button type="submit" id="loginButton" class="btn btn-primary">
					login
				</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	function alertD_None() {
		$("#alertMessage").removeClass("alert alert-danger");
		$("#alertMessage").text(" ");
	}
	$(document).ready(() => {
		$("#loginForm").submit(function (e) {
			e.preventDefault();
			var fd = new FormData();
			fd.append("email", $("#email").val());
			fd.append("password", $("#password").val());
			$.ajax({
				type: "post",
				url: "Auth/login/",
				data: fd,
				processData: false,
				contentType: false,
				success: function (responce) {
					console.log(responce);
					if (responce.message === "Login Successfull") {
						window.location.href = "<?php echo base_url();?>dashboard";
					}
				},
				error: function (errorResponce) {
					console.log(errorResponce.responseJSON);
					$("#alertMessage").addClass("alert alert-danger");
					$("#alertMessage").text("Wrong Password or Email");
				},
			});
		});
	});
</script>
