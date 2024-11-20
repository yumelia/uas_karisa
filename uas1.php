<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="uas.css">
    
    <title>Hello, world!</title>
  </head>
  <body>
    <center>
        <img src="yayasan1.png" width="200" alt="">
        <h2>PENGGAJIHAN</h2>
        <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
       <form action="uas2.php" method="post">
<br>
        <div class="card text-center" style="width: 480px;">
          <div class="card-header">
            Data Penggajihan
          </div>
          <div class="card-body">
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">No</label>
            <input type="number" name="nomer" id="disabledTextInput" class="form-control" placeholder="No">
          </div>
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">Nama</label>
            <input type="text" name="nama" id="disabledTextInput" class="form-control" placeholder="Nama">
          </div>
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">Unit Pendidikan</label>
            <select class="form-select" name="unit" aria-label="Default select example">
            <option selected>Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMK">SMK</option>
          </select>
          </div>
          
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">Tanggal Gaji</label>
            <input type="date" name="tanggal" id="" class="form-control">
          </div>
          
          <h3 class="d-flex justify-content-between">
          <span><i>Gaji</i></span>
          <span><i>Potongan</i></span>
        </h3>

        <div class="row">
          <div class="col-6">
            <div class="mb-3" align="left">
              <label for="gajiInput" class="form-label">Jabatan</label>
              <select id="statusKerjaSelect" name="jabatan" class="form-select">
            <option>Pilih Jabatan</option>
            <option value="kepala sekolah">Kepala Sekolah</option>
            <option value="wakasek">Wakasek</option>
            <option value="guru">Guru</option>
            <option value="ob">OB</option>
          </select>
          </div>
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">Lama Kerja</label>
            <input type="number" name="lama" id="disabledTextInput" class="form-control" placeholder="Lama Kerja">
            </div>
          <div class="mb-3" align="left">
              <label for="disabledTextInput" class="form-label">Status Kerja</label>
              <select class="form-select" name="status" aria-label="Default select example">
              <option selected>Status Kerja</option>
              <option value="Tetap">Tetap</option>
              <option value="Kontrak">Kontrak</option>
              </select>
              </div>
        </div>
        <div class="col-6">
          <div class="mb-3" align="left">
            <label for="disabledTextInput" class="form-label">BPJS</label>
            <input type="number" name="bpjs" id="disabledTextInput" class="form-control" placeholder="">
            </div>
            <div class="mb-3" align="left">
              <label for="disabledTextInput" class="form-label">Pinjaman</label>
              <input type="number" name="pinjaman" id="disabledTextInput" class="form-control" placeholder="Pinjaman">
              </div>
            <div class="mb-3" align="left">
                <label for="disabledTextInput" class="form-label">Cicilan</label>
                <input type="number" name="tabungan" id="disabledTextInput" class="form-control" placeholder="Tabungan">
                </div>
            <div class="mb-3" align="left">
                  <label for="disabledTextInput" class="form-label">Infaq</label>
                  <input type="number" name="infaq" id="disabledTextInput" class="form-control" placeholder="Lainnya">
                  </div>
          </div>
      </div>
       <center>
        <button type="submit" name="proses" class="btn btn-primary">Proses</button>
       </center>
        
      </center>
    </form>
        </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>