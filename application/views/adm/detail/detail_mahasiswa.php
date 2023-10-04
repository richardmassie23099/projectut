<div class="content-wrapper">
    <section class="content">
        <br><center>
        <h3><strong>DETAIL DATA MAHASISWA PKL</strong></h3>
        <br> </center>
        <table class="table">  
            <tr>
                <th>NRP</th>
                <td><?php echo $detail_mahasiswa->nama_mhs ?></td>
            </tr>

            <tr>
                <th>Nama Karyawan</th>
                    <td><?php echo $detail_mahasiswa->asal_kampus ?></td>
            </tr>

            <tr>
                <th>Company</th>
                    <td><?php echo $detail_mahasiswa->jurusan ?></td>
            </tr>

            <tr>
                <th>Lokasi</th>
                    <td><?php echo $detail_mahasiswa->masuk_pkl ?></td>
            </tr>

            <tr>
                <th>Departement</th>
                    <td><?php echo $detail_mahasiswa->keluar_pkl ?></td>
            </tr>

            <tr>
                <th>Posisi</th>
                    <td><?php echo $detail_mahasiswa->no_telp ?></td>
            </tr>

            <tr>
                <th>Tempat lahir</th>
                    <td><?php echo $detail_mahasiswa->alamat ?></td>
            </tr>
            
            <tr>
                <th>Tanggal lahir</th>
                    <td><?php echo $detail_mahasiswa->email ?></td>
            </tr>

            <tr>
                <th>Status keluarga</th>
                    <td><?php echo $detail_mahasiswa->email ?></td>
            </tr>

            <tr>
                <th>Jumlah anak</th>
                    <td><?php echo $detail_mahasiswa->email ?></td>
            </tr>

            <tr>
                <th>Tanggal mulai bekerja</th>
                    <td><?php echo $detail_mahasiswa->email ?></td>
            </tr>

        </table><br>
        <center>
        <a href="<?php echo base_url('mahasiswa/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>