//deklarasi
var cells = new Array(9);
var flag = 1; 
//array
var cells = ["b1", "b2", "b3", "b4", "b5", "b6", "b7", "b8", "b9"];

for (var i = 0; i < 9; i++) {
    cells[i] = "";
}

function tabBox(index) {
    var cell = document.getElementById("b" + (index + 1));
    if (cells[index] === "" && flag === 1) {
        cell.value = "X";
        cells[index] = "X";
        cell.disabled = true;
        flag = 0;
    } else if (cells[index] === "" && flag === 0) {
        cell.value = "0";
        cells[index] = "0";
        cell.disabled = true;
        flag = 1;
    }
    cekPemenang();
}
//fungsi untuk memeriksa pemenang
function cekPemenang() {
    //daftar kombinasi pemenang
    var kombinasiPemenang = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6] 
    ];

    for (var i = 0; i < kombinasiPemenang.length; i++) {
        var [a, b, c] = kombinasiPemenang[i];
        if (cells[a] !== "" && cells[a] === cells[b] && cells[a] === cells[c]) {
            highlightCellPemenang(a, b, c);
            if (cells[a] === "X") {
                document.getElementById("print").innerHTML = "Pemenang : Player X";
            } else if (cells[a] === "0") {
                document.getElementById("print").innerHTML = "Pemenang : Player 0";
            }
            nonAktifCell();
            return;
        }
    }
    //memeriksa kondisi pemain 
    if (cells.every(cell => cell !== "")) {
        document.getElementById("print").innerHTML = "SERI";
        nonAktifCell();
    }
}
//fungsi untuk menonaktifkan cell
function nonAktifCell() {
    for (var i = 0; i < 9; i++) {
        var cell = document.getElementById("b" + (i + 1));
        cell.disabled = true;
    }
}

function highlightCellPemenang(a, b, c) {
    document.getElementById("b" + (a + 1)).style.color = "red";
    document.getElementById("b" + (b + 1)).style.color = "red";
    document.getElementById("b" + (c + 1)).style.color = "red";
}
//fungsi reset
function resetGame() {
    cells.fill("");
    for (var i = 0; i < 9; i++) {
        var cell = document.getElementById("b" + (i + 1));
        cell.value = "";
        cell.disabled = false;
    }
    if (flag === 1) {
        document.getElementById("print").innerHTML = "Player X";
    } else {
        document.getElementById('print').innerHTML = "Player 0";
    }
}

function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle("dark-mode");
}