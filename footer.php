      <footer>
       
      
        <nav>
          <?php 
            wp_nav_menu ([
            'theme_location' => 'footer',
            "menu_class" => "menu-footer"
          ]);?>
          
        </nav>
        
      </footer>
      
    </div>
    <?php wp_footer(); ?>
  </body>
</html>