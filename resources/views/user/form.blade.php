<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="background-color: #F1F6F5;">

    <div class="py-3" style="background-color: #472183;">
        <div class="container">
            <div class="h4 text-white">Fomulir Mahasiswa</div>
        </div>
    </div>
    <div class="container p-5">
        <div class="card p-sm-5">
            <form class="row g-3"  action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" id="nama" placeholder="Enter Nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror                        
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                    </div>
                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" placeholder="Enter Nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}">
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('nim')
                        <p class="invalid-feedback">{{ $message }}</p>    
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="col-md-6">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan">
                </div>
                <div class="col-md-6">
                    <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahunMasuk">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori">
                        <option selected>Choose...</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="talent" class="form-label">Talent</label>
                    <select class="form-select" id="talent">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="desk" class="form-label">Deskripsi</label>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                <div class="mb-3">
                    <label for="noHp" class="form-label">Nomor Handphone</label>
                    <input type="email" class="form-control" id="noHp">
                </div>
                <button type="submit" class="btn btn-primary w-25 ">Submit</button>
            </form>
        </div>
    </div>
<br>
<br>

   



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>