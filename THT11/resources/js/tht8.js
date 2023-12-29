//script rate website
const rateForm = document.getElementById("rateForm");
const hasilRate = document.getElementById("hasilRate");

    rateForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const selectedRating = document.querySelector('input[name="rating"]:checked');

        if (selectedRating) {
            const ratingValue = selectedRating.value;
            hasilRate.innerHTML = `Terima kasih telah memberikan penilaian ${ratingValue} untuk website Global Culinary Flavors.`;
        }
        else {
            hasilRate.innerHTML = "Silakan beri rate untuk website kami.";
        }
});

//script komentar
// let komentar = [];

// function submitKomentar() {
//     const inputanKomentar = document.querySelector("#komentar");
//     const komentarUser = inputanKomentar.value;

//     if (komentarUser.trim() !== "") {
//         komentar.push(komentarUser);
//         inputanKomentar.value = "";
//     } else {
//         alert("Berikan komentar terlebih dahulu sebelum melakukan submit. Terimakasih.");
//     }
// }

// function lihatKomentar() {
//     const encodedKomputer = encodeURIComponent(komentar.join("</li><li>"));
//     window.location.href = `komentar.html?comments=${encodedKomputer}`;
// }

// Di dalam tht8.js
document.getElementById('komentarForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const inputanKomentar = document.querySelector("#komentar");
    const komentarUser = inputanKomentar.value;

    if (komentarUser.trim() !== "") {
        fetch("{{ route('comments.store') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ comment: komentarUser })
        })
        .then(response => response.json())
        .then(data => {
            const semuaHasilKomentar = document.getElementById("hasilKomentar");
            const listKomentar = data.comments.map(comment => `<li>${comment.comment}</li>`).join('');
            semuaHasilKomentar.innerHTML = `<ul>${listKomentar}</ul>`;
        })
        .catch(error => {
            console.error('Error:', error);
        });

        inputanKomentar.value = "";
    } else {
        alert("Berikan komentar terlebih dahulu sebelum melakukan submit. Terimakasih.");
    }
});
