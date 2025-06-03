<!-- contact.php -->
<?php
// Contoh PHP sederhana (jika kamu butuh)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-orange to-blue-50 text-gray-800 font-sans">

  <!-- Header Title -->
  <section class="text-center py-12">
    <h1 class="text-4xl font-bold text-orange-950">Pesan dan Kesan</h1>
    <p class="text-lg mt-2">We would love to hear from you.</p>
  </section>

  <!-- Contact Section -->
  <section class="max-w-6xl mx-auto px-6 md:flex md:gap-8 py-10">
  <!-- Contact Info -->
 <div class="relative rounded-lg p-8 w-full md:w-1/2 shadow-md overflow-hidden text-white">
  <!-- Layer gambar background -->
  <div class="absolute inset-0 bg-center bg-cover opacity-65" 
       style="background-image: url('bg-contact.jpg');"></div>

  <!-- Layer semi-overlay agar teks tetap kontras (optional) -->
  <div class="absolute inset-0 bg-orange-900/40"></div>

  <!-- Konten utama -->
  <div class="relative z-10">
    <h2 class="text-sm uppercase text-white mb-2">Pesan dan Kesan</h2>
    <h3 class="text-2xl font-semibold mb-4">Don't hesitate to contact us for more information.</h3>
    <p class="mb-6 text-sm text-white/90">
      If you have questions, please contact us via the contact form or contact information on this page.
    </p>
    <ul class="space-y-4 text-white text-base">
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📞</span>
        <span><strong>Organization Relations & Non-Profit (Humas)</strong><br>0891 2345 6789</span>
      </li>
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📞</span>
        <span><strong>Project & Media Partnership (Birpro)</strong><br>0891 2345 6789</span>
      </li>
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📧</span>
        <span><strong>Contact Us (Humas)</strong><br>hmdt@gmail.com</span>
      </li>
    </ul>
  </div>
</div>

    <!-- Contact Form -->
    <div class="bg-white rounded-lg p-8 mt-8 md:mt-0 w-full md:w-1/2 shadow-md">
      <h3 class="text-2xl font-bold text-orange-950 mb-6">Send us a message</h3>
      <form class="space-y-4">
        <div class="flex gap-4">
          <input type="text" placeholder="Name" class="w-1/2 border border-gray-300 px-4 py-2 rounded-md" required>
          <input type="text" placeholder="Phone" class="w-1/2 border border-gray-300 px-4 py-2 rounded-md" required>
        </div>
        <input type="email" placeholder="Email" class="w-full border border-gray-300 px-4 py-2 rounded-md" required>
        <input type="text" placeholder="Subject" class="w-full border border-gray-300 px-4 py-2 rounded-md" required>
        <textarea placeholder="Message" class="w-full border border-gray-300 px-4 py-2 rounded-md h-32" required></textarea>
        <button type="submit" class="w-full bg-orange-800 text-white py-2 rounded-md hover:bg-orange-900">SEND</button>
      </form>
    </div>

  </section>

</body>
</html>
