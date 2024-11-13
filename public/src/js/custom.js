document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeIcon = document.getElementById('dark-mode-icon');
    const logo = document.getElementById('logo');

    darkModeToggle.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        document.querySelector('.navbar').classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode')) {
            darkModeIcon.src = '../src/img/icon/light.png';
            logo.src = '../src/img/logo_dark.png';
        } else {
            darkModeIcon.src = '../src/img/icon/dark.png';
            logo.src = '../src/img/logo.png';
        }
    });
});

// alert
document.addEventListener('DOMContentLoaded', function () {
    const toastElement = document.getElementById('uploadToast');
    if (toastElement) {
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
    }
});

//Gallery
document.addEventListener('DOMContentLoaded', function () {
    var photoModal = document.getElementById('photoModal');
    var modalImage = document.getElementById('modalImage');
    var modalTitle = document.getElementById('modalTitle');
    var modalDescription = document.getElementById('modalDescription');

    // Modal
    document.querySelectorAll('.photo-item').forEach(function(item) {
        item.addEventListener('click', function() {
            var photoSrc = item.getAttribute('data-photo-src');
            var photoTitle = item.getAttribute('data-photo-title');
            var photoDescription = item.getAttribute('data-photo-description');

            // Set konten modal dengan data dari photo-item
            modalImage.src = photoSrc;
            modalTitle.textContent = photoTitle;
            modalDescription.textContent = photoDescription;
        });
    });

    // Tombol filter
    var btnPohon = document.getElementById('btn-pohon');
    var btnKerjasama = document.getElementById('btn-kerjasama');
    var btnProses = document.getElementById('btn-proses');
    var photoItems = document.querySelectorAll('.photo-item');

    // Fungsi untuk filter berdasarkan tipe
    function filterPhotos(tipe) {
        photoItems.forEach(function(item) {
            if (tipe === 'all' || item.getAttribute('data-tipe') === tipe) {
                item.style.display = 'block'; // Tampilkan foto jika sesuai tipe
            } else {
                item.style.display = 'none'; // Sembunyikan foto yang tidak sesuai
            }
        });
    }

    // Fungsi untuk mengatur tampilan tombol aktif
    function setActiveButton(activeBtn) {
        // Reset semua tombol
        [btnPohon, btnKerjasama, btnProses].forEach(function(btn) {
            btn.classList.remove('tblactive');
        });
        // Set tombol yang aktif
        if (activeBtn) {
            activeBtn.classList.add('tblactive');
        }
    }

    // Tombol Pohon
    btnPohon.addEventListener('click', function () {
        if (btnPohon.classList.contains('tblactive')) {
            setActiveButton(null);
            filterPhotos('all'); 
        } else {
            setActiveButton(btnPohon); 
            filterPhotos('Pohon'); 
        }
    });

    // Tombol Kerjasama
    btnKerjasama.addEventListener('click', function () {
        if (btnKerjasama.classList.contains('tblactive')) {
            setActiveButton(null);
            filterPhotos('all'); 
        } else {
            setActiveButton(btnKerjasama); 
            filterPhotos('Kerjasama'); 
        }
    });

    // Tombol Proses
    btnProses.addEventListener('click', function () {
        if (btnProses.classList.contains('tblactive')) {
            setActiveButton(null);
            filterPhotos('all'); 
        } else {
            setActiveButton(btnProses); 
            filterPhotos('Proses');
        }
    });
});

// Show-Article
let likeTimeout;

function handleLikeClick(articleId) {
    if (localStorage.getItem(`liked_${articleId}`)) {
        showAlert('Anda sudah menyukai artikel ini.');
        return;
    }

    if (likeTimeout) {
        showAlert('Harap tunggu sebelum menyukai lagi.');
        return;
    }

    likeTimeout = setTimeout(() => {
        likeTimeout = null;
    }, 2000);

    likeArticle(articleId);
}

function likeArticle(articleId) {
    const likeButton = document.getElementById('likeButton');
    likeButton.disabled = true;

    fetch(`/articles/${articleId}/like`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('likeCount').innerText = data.likes;
            localStorage.setItem(`liked_${articleId}`, true);
        } else {
            showAlert('Gagal menambah like.');
        }
    })
    .catch(error => console.error('Error:', error))
    .finally(() => {
        likeButton.disabled = false;
    });
}

function toggleDropdown() {
    const menu = document.getElementById('shareMenu');
    menu.classList.toggle('show');
}

function copyLink(url) {
    navigator.clipboard.writeText(url)
        .then(() => showAlert('Link telah disalin ke clipboard!'))
        .catch(err => console.error('Gagal menyalin link: ', err));
}

function showAlert(message) {
    const alertMessage = document.getElementById('alertMessage');
    alertMessage.innerText = message;

    const alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
    alertModal.show();
}