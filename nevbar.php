<?php
// Function to generate dynamic paths using $_SERVER variables
function getNavPath($path) {
    $baseDir = $_SERVER['DOCUMENT_ROOT'];
    $siteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
    $currentScriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
    
    // For anchor links, just return the anchor
    if (strpos($path, '#') === 0) {
        return $path;
    }
    
    // Check if file exists in current directory
    if (file_exists($currentScriptDir . '/' . $path)) {
        // Determine relative path from document root
        $relativePath = str_replace($baseDir, '', $currentScriptDir) . '/' . $path;
        return $siteURL . $relativePath;
    }
    
    // Check if file exists in document root
    if (file_exists($baseDir . '/' . $path)) {
        return $siteURL . '/' . $path;
    }
    
    // Check common subdirectories
    $commonDirs = ['pages/', 'views/', 'templates/'];
    foreach ($commonDirs as $dir) {
        if (file_exists($baseDir . '/' . $dir . $path)) {
            return $siteURL . '/' . $dir . $path;
        }
    }
    
    // Fallback to home for PHP files
    if (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
        return $siteURL . '/index.php'; 
    }
    
    // Default fallback
    return $siteURL;
}

// Get the current script name to highlight active nav item
$currentPage = basename($_SERVER['PHP_SELF']);

// Navigation items array - easy to maintain and modify
$navItems = [
    ['text' => 'Product', 'path' => '#product', 'hasDropdown' => true],
    ['text' => 'Features', 'path' => 'privacy.php', 'hasDropdown' => true],
    ['text' => 'Enterprise', 'path' => '#Enterprise', 'hasDropdown' => false],
    ['text' => 'Pricing', 'path' => 'pricing.php', 'hasDropdown' => false],
    ['text' => 'Docs', 'path' => 'askto.php', 'hasDropdown' => false],
    ['text' => 'Contact', 'path' => '#Contact', 'hasDropdown' => false],
];
?>

<nav class="flex h-[64px] pl-[20px] pr-[20px] sm:pl-[50px] sm:pr-[50px] border-b-2 border-[#353131] w-full items-center justify-between fixed bg-white z-30 lg:relative">
  
  <div class="left-side flex items-center justify-between lg:w-[65%]">
    <a
    data-aos="fade-up"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
    href="<?php echo getNavPath('index.php'); ?>"><div class="h4 text-primary font-bold lg:text-[16px] xl:text-xl">Campaigning Tool</div></a>
    <div class="list-nav hidden lg:flex lg:gap-3 items-center gap-5 ml-5">
      <?php foreach ($navItems as $item): ?>
      <span 
      data-aos="fade-up"
      data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="font-[500] text-[15.2px] <?php echo (basename($item['path']) === $currentPage) ? 'text-[#075E54] font-bold' : ''; ?>">
        <a href="<?php echo getNavPath($item['path']); ?>"><?php echo $item['text']; ?> 
          <?php if ($item['hasDropdown']): ?>
            <i class="ri-arrow-down-s-line"></i>
          <?php endif; ?>
        </a>
      </span>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="right-side hidden  lg:flex items-center gap-5 lg:w[35%]">
    <div
    data-aos="fade-up"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
    class="flex items-center gap-1 justify-center">
      <i class="ri-github-fill text-[28px]"></i>
      <span class="text-[12px]">77.1K</span>
    </div>
    <div  
    data-aos="fade-up"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
    class="sign-in-btn bg-black text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Sign in
    </div>
    <div 
    data-aos="fade-up"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
    class="bg-[#075E54] text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Start free trial
    </div>

    <!-- Mobile Menu Toggle Button -->
    
  </div>
  <button id="menu-toggle" class="lg:hidden text-2xl ml-2 z-50">
      <i id="menu-icon" class="ri-menu-line"></i>
    </button>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col p-6 gap-4 z-40">
    <?php foreach ($navItems as $item): ?>
    <span class="font-[500] text-[16px] <?php echo (basename($item['path']) === $currentPage) ? 'text-[#075E54] font-bold' : ''; ?>">
      <a href="<?php echo getNavPath($item['path']); ?>"><?php echo $item['text']; ?> 
        <?php if ($item['hasDropdown']): ?>
          <i class="ri-arrow-down-s-line"></i>
        <?php endif; ?>
      </a>
    </span>
    <?php endforeach; ?>

    <div class="flex flex-col gap-3 mt-4">
      <div class="flex items-center gap-2">
        <i class="ri-github-fill text-[24px]"></i>
        <span class="text-[12px]">77.1K</span>
      </div>
      <div class="bg-black text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Sign in</div>
      <div class="bg-[#075E54] text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Start free trial</div>
    </div>
  </div>

  <!-- Background overlay -->
  <div id="overlay" class="fixed inset-0 bg-black opacity-30 hidden z-30"></div>
</nav>