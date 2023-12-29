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

function submitKomentar() {
    // Ambil nilai dari textarea
    var komentar = document.getElementById('komentar').value;

    // Periksa apakah textarea kosong
    if (komentar.trim() === "") {
        //menampilkan pop-up alert jika tidak terdapat komentar yang dituliskan tetapi melakukan submit
        alert("Silahkan berikan komentar terlebih dahulu sebelum melakukan submit.");
    } else {
        document.getElementById('komentarForm').submit();
    }
}


 