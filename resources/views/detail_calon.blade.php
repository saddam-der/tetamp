<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Pendaftaran Calon siswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container pt-4 bg-light">
        <div class="row">
            <div class="col-md-8">
                <h1>Form Data Calon Siswa {{ $calonsiswa->nama }} </h1>
                <h2>SMK Taruna Bhakti Depok</h2>
            
                        <div class="form-group">
                            <label for="noppdb">Nomor PPDB</label>
                            <div> {{ $calonsiswa->noppdb }} </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <div> {{ $calonsiswa->nama }} </div>
                        </div>

                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <div> {{ $calonsiswa->asal_sekolah }} </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pilihan1">Pilihan Jurusan 1</label>
                            <div> {{ $calonsiswa->pilihan1 }} </div>
                        </div>

                        <div class="form-group">
                            <label for="pilihan2">Pilihan Jurusan 2</label>
                            <div> {{ $calonsiswa->pilihan2 }} </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <div> {{ $calonsiswa->alamat }} </div>
                        </div>

                        <div class="form-group">
                            <label for="nohp">Nomor HP</label>
                            <div> {{ $calonsiswa->nohp }} </div>
                        </div>


                       
                
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>