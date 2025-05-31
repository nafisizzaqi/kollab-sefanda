document.addEventListener("DOMContentLoaded", function () {
    const guruList = document.getElementById('guru-list');

    // HTML fallback (copy dari HTML statis guru kamu)
    const fallbackHTML = `
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Karina.jpg" alt="Karina Kusumastuti" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Karina Kusumastuti, S.Pd</h5>
          <p class="mb-1">Ketua Jurusan Kuliner</p>
          <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Widiharyani.jpg" alt="Widi Haryani" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Widi Haryani, S.Pd</h5>
          <p class="mb-1">Kepala Unit Produksi & Ka. Divisi Marketing</p>
          <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Fitriyunita.jpg" alt="Fitri Yunita" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Fitri Yunita, S.Pd</h5>
          <p class="mb-1">Bendahara & Ka. Divisi Sosial</p>
          <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Marita.jpg" alt="Marita Anggiet" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Marita Anggiet Artay, S.Pd</h5>
          <p class="mb-1">Sekertaris & Ka. Divisi R&D</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Fitriyunita.jpg" alt="Heni" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Heni Wahyutisari, SE, MM.</h5>
          <p class="mb-1">Ka. Laboratorium & Ka.Divisi Sosmed</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../assets/img/Dwi.jpg" alt="Dwi" class="rounded-circle mx-auto d-block"
          style="width: 150px; height: 150px; object-fit: cover;">
        <div class="card-body">
          <h5 class="text-success fw-bold">Dwi Atminingsih, S.Pd</h5>
          <p class="mb-1">Humas & Ka. Divisi Kesiswaan</p>
        </div>
      </div>
    </div>
  `;

    fetch('/api/guru')
        .then(response => {
            if (!response.ok) throw new Error('Gagal mengambil data guru');
            return response.json();
        })
        .then(data => {
            const gurus = data.data;
            console.log(gurus);
            if (!gurus || gurus.length === 0) {
                guruList.innerHTML = fallbackHTML;
                return;
            }

            // Jika ada data, render dinamis
            guruList.innerHTML = gurus.map(guru => `
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="${guru.image}" alt="${guru.name}" class="rounded-circle mx-auto d-block"
              style="width: 150px; height: 150px; object-fit: cover;">
            <div class="card-body">
              <h5 class="text-success fw-bold">${guru.name}</h5>
              <p class="mb-1">${guru.title}</p>
              <p class="text-muted small">${guru.description || ''}</p>
            </div>
          </div>
        </div>
      `).join('');
        })
        .catch(error => {
            // Jika error fetch atau error lain, tampilkan fallback
            guruList.innerHTML = fallbackHTML;
            console.error(error);
        });
});
