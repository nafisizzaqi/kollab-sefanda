document.addEventListener("DOMContentLoaded", function () {
    fetch('/api/about')
        .then(response => response.json())
        .then(data => {
            const about = data.data;

            if (!about || Object.keys(about).length === 0) {
                document.getElementById('about-title').innerHTML = 'Jurusan Kuliner';
                document.getElementById('about-image').src = '../assets/img/logokuliner.png';
                document.getElementById('about-description').innerHTML = `
          Jurusan Kuliner SMKN 1 Tengaran kita tidak hanya belajar memasak, juga memelajari teknik penyajian makanan
        dengan memperhatikan 4 aspek, yaitu estetika, kebutuhan nutrisi, citarasa serta kualitas. Selain itu kita juga
        akan mendalami berbagai pengolahan hidangan dari berbagai negara, mulai dari masakan Nusantara, Oriental food,
        western food, Pastry and Bakery.
        `;
                document.getElementById('about-visi').innerText = `Meningkatkan keterampilan siswa dibidang Kuliner sesuai dengan perkembangan, budaya, & keunggulan lokal dan
            kebutuhan di dunia Kuliner saat ini. Siswa mampu bersaing di dunia kerja atau wirausaha.`;
                document.getElementById('about-misi').innerHTML = `
          <li>Adanya guest teacher dibidang usaha kuliner dan wirausaha</li>
            <li>Pembelajaran yang dilakukan secara bertumbuh yang mengacu pada kebutuhan industri</li>
            <li>Mengembangkan kompetensi siswa dalam produksi dan layanan kuliner</li>
            <li>Mengintegrasikan teknologi dan keunggulan lokal dalam proses KBM</li>
            <li>Menyediakan sarana dan prasarana praktik yang lengkap sesuai standar industri</li>
            <li>Menggunakan pemanfaatan sarana IT dalam proses pembelajaran</li>
        `;
            } else {
                document.getElementById('about-title').innerHTML = about.title || 'Jurusan Kuliner';
                document.getElementById('about-image').src = about.logo || '../assets/img/logokuliner.png';
                document.getElementById('about-description').innerHTML = about.description;
                document.getElementById('about-visi').innerText = about.visi;
                document.getElementById('about-misi').innerHTML = about.misi.map(item => `<li>${item}</li>`).join('');
            }
        })
        .catch(error => {
            document.getElementById('about-description').innerHTML = `<p class="text-danger">Gagal mengambil data: ${error.message}</p>`;
        });
});