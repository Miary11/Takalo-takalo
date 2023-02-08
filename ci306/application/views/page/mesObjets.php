<form action="get">
   <section class="banner-area organic-breadcrumb">
        <div class="container">
            <h1>Vos objets</h1>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Objet</th>
                                <th scope="col">Prix Approximatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listeObjet as $liste) {?>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="<?php echo base_url($liste['image']);?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p><?php echo $liste['nom']?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?php echo $liste['prix']?> Ar</h5>
                                    </td>
                                    <td>
                                        <div class="choix">
                                            <div class="card_area ">
                                               <a class="primary-btn" href="<?php echo base_url('objet/détails');?>?i=<?php echo $liste['idObjet']?>">Voir</a>
                                            </div>
                                            
                                        </div>
                                    </td>
                              
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</form>