<!DOCTYPE html>
<html>
<head>
    <title>Rumus | BS4</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container col-md-6 mt-4">
        <h1>Program Rumus</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                <a href="./">
                    <svg xmlns="back.svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                </a>
                Persegi Panjang
            </div>
            <div class="card-body">
                <form action="#" method="POST" role="form" enctype="multipsrt/form-data">
                    <div class="form-group">
                        <label>Masukkan Nilai Panjang</label>
                        <input type="text" name="panjang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Masukkan Nilai Lebar</label>
                        <input type="text" name="lebar" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">HITUNG</button>
                </form><br>
                <div class="alert alert-dark" role="alert">
                <?php
                    if(isset($_POST['submit'])){
                        $panjang = $_POST['panjang'];
                        $lebar = $_POST['lebar'];
                        $satuan = ("cm");
                        $satuan1 = ("cm^2");
                        
                        //Keliling Persegi Panjang
                        $rumusK = 2*($panjang+$lebar);

                        //Luas Persegi Panjang
                        $rumusL = $panjang*$lebar;

                        echo "<b>Jawaban</b><br/>";
                        echo "Diketahui;<br/>";
                        echo "Nilai Panjang = $panjang $satuan<br/>";
                        echo "Nilai Lebar = $lebar $satuan<br/>";
                        echo "Hasil nilai keliling persegi panjang adalah $rumusK $satuan<br/>";
                        echo "Hasil nilai luas persegi panjang adalah $rumusL $satuan1<br/>";
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>