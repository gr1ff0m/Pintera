document.querySelector('.submit-button').addEventListener('click', function(e) {
    e.preventDefault();
  
    const email = document.querySelector('input[type="email"]').value.trim();
    const password = document.querySelector('input[type="password"]').value.trim();
  
    if (!email || !password) {
      alert('Harap isi email dan kata sandi');
      return;
    }
  
    // Cek format email sederhana
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Format email tidak valid');
      return;
    }
  
    alert('Form valid! Lanjut proses login...');
    // Tambahkan kode AJAX/fetch untuk login ke backend
  });
  
  // Contoh toggle show/hide password (jika ada tombol toggle)
  const toggleBtn = document.querySelector('#togglePassword');
  if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
      const passwordInput = document.querySelector('input[type="password"]');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleBtn.textContent = 'Sembunyikan';
      } else {
        passwordInput.type = 'password';
        toggleBtn.textContent = 'Tampilkan';
      }
    });
  }
  