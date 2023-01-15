      <footer>
       
        <nav class="menu-footer">

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
  </body>
</html>