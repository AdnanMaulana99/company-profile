<?php include('includes/header.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Product Range Page -->
<section class="relative py-0 bg-white-500">
  <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] rotate-180">
    <svg class="relative block w-full h-[70px]" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <polygon points="0,0 100%,0 0,100%" class="fill-white" />
    </svg>
  </div>
<section class="relative py-10 md:h-[600px]">
  <!-- Background image -->
  <div class="absolute inset-0 bg-cover bg-center"
       style="background-image: url('assets/images/header.png');">
  </div>

  <!-- Content -->
  <div class="relative z-30 text-white px-4 md:px-10 pt-12 md:pt-32 text-left md:text-left">
    <h3 class="text-3xl md:text-5xl font-extrabold italic mb-6">
      PRODUCT RANGE
    </h3>
  </div>
</section>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12" id="productGrid">
      <?php
      $products = [
        ['img' => 'SPRUE_BUSH.png', 'name' => 'Sprue Bush', 'desc' => "Sprue bush adalah komponen penting dalam sistem pengecoran cetakan injeksi plastik. 
        Fungsinya adalah sebagai jalur awal tempat material plastik cair disuntikkan dari nozzle mesin injeksi ke dalam cetakan (mold).
         Komponen ini juga membantu menyegel antara nozzle mesin dengan cetakan agar tidak terjadi kebocoran material."],
        ['img' => 'SPRUE_CORE.png', 'name' => 'Sprue Core', 'desc' => 'Sprue core adalah bagian dari sistem saluran injeksi cetakan (mold) yang berfungsi membentuk lubang sprue pada cetakan. Komponen ini bekerja bersamaan dengan sprue bush untuk membentuk jalur masuk plastik cair dari nozzle ke runner. 
        Sprue core juga dapat membantu membentuk dan memfasilitasi pelepasan (ejecting) material dari jalur sprue setelah pendinginan..'],
        ['img' => 'MIDDLE_GATE_PIN.png', 'name' => 'Middle Gate Pin', 'desc' => 'Middle gate pin merupakan komponen presisi yang digunakan dalam cetakan injeksi plastik untuk membentuk saluran masuk (gate) dari runner ke cavity. Middle gate pin secara khusus digunakan untuk sistem gate tengah (center gate) pada produk berbentuk silinder atau simetris, seperti botol atau tutup plastik. 
        Komponen ini berfungsi juga sebagai elemen penutup yang dapat dilepas setelah proses injeksi selesai, sehingga gate dapat terputus secara otomatis.'],
        ['img' => 'MIDDLE_INSERT.png', 'name' => 'Middle Insert', 'desc' => 'Middle insert adalah bagian dari cetakan (mold) yang dirancang sebagai inti (insert) untuk membentuk bagian tengah dari produk cetakan plastik. Komponen ini biasanya dipasang di dalam cavity utama dan berfungsi membentuk detail bagian dalam produk, seperti ulir, lubang, atau kontur spesifik. 
        Middle insert juga dapat diganti secara modular untuk penyesuaian desain produk tanpa mengganti seluruh cetakan'],
        ['img' => 'MOVE_INSERT.png', 'name' => 'Move Insert', 'desc' => 'Move insert adalah bagian dari sistem cetakan injeksi plastik yang dapat bergerak atau bergeser secara horizontal atau diagonal untuk membentuk geometri yang tidak bisa dilepaskan oleh sistem cetakan konvensional (undercut).
         Komponen ini bekerja dengan mekanisme slide atau cam pin, dan secara otomatis akan membuka dan menutup saat proses injeksi berlangsung..'],
        ['img' => 'NOZZLE.png', 'name' => 'Nozzle', 'desc' => 'Nozzle adalah komponen penting dalam sistem injeksi plastik yang berfungsi sebagai penghubung antara mesin injeksi dan cetakan (mold). 
        Melalui nozzle inilah material plastik cair dialirkan secara presisi dari barrel mesin ke dalam sprue bush, kemudian menuju runner dan cavity cetakan.'],
      ];

      foreach ($products as $product) {
        echo '
        <div class="flex flex-col items-flex text-left p-8 bg-white">
          <img src="assets/images/'.$product['img'].'"
               alt="'.$product['name'].'"
              class="w-52 h-52 object-contain mb-6 transition-transform duration-300 hover:scale-105"/>
          <h4 class="text-left text-5xl font-bold text-grey mb-3">'.$product['name'].'</h4>
          <p class="text-gray-600 mb-5">'.$product['desc'].'</p>
          <a href="product.php" class="text-blue-600 font-medium inline-flex items-center hover:underline">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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


<?php include('includes/footer.php'); ?>