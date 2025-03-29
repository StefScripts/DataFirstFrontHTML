<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
  <div class="container mx-auto px-6">
    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-12">
      <div class="col-span-1 lg:col-span-1">
        <div class="text-3xl font-bold mb-6"><span class="text-blue-400">Data</span><span>First</span></div>
        <p class="text-gray-400 mb-6">Helping B2B companies transform their digital presence into a predictable source of revenue.</p>
        <div class="flex space-x-4">
          
            href="https://ca.linkedin.com/company/datafirstseo"
            class="bg-gray-800 hover:bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center transition-colors"
          >
            <i class="fab fa-linkedin-in"></i>
          </a>
          
            href="https://www.facebook.com/DataFirstSEO"
            class="bg-gray-800 hover:bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center transition-colors"
          >
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>

      <div>
        <h4 class="text-xl font-bold mb-6">Services</h4>
        <ul class="space-y-3">
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">Technical SEO</a></li>
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">Keyword Research</a></li>
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">Content Strategy</a></li>
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">On-Page Optimization</a></li>
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">Link Building</a></li>
          <li><a href="index.php#services" class="text-gray-400 hover:text-white footer-link block">Analytics & Reporting</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-xl font-bold mb-6">Resources</h4>
        <ul class="space-y-3">
          <li><a href="index.php#blog" class="text-gray-400 hover:text-white footer-link block">Blog</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white footer-link block">Guides & Ebooks</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white footer-link block">SEO Calculator</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white footer-link block">Industry Reports</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-xl font-bold mb-6">Contact</h4>
        <ul class="space-y-3 text-gray-400">
          <li class="flex items-start">
            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
            <span>#209-418 East Broadway<br />Vancouver, BC V5T 1X2</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-envelope mt-1 mr-3"></i>
            <a href="mailto:stefan@datafirstseo.com" class="hover:text-white transition-colors">stefan@datafirstseo.com</a>
          </li>
          <li class="flex items-start">
            <i class="fas fa-phone mt-1 mr-3"></i>
            <span>(604) 555-1234</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-12 pt-8 border-t border-gray-800 text-center">
      <p class="text-gray-400">&copy; <?php echo date('Y'); ?> DataFirst SEO. All rights reserved.</p>
      <div class="mt-4 flex justify-center space-x-6">
        <a href="terms-of-service.php" class="text-sm <?php echo $currentPage === 'terms' ? 'text-white hover:text-blue-400' : 'text-gray-400 hover:text-white'; ?>">Terms of Service</a>
        <a href="privacy-policy.php" class="text-sm <?php echo $currentPage === 'privacy' ? 'text-white hover:text-blue-400' : 'text-gray-400 hover:text-white'; ?>">Privacy Policy</a>
        <a href="#" class="text-sm text-gray-400 hover:text-white">Sitemap</a>
      </div>
    </div>
  </div>
</footer>