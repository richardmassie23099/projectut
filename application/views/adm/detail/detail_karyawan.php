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
                    <td><?php echo $detail_karyawan->nama_karyawan ?></td>
            </tr>

            <tr>
                <th>Company</th>
                    <td><?php echo $detail_karyawan->company ?></td>
            </tr>

            <tr>
                <th>Lokasi</th>
                    <td><?php echo $detail_karyawan->lokasi ?></td>
            </tr>

            <tr>
                <th>Departement</th>
                    <td><?php echo $detail_karyawan->departement ?></td>
            </tr>

            <tr>
                <th>Posisi</th>
                    <td><?php echo $detail_karyawan->posisi ?></td>
            </tr>

            <tr>
                <th>Tempat lahir</th>
                    <td><?php echo $detail_karyawan->tempat_lahir ?></td>
            </tr>
            
            <tr>
                <th>Tanggal lahir</th>
                    <td><?php echo $detail_karyawan->tanggal_lahir ?></td>
            </tr>

            <tr>
                <th>Status keluarga</th>
                    <td><?php echo $detail_karyawan->status_keluarga ?></td>
            </tr>

            <tr>
                <th>Jumlah anak</th>
                    <td><?php echo $detail_karyawan->jumlah_anak ?></td>
            </tr>

            <tr>
                <th>Tanggal mulai bekerja</th>
                    <td><?php echo $detail_karyawan->tanggal_mulai_bekerja ?></td>
            </tr>

            <tr>
                <th>Foto Karyawan</th>
                    <td>
                        <img src="<?php echo base_url() ; ?>assets/foto/karyawan/<?php echo $detail_karyawan->foto; ?>" >
                    </td>
            </tr>

        </table><br>
        <center>
        <a href="<?php echo base_url('karyawan/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>