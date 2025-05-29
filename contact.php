<?php include('includes/header.php'); ?>
<section class="bg-linear-to-r from-cyan-500 to-blue-500 py-16">
  <div class="max-w-4xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-blue-800 mb-10 text-center">Get in Touch</h2>

    <form 
      action="https://formsubmit.co/indoseiki-mfg@indoseiki-sukses-mandiri.com"
      method="POST" 
      class="bg-white p-8 rounded-2xl shadow-xl space-y-6"
      onsubmit="showSuccessPopup()" 
      target="_blank"
    >
      <!-- Hidden fields -->
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_next" value="http://localhost/company-profile/contact.php">

      <!-- Full Name -->
      <div>
        <label for="name" class="block font-semibold mb-2 text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" required
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
               placeholder="Enter your full name">
      </div>

      <!-- No Telpon -->
      <div>
        <label for="telpon" class="block font-semibold mb-2 text-gray-700">No Telpon</label>
        <input type="text" id="telpon" name="telpon" required
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
               placeholder="Enter your No Telpon">
      </div>

      <!-- Email (Readonly) -->
      <div>
        <label for="email" class="block font-semibold mb-2 text-gray-700">To</label>
        <input type="email" id="email" name="email" required
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none  focus:ring-2 focus:ring-blue-500 transition duration-200"
               placeholder="input your email">
      </div>

      <!-- Subject -->
      <div>
        <label for="subject" class="block font-semibold mb-2 text-gray-700">Subject</label>
        <input type="text" id="subject" name="subject" required
               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
               placeholder="Subject of your message">
      </div>

      <!-- Message -->
      <div>
        <label for="message" class="block font-semibold mb-2 text-gray-700">Message</label>
        <textarea id="message" name="message" rows="5" required
                  class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
                  placeholder="Type your message here..."></textarea>
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit"
                class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-full shadow-md transition duration-300">
          Send Message
        </button>
      </div>
    </form>
  </div>

  <!-- Success Popup Modal -->
  <div id="successPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md text-center">
      <h2 class="text-2xl font-bold text-green-600 mb-4">Message Sent!</h2>
      <p class="text-gray-700 mb-6">Thank you for reaching out. We’ll get back to you soon.</p>
      <button onclick="closeSuccessPopup()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
        OK
      </button>
    </div>
  </div>
</section>

<script>
  function showSuccessPopup() {
    setTimeout(() => {
      document.getElementById("successPopup").classList.remove("hidden");
    }, 700); // delay agar tab baru kebuka dulu
  }

  function closeSuccessPopup() {
    document.getElementById("successPopup").classList.add("hidden");
  }
</script>


<?php include('includes/footer.php'); ?>
