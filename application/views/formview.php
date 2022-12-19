<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tambah Data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            lain-lain
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">berita</a></li>
            <li><a class="dropdown-item" href="#">tentang</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">galeri</a></li>
          </ul>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-5" type="submit">Search</button>
        <h6>ahmadmusta'an </h6>
      </form>
    </div>
  </div>
</nav>
</div>
    <div class="alert alert-success text-center " role="alert">
 Nama : Ahmad musta'an Holidi / Nim: 2001050005
</div>
<div class="card text-bg-light mb-3" style="max-width: 100rem;">
  <div class="card-header">Data Mahasiswa</div>
  <div class="card-body">
  <table class="table table-bordered">
  <thead></thead>
        <tr>
            <th>no</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>ALAMAT</th>
            <th>aksi</th>
            

        </tr>
        <thead>
            <tr>
                <th>1</th>
                <th>Ahmad mustaan</th>
                <th>2001050005</th>
                <th>barejulat</th>
                <th><button type="edit" class="btn btn-warning">ubah</button>
                <button type="delete" class="btn btn-danger">hapus</button></th>
            </tr>
            <tr>
                <th>2</th>
                <th>dika</th>
                <th>2001050001</th>
                <th>karang keloq</th>
                <th><button type="edit" class="btn btn-warning">ubah</button>
                <button type="delete" class="btn btn-danger">hapus</button></th>
            </tr>
            <tr>
                <th>3</th>
                <th>adit</th>
                <th>2001050004</th>
                <th>tanaq beak</th>
                <th><button type="edit" class="btn btn-warning">ubah</button>
                <button type="delete" class="btn btn-danger">hapus</button></th>
            </tr>
</table>
    </div>

        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>