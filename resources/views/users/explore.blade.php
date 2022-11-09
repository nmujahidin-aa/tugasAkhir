@extends('users.master')

@section('content')

</br>
<div class="container d-flex justify-content-center">
    <div class="card shadow-lg category-card" style="padding: 20px;">
        <div class="card-body">
            <div class="row" style="text-align: center">
                <div class="col-12">
                    <h4 class="card-title">Kategori yang Kamu Inginkan</h4>
                    <p class="card-text">Temukan referensi yang kamu cari berdasarkan kategori.</p>
                </div>
            </div>
            <div class="row categories mt-5 justify-content-center">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/kategori/book">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/keys.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Matematika</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/kategori/journal">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/cpu.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Teknologi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/kategori/karya-tulis-ilmiah">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/dna.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Biologi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/kategori/article">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/biology.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Kimia</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/matematika">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/atom.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Fisika</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/bahasa">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="https://competify.co.id/assets/img/icon/20220526063302-BNpWUejQHFj5ZA9ruVXfOpEagtjwIDeuFG8BEb3NzY5gpXZEQFld5fQQuu9N3I9tA88F4eVceQxvMpVFzxiTnQhFzLL9QE8oU0HK.jpg" alt="category-icon">
                            <h5 class="h5-sm pt-2">Bahasa</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/world.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Geografi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/network.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Sosiologi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/money-growth.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Ekonomi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/healthcare.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Medis</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/fiction.png" alt="category-icon">
                            <h5 class="h5-sm pt-2">Fiksi</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mt-3">
                    <a href="/kategori/geografi">
                        <div class="c2-box-txt text-center">
                            <img class="img-70" src="image/nonacademic.png">
                            <h5 class="h5-sm pt-2">Non-Akademik</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>

@endsection