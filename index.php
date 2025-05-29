<?php include('includes/header.php'); ?>

<!-- Tambahin style responsif -->
<style>
  @media (max-width: 768px) {
    #productGrid, 
    #facilitiesGrid {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      gap: 1rem;
      padding-bottom: 1rem;
    }
    #productGrid > div,
    #facilitiesGrid > div {
      flex: 0 0 auto;
      width: 250px;
      scroll-snap-align: start;
    }
    /* Smooth animations */
    .transition {
      transition: all 0.3s ease;
    }
  }
  img {
    max-width: 100%;
    height: auto;
  }
  html {
    scroll-behavior: smooth;
  }
</style>

<!-- HERO SECTION -->
<section class="relative w-full h-screen overflow-hidden">
  <!-- Background Image -->
  <div id="bg-image" class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/images/bg.png');"></div>

  <!-- Video -->
  <video id="bg-video" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000" muted playsinline>
    <source src="assets/videos/bg_video.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>


  <!-- Hero Content -->
  <div id="hero-content" class="relative z-10 max-w-5xl mx-auto  pt-40 pb-20 px-4 py-20 md:py-32 text-white text-center opacity-100 transition-opacity duration-1000">

    <h2 class="text-4xl sm:text-5xl md:text-7xl lg:text-9xl xl:text-[19rem] pt-20 pb-20 font-helvetica font-bold mb-6 bg-gradient-to-r from-blue-800 to-yellow-400 bg-clip-text text-transparent">
      Reliable And Productive
    </h2>
    <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold mb-4">Professional Manufacturing</h3>
    <p class="text-base sm:text-lg mb-6">Specialist Precision Part, Jig, Machining & Fabrication</p>
    <a href="about.php" class="bg-blue-800 px-4 py-2 sm:px-6 sm:py-3 rounded-full font-semibold hover:bg-purple-700 transition">Find Out More</a>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const bgImage = document.getElementById('bg-image');
    const content = document.getElementById('hero-content');
    const bgVideo = document.getElementById('bg-video');
    const delayMs = 1000;

    // Pastikan elemen-elemen ditemukan
    if (bgImage && bgVideo && content) {
      setTimeout(() => {
        bgImage.style.opacity = 0;
        content.style.opacity = 1;
        bgVideo.style.opacity = 1;
        bgVideo.play();
      }, delayMs);

      bgVideo.addEventListener('ended', () => {
        bgImage.style.opacity = 1;
        content.style.opacity = 1;
        bgVideo.style.opacity = 0;
      });

      // Optional: Tambahkan hover/click untuk play ulang
      bgVideo.addEventListener('mouseenter', () => {
        bgVideo.currentTime = 0;
        bgVideo.play();
        bgVideo.style.opacity = 1;
      });

      bgVideo.addEventListener('click', () => {
        bgVideo.currentTime = 0;
        bgVideo.play();
        bgVideo.style.opacity = 1;
      });
    } else {
      console.warn('Elemen bgImage, bgVideo, atau content tidak ditemukan.');
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const counterEl = document.getElementById("counter");
    let current = 0;
    const target = 25;
    const speed = 50; // kecepatan animasi

    const updateCounter = () => {
      if (current < target) {
        current++;
        counterEl.textContent = current + "+";
        setTimeout(updateCounter, speed);
      } else {
        counterEl.textContent = target + "+";
      }
    };

    updateCounter();
  });
</script>

