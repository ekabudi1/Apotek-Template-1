<body style="background-color: #AEDEFC; height: 100vh;">

    <center>
        <form action="dashboard.php?page=proses_add_pelanggan" method="POST" enctype="multipart/form-data">
            <div class="card text-center" style="width: 50%; margin-top: 10%;">
                <div class="card-header" style="background-color: #F875AA;">
                    <h1 style="font-weight: 700;">TAMBAH PELANGGAN</h1>
                </div>
                <div class="card-body" style="background-color: #FFDFDF;">
                    <!-- <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Nama Lengkap</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="nama_lengkap">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Bukti Resep</span>
                        <input type="file" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="buktifotoresep">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Telephone</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="telp">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Alamat</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="alamat">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Usia</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" name="usia">
                    </div>

                </div>
                <div class="card-footer text-body-secondary" style="background-color: #FFF6F6;">
                    <input type="submit" value="Simpan Data Pelanggan">
                </div>
            </div>
            <table>

                <!-- <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text"name="nama_lengkap"></td>
                </tr> -->
                <!-- <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr> -->
                <!-- <tr>
                    <td>Telp</td>
                    <td><input type="text" name="telp"></td>
                </tr> -->
                <!-- <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia"></td>
                </tr> -->
                <!-- <tr>
                    <td>Bukti Foto Resep</td>
                    <td><input type="file" name="buktifotoresep"></td>
                </tr> -->

                <!-- 
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data Pelanggan"></td>
                </tr> -->
            </table>
        </form>

    </center>
</body>