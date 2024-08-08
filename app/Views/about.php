<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<style>
        body {
            background-color: #6495ED	; 
        }
    </style>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">BlogAnggun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">kontak saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Tentang Bahasa korea</h1>
            <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
            <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">mengapa belajar bahasa korea </h5>
                <p>Peluang Karir : Korea Selatan memiliki ekonomi yang kuat dan banyak perusahaan internasional seperti Samsung, Hyundai, dan LG. Kemampuan berbahasa Korea dapat membuka peluang karir di perusahaan-perusahaan ini.</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">dimana belajar bahasa korea</h5>
                <p>Preply, italki, dan Verbling: Platform ini menghubungkan Anda dengan tutor bahasa Korea yang dapat memberikan pelajaran satu-satu sesuai kebutuhan Anda</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bagaimana bahasa korea itu</h5>
                <p>begini contohnya : Hangul (한글): Sistem penulisan Korea, Hangul, adalah sistem fonetik yang relatif sederhana. Hangul terdiri dari 14 konsonan dasar dan 10 vokal dasar yang dapat digabungkan untuk membentuk suku kata. Setiap karakter Hangul biasanya terdiri dari dua atau lebih huruf yang membentuk satu suku kata.</p>
            </div>
        </div>
    </div>
</div>
<div class="container py-4">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                &copy; <?= Date('Y') ?>
            </div>
        </footer>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#008B8B" fill-opacity="1" d="M0,64L26.7,85.3C53.3,107,107,149,160,170.7C213.3,192,267,192,320,208C373.3,224,427,256,480,240C533.3,224,587,160,640,154.7C693.3,149,747,203,800,208C853.3,213,907,171,960,176C1013.3,181,1067,235,1120,250.7C1173.3,267,1227,245,1280,229.3C1333.3,213,1387,203,1413,197.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>