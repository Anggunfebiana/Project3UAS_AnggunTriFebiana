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
            background-color:#2F4F4F; 
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
                        <a class="nav-link" href="<?= base_url('contact') ?>">Kontak Saya</a>
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
            <h1 class="display-5 fw-bold">Kontak Saya</h1>
            <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
            <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Alamat</h5>
                <p>Kedoya Selatan, Kebon Jeruk, Jakarta Barat, Jakarta</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Email</h5>
                <p>anggunfebiana234@gmail.com</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">No.HP</h5>
                <p>085647978945</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Tanggal Lahir</h5>
                <p>24 Februari 2003</p>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8FBC8F" fill-opacity="1" d="M0,224L60,218.7C120,213,240,203,360,186.7C480,171,600,149,720,165.3C840,181,960,235,1080,245.3C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
