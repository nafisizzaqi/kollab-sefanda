document.addEventListener("DOMContentLoaded", function () {
    const slug = window.location.pathname.split('/').pop();

    fetch('/api/gallery/' + slug)
        .then(response => {
            if (!response.ok) {
                throw new Error("Gallery not found");
            }
            return response.json();
        })
        .then(data => {
             console.log('DATA DETAIL GALLERY:', data);
            const container = document.getElementById('gallery-detail-container');
            const notFound = document.getElementById('gallery-not-found');

            if (data.success && data.data) {
                const item = data.data;

                document.getElementById('gallery-title').textContent = item.title.toUpperCase();
                document.getElementById('gallery-description').textContent = item.description || 'Tidak ada deskripsi.';
                document.getElementById('gallery-description2').textContent = item.description2 || '';

                if (item.image) {
                    const imageElement = document.getElementById('gallery-image');
                    imageElement.src = '/storage/' + item.image;
                    imageElement.alt = item.title;
                    imageElement.style.display = 'block';
                }

                container.style.display = 'block';
                notFound.style.display = 'none';
            } else {
                throw new Error("Empty data");
            }
        })
        .catch(error => {
            document.getElementById('gallery-detail-container').style.display = 'none';
            document.getElementById('gallery-not-found').style.display = 'block';
            console.error('Error fetching gallery detail:', error);
        });
});
