function formatPrice(money) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(money);
}

let produk = ['Televisi','Air Conditioner','Kulkas'],
    harga = 0,
    select = document.querySelector('select[name="produk"]'),
    pilihan = document.querySelector('select'),
    nama = document.querySelector('input[name="inputnama"]'),
    jumlah = document.querySelector('input[name="inputjumlah"]');

for(product of produk){
    switch(product){
        case 'Televisi' :  harga = 2000000; break;
        case 'Air Conditioner' :  harga = 3000000; break;
        case 'Kulkas' :  harga = 4000000; break;
        default : 'Barang Tidak Valid';
    }
    select.innerHTML += `<option value="${harga}">${product} <span color="red">${formatPrice(harga)}</span></option>`;
}

function hitung(){
    let cekBarang = select.value == "2000000" ? "Televisi"
                : select.value == "3000000" ? "Air Conditioner"
                : select.value == "4000000" ? "Kulkas"
                : "Produk Tidak Valid",
        cekDiskon = jumlah >= "3" && cekBarang == "Kulkas" ? 0.3
                : jumlah >= "3" && cekBarang == "Air Conditioner" ? 0.2
                : 0.1,
        hargaKotor = Number(select.value)*Number(jumlah.value),
        hargaDiskon = hargaKotor*cekDiskon;
        ppn = 0.1*(hargaKotor-Number(select.value)*cekDiskon);
    alert(`
        Nama = ${nama.value}
        Produk = ${cekBarang}
        Harga = ${formatPrice(select.value)}
        Jumlah = ${jumlah.value}
        Harga Kotor = ${formatPrice(hargaKotor)}
        Diskon = ${cekDiskon*100}%
        Diskon Yang Didapat = ${formatPrice(hargaDiskon)}
        Pajak = ${formatPrice(ppn)}
        Harga Bayar = ${formatPrice((hargaKotor-hargaDiskon)+ppn)}
    `);
}
