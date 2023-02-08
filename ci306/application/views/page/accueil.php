
<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<form method="post" action="<?php echo base_url('user/mesObjets')?>">
							<input type="text" name="id" value="<?php echo $id ?>"hidden>
							<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Bienvenue</h1>
									<p>Nous offrons un système d'échange unique à nos adhérants. Notre système permet à des utilisateurs d'échanger leurs objets. Ce système permet aux différents utilisateurs d'échanger plusieurs types d'objets.</p>
									<div class="card_area d-flex align-items-center">
										<button>Voir mes objets</button>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo base_url();?>assets/img/Illustration.png" alt=""height="80px">
								</div>
							</div>
						</div>
						</form>
						<!-- single-slide -->
						<form method="post" action="<?php echo base_url('user/leursObjets')?>">
							<input type="text" name="id" value="<?php echo $id ?>"hidden>
							<div class="row single-slide align-items-center d-flex">
								<div class="col-lg-5 col-md-6">
									<div class="banner-content">
										<h1>Notre Système</h1>
										<p>Depuis près de 2 ans, plus de 100000 utilisateurs se sont inscrits à notre site pour pouvoir profiter de nos services. Près de 12000 échanges se font sur le site par mois depuis son ouverture.</p>
										<div class="card_area d-flex align-items-center">
											<button>Échanger</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="banner-img">
										<img class="img-fluid" src="<?php echo base_url();?>assets/img/Illustration.png" alt=""height="80px">
									</div>
								</div>
							</div>
						</form>
						<!-- single-slide -->
					</div>
				</div>
			</div>
		</div>
	</section>
