<!-- Navigation -->
<nav id="navbar" class="sticky-nav px-6 py-4 <?php echo $navClass ?? 'bg-transparent'; ?>">
  <div class="container mx-auto flex justify-between items-center">
    <a href="index.php" class="flex items-center">
      <div class="text-3xl font-bold"><span class="text-blue-600">Data</span><span class="text-gray-800">First</span></div>
    </a>

    <div class="hidden lg:flex space-x-8">
      <a href="<?php echo $isHomePage ? '#services' : 'index.php#services'; ?>" class="text-gray-800 hover:text-blue-600 font-medium transition-colors">Services</a>
      <a href="<?php echo $isHomePage ? '#about' : 'index.php#about'; ?>" class="text-gray-800 hover:text-blue-600 font-medium transition-colors">About</a>
      <a href="<?php echo $isHomePage ? '#blog' : 'index.php#blog'; ?>" class="text-gray-800 hover:text-blue-600 font-medium transition-colors">Blog</a>
      <a href="<?php echo $isHomePage ? '#contact' : 'index.php#contact'; ?>" class="text-gray-800 hover:text-blue-600 font-medium transition-colors">Contact</a>
    </div>

    <div class="hidden lg:block">
      <a href="<?php echo $isHomePage ? '#contact' : 'index.php#contact'; ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full transition-colors">
        Get Free Consultation
      </a>
    </div>

    <button id="mobile-menu-button" class="lg:hidden text-gray-800">
      <i class="fas fa-bars text-2xl"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden hidden bg-white absolute left-0 right-0 shadow-lg z-20">
    <div class="container mx-auto px-6 py-4 space-y-4">
      <a href="<?php echo $isHomePage ? '#services' : 'index.php#services'; ?>" class="block text-gray-800 hover:text-blue-600 font-medium transition-colors">Services</a>
      <a href="<?php echo $isHomePage ? '#about' : 'index.php#about'; ?>" class="block text-gray-800 hover:text-blue-600 font-medium transition-colors">About</a>
      <a href="<?php echo $isHomePage ? '#blog' : 'index.php#blog'; ?>" class="block text-gray-800 hover:text-blue-600 font-medium transition-colors">Blog</a>
      <a href="<?php echo $isHomePage ? '#contact' : 'index.php#contact'; ?>" class="block text-gray-800 hover:text-blue-600 font-medium transition-colors">Contact</a>
      <a href="<?php echo $isHomePage ? '#contact' : 'index.php#contact'; ?>" class="block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full transition-colors text-center">
        Get Free Consultation
      </a>
    </div>
  </div>
</nav>