<!-- PRODUCT RANGE -->
<section class="relative py-20 bg-white">
  <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] rotate-180">
    <svg class="relative block w-full h-[70px]" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <polygon points="0,0 100%,0 0,100%" class="fill-white" />
    </svg>
  </div>

  <div class="max-w-7xl mx-auto px-4 text-left relative z-10">
    <h3 class="text-5xl font-mono italic text-blue-800 mb-16">PRODUCT RANGE</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10" id="productGrid">
      <?php
      $products = [
        ['img' => 'SPRUE_BUSH.png', 'name' => 'Sprue Bush', 'desc' => 'Essential for guiding molten material into molds.'],
        ['img' => 'SPRUE_CORE.png', 'name' => 'Sprue Core', 'desc' => 'Supports accurate and clean mold injection.'],
        ['img' => 'MIDDLE_GATE_PIN.png', 'name' => 'Middle Gate Pin', 'desc' => 'Ensures consistent flow and gate control.'],
        ['img' => 'MIDDLE_INSERT.png', 'name' => 'Middle Insert', 'desc' => 'Durable inserts for optimized performance.'],
        ['img' => 'MOVE_INSERT.png', 'name' => 'Move Insert', 'desc' => 'Precision parts to enhance mold movement.'],
        ['img' => 'NOZZLE.png', 'name' => 'Nozzle', 'desc' => 'Directs material flow with high precision.'],
      ];

      foreach ($products as $product) {
        echo '
        <div class="flex flex-col items-center text-center p-6 bg-white border border-indigo-500 rounded-lg shadow-sm hover:shadow-md transition">
          <img src="assets/images/'.$product['img'].'"
               alt="'.$product['name'].'"
               class="w-24 h-24 md:w-28 md:h-28 object-contain mb-6" />

          <h4 class="text-xl font-bold text-gray-900 mb-2">'.$product['name'].'</h4>
          <p class="text-gray-600 text-sm mb-4">'.$product['desc'].'</p>
          <a href="product.php" class="text-blue-600 font-medium inline-flex items-center hover:underline">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
            Explore products
          </a>
        </div>';
      }
      ?>
    </div>
  </div>
</section>


<!-- COMPANY INFO -->
<section class="bg-gradient-to-b from-blue-800 via-blue-800 to-blue">
  <div class="max-w-[90rem] mx-auto grid md:grid-cols-2 gap-14 items-center px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
    <div class="max-w-4xl mx-auto">
      <h3 class="text-yellow-300 font-extrabold var(--font-mono) text-3xl sm:text-4xl md:text-5xl mb-6 text-flex">
        PT INDOSEIKI <br>SUKSES MANDIRI
      </h3>
      <p class="text-white text-sm/6 text-sm sm:text-base md:text-lg mb-10 leading-relaxed text-justify">
        Didirikan pada tahun 2000, PT Indoseiki bertekad menjadi pemimpin dalam industri manufaktur nasional melalui inovasi berkelanjutan, efisiensi operasional, dan produk berkualitas tinggi. 
        Dengan dukungan manajemen yang profesional, tim produksi yang kompeten dan berpengalaman, serta pemanfaatan teknologi mesin produksi yang canggih, PT Indoseiki berkomitmen untuk membangun kemitraan strategis yang berkelanjutan dan terus beradaptasi dengan perkembangan teknologi serta dinamika industri modern.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
        <div class="bg-blue-700 shadow-lg p-4 sm:p-6 rounded-xl text-center">
          <p id="counter" class="font-extrabold text-xl sm:text-2xl text-yellow-300">0</p>
          <p class="text-sm sm:text-base text-white mt-2">Years of activity</p>
        </div>
        <div class="bg-blue-700 shadow-lg p-4 sm:p-6 rounded-xl text-center">
          <p id="counter1" class="font-extrabold text-xl sm:text-2xl text-yellow-300">Team</p>
          <p class="text-sm sm:text-base text-white mt-2">Professionals in the industry</p>
        </div>
        <div class="bg-blue-700 shadow-lg p-4 sm:p-6 rounded-xl text-center">
          <p class="font-extrabold text-xl sm:text-2xl text-yellow-300">State of the Art</p>
          <p class="text-sm sm:text-base text-white mt-2">Equipment</p>
        </div>
      </div>
    </div>

    <div class="mt-10 md:mt-0">
      <img src="assets/images/building.jpg" alt="Company Building"
           class="w-full h-auto object-cover rounded-2xl shadow-xl">
    </div>
  </div>
</section>

