<div class="content-wrapper">
    <section class="content">
        <br><center>
        <h3><strong>DETAIL DATA MAHASISWA PKL</strong></h3>
        <br> </center>
        <table class="table">  
            <tr>
                <th>Nama Mahasiswa PKL</th>
                <td><?php echo $detail_mahasiswa->nama_mhs ?></td>
            </tr>

            <tr>
                <th>Asal Kampus Mahasiswa</th>
                    <td><?php echo $detail_mahasiswa->asal_kampus ?></td>
            </tr>

            <tr>
                <th>Jurusan</th>
                    <td><?php echo $detail_mahasiswa->jurusan ?></td>
            </tr>

            <tr>
                <th>Tanggal Masuk PKL</th>
                    <td><?php echo $detail_mahasiswa->masuk_pkl ?></td>
            </tr>

            <tr>
                <th>Tanggal Keluar PKL</th>
                    <td><?php echo $detail_mahasiswa->keluar_pkl ?></td>
            </tr>

            <tr>
                <th>Nomor Telephone ( HP )</th>
                    <td><?php echo $detail_mahasiswa->no_telp ?></td>
            </tr>

            <tr>
                <th>Alamat Mahasiswa PKL</th>
                    <td><?php echo $detail_mahasiswa->alamat ?></td>
            </tr>
            
            <tr>
                <th>E-mail Mahasiswa PKL</th>
                    <td><?php echo $detail_mahasiswa->email ?></td>
            </tr>

        </table><br>
        <center>
        <a href="<?php echo base_url('mahasiswa/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>