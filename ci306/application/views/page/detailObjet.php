<?php foreach ($detailsObjet as $detail) {?>
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo base_url($detail['image'])?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo base_url($detail['image'])?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo base_url($detail['image'])?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $detail['nom']?></h3>
						<h2><?php echo $detail['prix']?> Ar</h2>
						<ul class="list">
							<li><a class="active" href="<?php echo base_url('user/mesObjets')?>"><span>Categorie</span> : <?php echo $detail['CategorieNom']?></a></li>

						</ul>
						<p><?php echo $detail['description']?></p>
				
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php }?>
