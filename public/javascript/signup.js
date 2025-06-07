document.querySelector('.submit-button').addEventListener('click', function(e) {
    e.preventDefault();  // cegah form submit default
  
    const email = document.querySelector('input[type="email"]').value.trim();
    const password = document.querySelector('input[type="password"]').value.trim();
    const confirmPassword = document.querySelector('input[name="confirmPassword"]').value.trim(); // contoh field confirm password
    const checkbox = document.querySelector('input[type="checkbox"]').checked;
  
    if (!email || !password || !confirmPassword) {
      alert('Harap isi semua field!');
      return;
    }
  
    // Cek format email sederhana
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Format email tidak valid');
      return;
    }
  
    if (password !== confirmPassword) {
      alert('Password dan konfirmasi password tidak cocok');
      return;
    }
  
    if (!checkbox) {
      alert('Harap setujui syarat dan ketentuan');
      return;
    }
  
    // Kalau semua valid, lanjut submit data
    alert('Form valid! Kirim data ke server...');
    // Tambahkan kode AJAX/fetch di sini kalau mau submit ke backend
  });
  