<?php defined('ABSPATH') || exit; ?>

<footer class="bg-brand3-500 text-white py-10">
  <div class="container mx-auto px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 ">
      <!-- Left Section (Company Info) -->
      <div class="text-center sm:text-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Wordmark.png" alt="WP Brothers"
          class=" mb-4 w-48 mx-auto sm:mx-0">
        <p class="text-sm">
          WP Brothers is een gespecialiseerd bureau op het gebied van het WordPress CMS en is onderdeel van Social
          Brothers.
        </p>
        <p class="mt-4 font-bold text-lg underline">030 737 09 02</p>
        <a href="mailto:info@wpbrothers.nl" class="text-white underline">info@wpbrothers.nl</a>
      </div>

      <!-- Footer Links -->
      <?php
      $headings = ["Heading", "Heading", "Heading"];
      foreach ($headings as $heading): ?>
        <div class="mt-8 md:mt-0 text-center ml-0 sm:ml-auto">
          <h4 class="font-semibold mb-3 text-lg"><?php echo $heading; ?></h4>
          <ul class="space-y-2">
            <?php for ($i = 0; $i < 3; $i++): ?>
              <li><a href="#" class="hover:underline transition duration-200"><span class=" text-neutral-0"><i
                      class="fa-solid fa-chevron-right w-3 h-3 mr-2"></i></span> Label</a></li>
            <?php endfor; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Section -->
    <div class=" mt-8 pt-4 flex flex-col md:flex-row justify-between items-center">
      <!-- Legal Links -->
      <div class="flex space-x-4 text-sm">
        <a href="#" class="hover:underline">Algemene voorwaarden</a>
        <a href="#" class="hover:underline">Privacy statement</a>
        <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container' => false,
          'menu_class' => 'flex space-x-6 ',
          'fallback_cb' => false
        ]);
        ?>
        <a href="#" class="hover:underline">Toegankelijkheidsverklaring</a>
      </div>

      <!-- Social Icons with Font Awesome -->
      <div class="flex space-x-4 mt-4 md:mt-0 text-xl">
        <a href="#" class="hover:text-gray-400"><i class="fab fa-facebook"></i></a>
        <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-gray-400"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-gray-400"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>