<!-- OUR FACILITIES -->
<section class="bg-cyan-100 py-10">
  <div class="max-w-[90rem] mx-auto px-4 sm:px-8">
    <h3 class="text-blue-800 text-center font-mono text-5xl mb-4">OUR FACILITIES</h3>
    <p class="text-gray-700 text-center text-lg mb-12 leading-relaxed">
      Perusahaan kami didukung oleh fasilitas produksi yang modern dan lengkap untuk menjamin kualitas serta efisiensi dalam setiap proses manufaktur.
      <br>Beberapa fasilitas utama yang kami miliki antara lain:
    </p>

    <div id="facilitiesGrid" class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
      <?php
      $mesin_list = [
        ['img' => 'bubut_manual.png', 'desc' => 'Mesin Bubut Manual'],
        ['img' => 'clynder.png', 'desc' => 'Mesin Clynder Grinding'],
        ['img' => 'cnc_lathes.png', 'desc' => 'CNC Lathes'],
        ['img' => 'cnc_milling_quaser.png', 'desc' => 'CNC Milling Quaser'],
        ['img' => 'cnc_milling.png', 'desc' => 'CNC Milling'],
        ['img' => 'wirecute.png', 'desc' => 'Wirecut Machine'],
        ['img' => 'contracer.png', 'desc' => 'Contracer Machine'],
        ['img' => 'refrigator.png', 'desc' => 'Refrigerator Unit'],
        ['img' => '3d.png', 'desc' => '3D Measuring Machine'],
        ['img' => 'surface-manual.png', 'desc' => 'Manual Surface Grinder'],
        ['img' => 'surface.png', 'desc' => 'Automatic Surface Grinder'],
        ['img' => 'edm.png', 'desc' => 'EDM Machine'],
      ];
      foreach ($mesin_list as $mesin) {
        echo '
          <div class="bg-white p-6 shadow-lg rounded-lg text-center border-l-indigo-500 border-indigo-200 hover:border-blue-500 hover:shadow-xl hover:shadow-blue-500/30 transition duration-300">
            <img src="assets/images/'.$mesin['img'].'" alt="'.$mesin['desc'].'" class="mx-auto h-44 object-contain mb-4" />
            <div class="flex justify-between items-center mt-4">
              <div class="bg-blue-800 text-white p-2 rounded-l-md text-xs font-bold w-1/2">'.$mesin['desc'].'</div>
              <div class="bg-yellow-300 text-gray-800 p-2 rounded-r-md text-xs font-medium w-1/2">Spesifikasi Mesin</div>
            </div>
          </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- CUSTOMERS -->
<section class="bg-white py-15">
  <div class="common-section text-center">
    <h3 class="text-blue-800 font-mono text-5xl mb-4">OUR CUSTOMERS</h3>
    <p class="text-gray-600 text-lg font-medium mb-10">Trusted by industry leaders and manufacturing partners</p>

    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 items-center justify-center">
      <?php
      $customers = [
        'sannohashi.png',
        'YAMAHA.jpg',
        'united tractor.png',
        'SKF.png',
        'Hitachi.png',
        'musashi.png',
        'inkoasku.png',
        'akebono.png',
        'oneject.png',
        'maruichi.png',
        'panasonic.png',
        'chemicon.png',
        'sugity.png',
        'furukawa.png',
        'tjforge.jpeg',
      ];
      foreach ($customers as $logo) {
        echo '
          <div>
            <img src="assets/images/'.$logo.'" alt="Customer Logo" class="h-20 mx-auto object-contain" />
          </div>';
      }
      ?>
    </div>
  </div>
</section>
</section>
<script>
  const video = document.getElementById('bg-video');

  // Play ulang ketika mouse hover
  video.addEventListener('mouseenter', () => {
    video.currentTime = 0; // mulai dari awal
    video.play();
  });

  // Play ulang ketika diklik
  video.addEventListener('click', () => {
    video.currentTime = 0;
    video.play();
  });
</script>
<?php include('includes/footer.php'); 
        