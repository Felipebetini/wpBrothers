<?php defined('ABSPATH') || exit('Forbidden'); ?>

<header class="bg-white  py-4 fixed w-full top-0 z-50 ">
  <div class="container mx-auto px-4 flex items-center justify-between">

    <!-- Logo -->
    <div class="flex-grow md:flex-grow-0 text-center md:text-left">
      <a href="<?= home_url(); ?>" class="">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/Logo.svg" alt="Logo" class="h-8">
      </a>
    </div>

    <!-- Navigation Menu -->
    <div class="hidden md:flex items-center space-x-10 text-btn-base text-font-body">
      <nav class="space-x-6 hover:text-btn-hover">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary_menu',
          'container' => false,
          'menu_class' => 'flex space-x-6  hover:text-primary-hover',
          'fallback_cb' => false
        ]);
        ?>
      </nav>

      <!-- Dropdown -->
      <div class="relative">
        <div class="flex justify-center ">
          <button id="dropdown-button" class="py-2 bg-gray-200 rounded-md px-4 hover:text-btn-primary-hover">
            Dropdown
            <i class="fa-solid fa-chevron-down text-brand1-500 h-3 ml-1 pb-1"></i>
          </button>
        </div>

        <!-- Dropdown items -->
        <div id="dropdown-items" class="absolute hidden bg-white shadow-md mt-2 rounded-md w-40">
          <a href="#" class="block px-4 py-2 text-btn-base hover:text-btn-primary-hover">Item 1</a>
          <a href="#" class="block px-4 py-2 text-btn-base hover:text-btn-primary-hover">Item 2</a>
          <a href="#" class="block px-4 py-2 text-btn-base hover:text-btn-primary-hover">Item 3</a>
        </div>
      </div>



      <!-- Search Input -->
      <form action="<?= esc_url(home_url('/search')); ?>" method="get" class="relative border border-neutral-200 px-2 w-[280px] flex items-center gap-2 transition-all 
         focus-within:border-primary-active focus-within:shadow-md rounded-sm hover:border-primary-hover">
        <i class="fa-solid fa-magnifying-glass text-primary"></i>
        <input type="text" name="s"
          class="px-4 py-2 rounded-md outline-none focus:ring-0 focus:border-transparent placeholder:font-normal"
          placeholder="Zoeken naar...." id="search-input">
        <button type="submit" class="hidden"></button>
      </form>



      <!-- Login Button -->
      <button type="submit"
        class="bg-btn-primary-idle hover:bg-btn-primary-hover text-white py-3 w-[96px] rounded-full ">Contact</button>
    </div>

    <!-- Hamburger Menu  -->
    <div class="md:hidden">
      <button id="mobile-menu-button" class="text-primary focus:outline-none">
        <i id="menu-icon" class="fa-solid fa-bars text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden bg-white shadow-md hidden">
    <nav class="px-4 py-6">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container' => false,
        'menu_class' => 'flex flex-col space-y-4',
        'fallback_cb' => false
      ]);
      ?>

      <!-- Mobile Dropdown -->
      <!-- Mobile Dropdown -->
      <div class="mt-4">
        <button id="mobile-dropdown-button" class="py-2 bg-gray-200 rounded-md">
          Dropdown
          <i class="fa-solid fa-chevron-down text-primary"></i>
        </button>
        <div id="mobile-dropdown-items" class="mt-2 pl-4 hidden">
          <a href="#" class="block py-2 hover:bg-gray-100">Item 1</a>
          <a href="#" class="block py-2 hover:bg-gray-100">Item 2</a>
          <a href="#" class="block py-2 hover:bg-gray-100">Item 3</a>
        </div>
      </div>


      <!-- Mobile Search -->
      <form action="<?= esc_url(home_url('/search')); ?>" method="get" class="relative border border-neutral-200 px-2 w-[280px] flex items-center gap-2 transition-all 
         focus-within:border-primary-active focus-within:shadow-md rounded-sm hover:border-primary-hover">
        <i class="fa-solid fa-magnifying-glass text-primary"></i>
        <input type="text" name="s"
          class="px-4 py-2 rounded-md outline-none focus:ring-0 focus:border-transparent placeholder:font-normal"
          placeholder="Zoeken naar...." id="search-input">
        <button type="submit" class="hidden"></button>
      </form>



      <!-- Mobile Login Button -->
      <button type="submit"
        class="w-full mt-4 bg-primary text-white py-3 px-4 rounded-full font-semibold">Contact</button>
    </nav>
  </div>
</header>