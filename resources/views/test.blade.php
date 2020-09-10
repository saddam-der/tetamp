<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Edit Pendaftaran Calon siswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container pt-4 bg-light">
        <div class="row">
            <div class="col-md-8">
                <h1>Form Edit Data Calon Siswa</h1>
                <h2>SMK Taruna Bhakti Depok</h2>
                <div class="col-md-8">
                    <form action="{{ url('/calonsiswa',['calonsiswa'=>$calonsiswa->id]) }}" method="post">
                        @method('PATCH')
                        @csrf   

                        <div class="form-group">
                            <label for="noppdb">Nomor PPDB</label>
                        <input id="noppdb" class="form-control @error('noppdb') is-invalid @enderror " type="text" name="noppdb" value="{{ $calonsiswa->noppdb }}">
                            @error('noppdb')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                        <input id="nama" class="form-control @error('nama') is-invalid @enderror " type="text" name="nama" value="{{ $calonsiswa->nama }}">
                            @error('nama')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                        <input id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror " type="text" name="asal_sekolah" value="{{ $calonsiswa->asal_sekolah }}">
                            @error('asal_sekolah')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>
                        
                        <div class="form-group">
                            <label for="pilihan1">Pilihan Jurusan 1</label>
                            <select class="form-control @error('pilihan1') is-invalid @enderror " name="pilihan1" id="pilihan1">
                                <option value="{{ $calonsiswa->pilihan1 }}" >{{ $calonsiswa->pilihan1 }}</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="MM">MM</option>
                                <option value="TEI">TEI</option>
                                <option value="BC">BC</option>
                            </select>
                            @error('pilihan1')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label for="pilihan2">Pilihan Jurusan 2</label>
                            <select class="form-control @error('pilihan2') is-invalid @enderror " name="pilihan2" id="pilihan2">
                                <option value="{{ $calonsiswa->pilihan2 }}" >{{ $calonsiswa->pilihan2 }}</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="MM">MM</option>
                                <option value="TEI">TEI</option>
                                <option value="BC">BC</option>
                            </select>
                            @error('pilihan2')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                        <input id="alamat" class="form-control @error('alamat') is-invalid @enderror " type="text" name="alamat" value="{{ $calonsiswa->alamat }}">
                            @error('alamat')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label for="nohp">Nomor HP</label>
                        <input id="nohp" class="form-control @error('nohp') is-invalid @enderror " type="text" name="nohp" value="{{ $calonsiswa->nohp }}">
                            @error('nohp')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>


                        <button class="btn btn-primary" id="daftar" name="daftar" type="submit">Daftar</button>
                    </form>
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