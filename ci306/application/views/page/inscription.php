	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?php echo base_url();?>assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>Créer un compte</h4>
							<p>Rejoignez nous pour pouvoir échanger des produits</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Inscription</h3>
						<form class="row login_form" action="<?php echo base_url('welcome/sendInscription');?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="mail" name="mail" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'">
							</div>

							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Valider</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>