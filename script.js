$(document).ready(function(){
    $('.slider').slick({
        autoplay: true, // Mengaktifkan autoplay
        autoplaySpeed: 2000, // Kecepatan autoplay dalam milidetik
        dots: true, // Menampilkan titik navigasi
        infinite: true, // Mengaktifkan loop tanpa akhir
        speed: 500, // Kecepatan transisi
        slidesToShow: 1, // Jumlah slide yang ditampilkan
        slidesToScroll: 1 // Jumlah slide yang digulirkan
    });
});