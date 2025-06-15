<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/ListFasilitasRuangan'); ?>">
</head>
<body>
    <h1>yahoooooooo</h1>
    <?php 
        $RuanganGroup = []; 
        foreach($ruanganFasilitas as $rf) {
            $RuanganGroup[$rf['id_ruangan_fasilitas']] = [
                'id_ruangan_fasilitas' => $rf['id_ruangan_fasilitas'],
                'nama_ruang' => $rf['nama_ruang'],
                'kapasitas' => $rf['kapasitas'],
                // 'url_foto' => $rf['url_foto'],
                'fasilitas' => [],
            ];

            $RuanganGroup[$rf['id_ruangan_fasilitas']]['fasilitas'][] = [
                'nama_fasilitas' => $rf['nama_fasilitas'],
                'jumlah_fasilitas' => $rf['jumlah_fasilitas']
            ];
        };
    ?>
    
    <?php foreach($RuanganGroup as $rg): ?>
        <h2>Ruang <?= $rg['nama_ruang']; ?></h2>
        <h5>Memiliki Kapasitas <?= $rg['kapasitas']; ?></h5>
        <img src="" alt="">
        <p>Fasilitas: </p>
        <?php foreach($rg['fasilitas'] as $f): ?>
            <li>
                <ul><?= $f['nama_fasilitas']; ?></ul>
                <ul><?= $f['jumlah_fasilitas']; ?></ul>
            </li>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <main class="main-container">
        <div class="room-grid">

            <div class="room-card">
                <div class="card-image-container">
                    <img src="A15.jpg" alt="Ruang A15" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: A15</h2>
                        <span class="capacity-tag">Kapasitas: 50</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3382/3382956.png" alt="Ikon Proyektor" class="facility-icon">
                            <span>Proyektor</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/16094/16094471.png" alt="Ikon Papan Tulis" class="facility-icon">
                            <span>Papan Tulis</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/8160/8160181.png" alt="Ikon Screen Projector" class="facility-icon">
                            <span>Screen projector</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <div class="card-image-container">
                    <img src="LabMTI.jpg" alt="Lab MTI" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: LAB MTI</h2>
                        <span class="capacity-tag">Kapasitas: 40</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3382/3382956.png" alt="Ikon Proyektor" class="facility-icon">
                            <span>Proyektor</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/16094/16094471.png" alt="Ikon Papan Tulis" class="facility-icon">
                            <span>Papan Tulis</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3474/3474360.png" alt="Ikon Komputer" class="facility-icon">
                            <span>Komputer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <div class="card-image-container">
                    <img src="LabKomdas.jpg" alt="Lab Komdas" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: LAB KOMDAS</h2>
                        <span class="capacity-tag">Kapasitas: 50</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/16094/16094471.png" alt="Ikon Papan Tulis" class="facility-icon">
                            <span>Papan Tulis</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3474/3474360.png" alt="Ikon Komputer" class="facility-icon">
                            <span>Komputer</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <div class="card-image-container">
                    <img src="A13.jpg" alt="A13" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: A13</h2>
                        <span class="capacity-tag">Kapasitas: 40</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3382/3382956.png" alt="Ikon Proyektor" class="facility-icon">
                            <span>Proyektor</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/16094/16094471.png" alt="Ikon Papan Tulis" class="facility-icon">
                            <span>Papan Tulis</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/8160/8160181.png" alt="Ikon Screen Projector" class="facility-icon">
                            <span>Screen projector</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <div class="card-image-container">
                    <img src="A14.jpg" alt="Ruang A14" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: A14</h2>
                        <span class="capacity-tag">Kapasitas: 75</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3382/3382956.png" alt="Ikon Proyektor" class="facility-icon">
                            <span>Proyektor</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/16094/16094471.png" alt="Ikon Papan Tulis" class="facility-icon">
                            <span>Papan Tulis</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3162/3162498.png" alt="Ikon TV" class="facility-icon">
                            <span>TV</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/8160/8160181.png" alt="Ikon Screen Projector" class="facility-icon">
                            <span>Screen projector</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-card">
                <div class="card-image-container">
                    <img src="LabBigData.jpg" alt="Lab Big Data" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-title-header">
                        <h2>RUANG: LAB BIG DATA</h2>
                        <span class="capacity-tag">Kapasitas: 50</span>
                    </div>
                    <h3>FASILITAS:</h3>
                    <div class="facilities-grid">
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3162/3162498.png" alt="Ikon TV" class="facility-icon">
                            <span>TV</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/1530/1530297.png" alt="Ikon Pendingin Ruangan" class="facility-icon">
                            <span>Pendingin Ruangan</span>
                        </div>
                        <div class="facility-item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3474/3474360.png" alt="Ikon Komputer" class="facility-icon">
                            <span>Komputer</span>
                        </div>
                    </div>
                </div>
            </div>

            </div> <div class="back-button-container">
                <a href="#" class="back-button">Kembali</a>
            </div>
        </div>
    </main>
</body>
</html>