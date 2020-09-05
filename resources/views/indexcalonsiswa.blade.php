<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Data Calon Siswa</title>
  </head>a
  <body>
    <div class="container">
        <div class="row">
            <h2>Tabel data calon siswa</h2>
        </div>
        @if(session()->has('pesan'))
            <div class="alert alert-success">{{ session()->get('pesan') }}</div>
        @endif

        @if(session()->has('pesanhapus'))
            <div class="alert alert-danger">{{ session()->get('pesanhapus') }}</div>
        @endif
        <table class="table">
            <tr>
                <td>NO</td>
                <td>Nomer PPDB</td>
                <td>Calon siswa</td>
                <td>Asal Sekolah</td>
                <td>Pilihan 1</td>
                <td>Pilihan 2</td>
                <td>Aksi</td>
            </tr>
            
                @forelse ($calonsiswa as $itemSiswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemSiswa->noppdb }}</td>
                <td>{{ $itemSiswa->nama }}</td>
                <td>{{ $itemSiswa->asal_sekolah }}</td>
                <td>{{ $itemSiswa->pilihan1 }}</td>
                <td>{{ $itemSiswa->pilihan2 }}</td>
                <td> <a href="{{ url("calonsiswa/$itemSiswa->id") }}">detail</a> 
                  <a href="{{ url("hapussiswa/$itemSiswa->id") }}">hapus</a></td>
            </tr>

          @empty
              <td colspan="7">Tidak Ada Data</td>
          @endforelse
                
            
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>