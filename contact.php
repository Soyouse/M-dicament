<?php
    include ("header.php");
?>
  <section class="container position-absolute translate-middle bg-op top-50 start-50 ">


<!-- GRILLE COORDONEES + FORUMUALIRE -->
<div class="row m-5 d-flex justify-content-center">
    <!-- GRILLE COORDONNEES -->
    <div class="col-md-9 ">
        <h2 class="h1-responsive text-white my-1 pb-1 text-center">Formulaire de contact</h2>
        <form name="contact-form" id="formulaire" class="text-center mt-5">

            <!--Grid row-->
            <?php include 'form.php' ?>

            <!--Grid row-->
            <div class="row mt-4 ms-0">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea name="message" rows="6" id="InputMessage" class="form-control bg-body-secondary rounded-0 text-uppercase " placeholder="Votre Message"></textarea>
                    </div>

                </div>
            </div>
            <!--Grid row-->
            
            <div class="mt-4 text-center">
                <button type="submit"  class="btn btn-primary gold rounded-0 w-20 text-uppercase">Envoyer</button>
            </div>
        </form>

    </div>

</div>


<?php include 'form.php' ?>
