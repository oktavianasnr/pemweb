//script form kuliner favorit
    const form = document.getElementById("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const namaInput = document.getElementById("nama");
        const namaKulinerInput = document.getElementById("namaKuliner");
        const nama = namaInput.value;
        const namaKuliner = namaKulinerInput.value;

        const hasilInput = document.getElementById("hasilInput");
        hasilInput.textContent = ` Terima kasih, ${nama}, telah menyukai ${namaKuliner}. Nikmati kekayaan cita rasa kuliner lain. `;

        namaInput.value = "";
        namaKulinerInput.value = ""; 
    });

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
    let komentar = [];

    function submitKomentar() {
        const inputanKomentar = document.querySelector("#komentar");
        const komentarUser = inputanKomentar.value;

        if (komentarUser.trim() !== "") {
            komentar.push(komentarUser);
            inputanKomentar.value = "";
        } else {
            alert("Berikan komentar terlebih dahulu sebelum melakukan submit. Terimakasih.");
        }
    }

    function lihatKomentar() {
        const encodedKomputer = encodeURIComponent(komentar.join("</li><li>"));
        window.location.href = `komentar.html?comments=${encodedKomputer}`;
    }