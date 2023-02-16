<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>PERPUSTAKAAN</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <br>
            <div style="width: 50%; margin-left:350px;">
            <label for="KD BARANG" class="form-label">KD BARANG</label>
            <input type="text" id="" name="kd_barang" class="form-control" placeholder="-------">
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="NAMA BARANG" class="form-label">NAMA BARANG</label>
            <input type="text" id="" name="nama_barang" class="form-control" placeholder="-------">
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="TIPE BARANG" class="form-label">TIPE BARANG</label>
            {{-- <input type="text" id="" name="tipe_barang" class="form-control" placeholder="-------">
            --}}
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="JUMLAH BARANG" class="form-label">JUMLAH BARANG</label>
            <input type="text" id="" name="jumlah_barang" class="form-control" placeholder="-------">
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="DISTRIBUTOR" class="form-label">DISTRIBUTOR</label>
            <input type="text" id="" name="distributor" class="form-control" placeholder="-------">
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="TANGGAL MASUK" class="form-label">TANGGAL MASUK</label>
            <input type="text" id="" name="tanggal_masuk" class="form-control" placeholder="-------">
            </div>
            <div style="width: 50%; margin-left:350px;">
            <label for="TANGGAL KELUAR" class="form-label">TANGGAL KELUAR</label>
            <input type="text" id="" name="tanggal_keluar" class="form-control" placeholder="-------">
            </div>
            <br>
            <div style="width: 50%; margin-left:950px;"">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>

    </div>
</form>

<br>

    <div style="margin-left: 230px; width:70%; ">
        <table id="simple-table" class="table table-bordered table-hover">
            <thead>
                <div style="width: 50%;">
                    <button type="submit" class="btn btn-success">TAMBAH DATA</button>
                    </div>
                    <br>
                <tr>
                    <th style="text-align:center;">NO</th>
                    <th style="text-align:center;">KD BARANG</th>
                    <th style="text-align:center;">TIPE BARANG</th>
                    <th style="text-align:center;">JUMLAH BARANG</th>
                    <th style="text-align:center;">DISTRIBUTOR</th>
                    <th style="text-align:center;">TANGGAL MASUK</th>
                    <th style="text-align:center;">TANGGAL KELUAR</th>
                    <th style="text-align:center;">AKSI</th>
                </tr>

            </thead>
        </table>
    </div>

</body>
</html>
