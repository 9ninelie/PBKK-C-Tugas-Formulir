

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5025211048 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle bg-dark bg-gradient text-light rounded">
            <form method="POST" action="/form" class="p-5" enctype="multipart/form-data"> 
                @csrf
                <div class="text-center fw-bold mb-5">
                    TUGAS FORMS ARIF
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Nama</span>
                    <input type="text" class="form-control" placeholder="Masukan Nama" aria-describedby="nama" id="nama" name="nama">
                    @error('nama')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">E-Mail</span>
                    <input type="email" class="form-control" placeholder="Masukan E-mail" aria-describedby="email" id="email" name="email">
                    @error('email')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Password</span>
                    <input type="password" class="form-control" placeholder="Masukan Password" aria-describedby="password" id="password" name="password">
                    @error('password')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mt-3">
                    <span class="input-group-text">Float</span>
                    <input type="float" class="form-control fs-6" placeholder="Input Antara 2.50 - 99.99" aria-describedby="float" id="float" name="float">
                    @error('password')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <span class="input-group-image">Image</span>
                    <input type="file" class="form-control fs-6" accept="image/" id="image" name="image">
                    @error('image')
                    <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Lesgo!</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>