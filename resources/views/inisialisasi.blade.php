@extends("/welcome")
@section("content")
    <h3 class="fw-bold text-center mt-4 mb-4">Cara membuat project laravel :</h3>
    <div>
        <p>Langkah 1 : Membuka cmd dan mengarahkan path-nya ke folder tempat penyimpanan project</p>
        <p>Langkah 2 : Menuliskan syntax “composer create-project laravel/laravel UTS_WEB2_2022_Luthfia”</p>
        <img src="/assets/langkah1.png" class="mb-2">
        <p>Langkah 3 : Apabila project berhasil dibuat, maka tampilan cmd adalah sebagai berikut : </p>
        <img src="/assets/langkah2.png" class="mb-2">
        <p>Langkah 4 : Dan isi dari folder project tersebut, yaitu :</p>
        <img src="/assets/langkah3.png" class="mb-2">
        <h4 class="fw-bold text-center mt-5 mb-3">Untuk menyambungkan project tersebut dengan database “idolaque”, maka langkah yang harus dilakukan, yaitu :</h4>
        <p>Langkah 1 : Buat database idolaqu</p>
        <p>Langkah 2 : Ubah nama database di file .env dalam folder project yang telah dibuat menjadi “idolaqu”</p>
        <img src="/assets/langkah4.png" class="mb-2">
        <p>Langkah 3 : Untuk melakukan migrasi, dapat menggunakan migration Laravel</p>
        <p>1. Membuat file migration</p>
        <img src="/assets/langkah5.png" class="mb-2">
        <p>2. Melakukan migrate</p>
        <img src="/assets/langkah6.png" class="mb-2">
        <p>3. Cek database untuk mengetahui apakah ada perubahan dengan database atau tidak</p>
        <img src="/assets/langkah7.png" class="mb-2">
        <p>4. Tampilan di atas adalah tampilan database setelah dilakukan migrate</p>
        <img src="/assets/langkah8.png">
    </div>
    
@endsection