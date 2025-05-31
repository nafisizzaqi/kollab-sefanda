document.addEventListener("DOMContentLoaded", function () {
  // Fungsi slugify (kalau memang diperlukan)
  function slugify(text) {
    return text
      .toString()
      .toLowerCase()
      .trim()
      .replace(/\s+/g, '-')      // ganti spasi dengan strip
      .replace(/[^\w\-]+/g, '')  // hapus karakter non-alphanumeric kecuali strip
      .replace(/\-\-+/g, '-');   // ganti strip ganda jadi satu strip
  }

  fetch('/api/gallery')
    .then(response => response.json())
    .then(data => {
      const galleries = data.data;
      const galleryList = document.getElementById('gallery-list');

      if (!galleries || galleries.length === 0) {
        // Fallback HTML statis saat data kosong
        galleryList.innerHTML = `
                    <div class="col-md-6">
                        <a href="tablemanner" style="text-decoration: none;">
                            <div class="card-custom">
                                <img src="../assets/img/Tablemanner.jpg" alt="Tablemanner">
                                <div class="section-title">TABLE MANNER.</div>
                                <div class="section-desc">kegiatan kunjungan ke Dunia Usaha/Dunia Industri guna menambah ilmu kuliner dunia</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="tefa" style="text-decoration: none;">
                            <div class="card-custom">
                                <img src="../assets/img/Tefakuliner.jpg" alt="Tefa Kuliner">
                                <div class="section-title">TEFA KULINER</div>
                                <div class="section-desc">ruang praktik pembelajaran yang dikemas menarik oleh jurusan kuliner</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="karya" style="text-decoration: none;">
                            <div class="card-custom">
                                <img src="../assets/img/karyamakanan.jpg" alt="Karya Makanan">
                                <div class="section-title">KARYA MAKANAN</div>
                                <div class="section-desc">sajian masakan lokal dan internasional yang diciptakan oleh siswa kuliner</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="prestasi" style="text-decoration: none;">
                            <div class="card-custom">
                                <img src="../assets/img/Prestasikuliner.jpg" alt="Prestasi">
                                <div class="section-title">PRESTASI</div>
                                <div class="section-desc">kejuaraan dari lomba memasak yang ditorehkan siswa kuliner</div>
                            </div>
                        </a>
                    </div>
                `;
        return;
      }

      // Render daftar gallery
      galleryList.innerHTML = galleries.map(item => {
        const imageUrl = item.image
          ? `${window.location.origin}/storage/${item.image}`
          : '../assets/img/default.jpg';

        // Gunakan slug gallery detail jika ada, kalau tidak fallback ke slugify title
        const detailSlug = item.slug || slugify(item.title);

        return `
                    <div class="col-md-6">
                        <a href="/gallery-detail/${detailSlug}" style="text-decoration: none;" title="Slug Gallery: ${slugify(item.title)}">
                            <div class="card-custom">
                                <img src="${imageUrl}" alt="${item.title}">
                                <div class="section-title">${item.title.toUpperCase()}</div>
                                <div class="section-desc">${item.description || ''}</div>
                            </div>
                        </a>
                    </div>
                `;
      }).join('');
    })
    .catch(error => {
      const galleryList = document.getElementById('gallery-list');
      galleryList.innerHTML = `<p class="text-danger">Gagal mengambil data: ${error.message}</p>`;
      console.error('Error fetching gallery:', error);
    });
});
