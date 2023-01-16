<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <?php wp_head(); ?> <!--TRES IMPORTANT-->
  </head>
<!-- section fond avec image -->

<body class="body_login">
    <main>
        
        <div class="bloc_logo">
                <div class="">
                    <img class="logo_landing" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/logo_naknow.svg" alt="logo de Naknowledge">
                </div>
                <div class="">
                    <a class="inscription_landing" href="https://davidsarkissian.fr/register/">S'inscrire</a>
                </div>
        </div>

        <div class="bg_img">
            <img class="img_mobile" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page_fond.png" alt="image de fond pour l'accueil">
            <img class="img_pc" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page_fond_pc.png" alt="image de fond pour l'accueil">

            <h2 class="titre_landing">
                Améliorez et partagez
                vos connaissances avec
                Naknowledge
            </h2>
    
            <div class="bloc_center_bouton_landing">
                <div class="bloc_bouton_landing">
                    <img src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/logo_naknow.svg" alt="logo naknowledge">
                    <a href="<?= get_post_type_archive_link('post')?>">Découvrir les Naknowleçons</a>
                </div>
            </div>
    
            <div class="bloc_center_bouton_landing">
                <div class="bloc_bouton_landing">
                    <img src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/logo_naknow.svg" alt="logo naknowledge">
                    <a href="https://davidsarkissian.fr/log-in/">Partagez vos Naknowleçons</a>
                </div>
            </div>
        </div>


        <div class="bloc_info">
            
            <div class="info_text">
                <h2 class="info_text-titre">Apprenez</h2>
                
                <div class="bloc_info-deco deco_1"></div>
                <div class="bloc_info-deco deco_2"></div>
                
                <p class="info_text_paragraphe">Avec Naknowledge, apprenez quand vous voulez, où que vous soyez.</p>
                <p class="info_text_paragraphe">Dans les transports en commun, durant votre pause du midi ou encore dans une salle d’attente, n’hésitez plus et améliorez vos connaissances en quelques minutes.</p>
                <p class="info_text_paragraphe">Sur votre ordinateur, votre téléphone ou votre tablette, Naknowledge est là pour vous.</p>
            </div>
            
            
            <div class="info_img">
                <div class="bloc_info-deco deco_3"></div>
                <div class="bloc_info-deco deco_4"></div>

                <img class="info_img-img info_img-img_1" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page-apprenez_1.jpg" alt="photo d'un utilisateur de naknowledge dans le bus">
                <img class="info_img-img info_img-img_2" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page-apprenez_2.jpg" alt="photo d'un utilisateur de naknowledge à son burreau">
            </div>
        </div>

        <div class="bloc_info">
            
            <div class="info_text">
                <h2 class="info_text-titre">Partagez</h2>
                
                <div class="bloc_info-deco deco_1"></div>
                <div class="bloc_info-deco deco_2"></div>
                
                <p class="info_text_paragraphe">Partagez vos connaissances en tous genres avec les autres utilisateurs !</p>
                <p class="info_text_paragraphe">Offrez la possibilité à n’importe qui d’apprendre.</p>
                <p class="info_text_paragraphe">Rien de plus simple puisque Naknowledge vous aide à publier vos leçons pour qu’elles soient plus attractives.</p>
            </div>
            
            
            <div class="info_img">
                <div class="bloc_info-deco deco_3"></div>
                <div class="bloc_info-deco deco_4"></div>

                <img class="info_img-img info_img-img_1" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page-partagez_1.jpg" alt="photo d'un utilisateur de naknowledge dans le bus">
                <img class="info_img-img info_img-img_2" src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/landing_page-partagez_2.jpg" alt="photo d'un utilisateur de naknowledge à son burreau">
            </div>
        </div>
        
    </main>


</body>

<!-- <a href="<?= get_post_type_archive_link('post')?>"> Voir les leçons </a> -->



<footer>
       
       <nav class="menu-footer landing_menu-footer">

         <a href="https://davidsarkissian.fr/">Naknowledge</a>

         <div class="footer_contact">
           <div class="footer_contact-items">
             
             <img src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/icone_insta.svg" alt="icone instgram">
             <img src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/icone_tiktok.svg" alt="icone tiktok ">
             <img src="https://davidsarkissian.fr/wp-content/themes/underscore-child/images/icones/icone_fb.svg" alt="icone facebool ">
           </div>

           <a href="#">naknowledge@gmail.com</a>
         </div>

         <div class="footer_pages_info">
           <?php 
             wp_nav_menu ([
             'theme_location' => 'footer',
             "menu_class" => "menu-footer"
           ]);?>
         </div>
       </nav>
       
     </footer>
     
   </div>
   <?php wp_footer(); ?>

</html>