<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>tambah</title>
</head>
<body>
<div class="container">
    <div class=" mt-3 mb-3 alert alert-success text-center " role="alert">
    <h2>tambah data</h2>
    </div>
    
<div class="card text-bg-light mb-3" style="max-width: 100rem;">
    <div class="card-header">Data Mahasiswa</div>
  <div class="card-body">
    <form action="<?=site_url('KelasControl/prosestambah')?>" method="POST">
    <div class="form-group">
       <label for="">fakultas</label> 
       <input type="text" name="txtfakultas" class="form-control">
    </div>

    <div class="form-group">
       <label for="">prodi</label> 
       <input type="text" name="txtprodi" class="form-control">
    </div>

    <div class="form-group">
       <label for="">kelas</label> 
       <input type="text" name="txtkelas" class="form-control">
    </div>

    <div class="form-group">
       <label for="">isi</label> 
       <input type="text" name="txtisi" class="form-control">
    </div>
    
    <input type="submit" name="submit" value="simpan" class=" mt-4 mb-4 btn btn-primary">
    <a href="<?=site_url('KelasControl/index')?>" class="mt-4 mb-4 btn btn-warning">batal</a>

    </form>
</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>