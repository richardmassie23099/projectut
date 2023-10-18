<div class="content-wrapper">
    <section class="content">
        <br><center>
        <h3><strong>DETAIL DATA KARYAWAN</strong></h3>
        <br> </center>
        <table class="table">  
            <tr>
                <th>NRP</th>
                <td><?php echo $detail_karyawan->nrp ?></td>
            </tr>

            <tr>
                <th>Nama Karyawan</th>
                    <td><?php echo $detail_karyawan->nama_kry ?></td>
            </tr>

            <tr>
                <th>Company</th>
                    <td><?php echo $detail_karyawan->company ?></td>
            </tr>

            <tr>
                <th>Department</th>
                <td><?php echo $detail_karyawan->departement ?></td>
            </tr>

            <tr>
                <th>Posisi</th>
                <td><?php echo $detail_karyawan->posisi ?></td>
            </tr>

            <tr>
                <th>Lokasi</th>
                    <td><?php echo $detail_karyawan->lokasi ?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                    <td><?php echo $detail_karyawan->tempat_lahir ?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                    <td><?php echo $detail_karyawan->tgl_lahir ?></td>
            </tr>

            <tr>
                <th>Status Keluarga</th>
                    <td><?php echo $detail_karyawan->status ?></td>
            </tr>

            <tr>
                <th>Jumlah Anak</th>
                    <td><?php echo $detail_karyawan->jumlah_anak ?></td>
            </tr>

            <tr>
                <th>Tanggal Mulai Bekerja</th>
                    <td><?php echo $detail_karyawan->tgl_bekerja ?></td>
            </tr>

            <tr>
                <th>Foto</th>
                    <td><?php echo $detail_karyawan->foto ?></td>
            </tr>

        </table><br>
        <center>
        <a href="<?php echo base_url('karyawan/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>