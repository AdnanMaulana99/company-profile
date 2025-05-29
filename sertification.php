<?php include('includes/header.php'); ?>

<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-6 text-left">
    <h2 class="text-3xl font-bold text-red-700 mb-6">Certifications & Authorizations</h2>
    <p class="text-gray-700 mb-10">Kami menunjukkan berbagai sertifikat resmi sebagai bentuk transparansi dan kualitas kami.</p>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <?php
        $certs = ['cert1.png', 'cert2.png', 'cert3.png', 'cert4.png'];
        foreach ($certs as $cert) {
          echo '<img src="assets/images/'.$cert.'" alt="Certificate" class="h-48 mx-auto object-contain shadow-md rounded">';
        }
      ?>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
