<div class="page-content">
    <section class="row">
        <br><br><center>
            <h2><strong>Detail Permohonana Fasilitas Komunikasi</strong></h2>
        <br><br> 

        <table class=" col-11 table">  
            <tr>
                <th>Tanggal</th>
                <td class="text-center"> <h4><span class="btn btn-primary btn-sm"><?php echo $detail_permohonan->tanggal ?></span></h4></td>
            </tr>

            <tr>
                <th>Nama Lengkap</th>
                    <td class="text-center"><?php echo $detail_permohonan->nama ?></td>
            </tr>

            <tr>
                <th>NRP</th>
                    <td class="text-center"><?php echo $detail_permohonan->nrp ?></td>
            </tr>

            <tr>
                <th>Jabatan</th>
                    <td class="text-center"><?php echo $detail_permohonan->jabatan ?></td>
            </tr>

            <tr>
                <th>Divisi / Dept</th>
                    <td class="text-center"><?php echo $detail_permohonan->dept ?></td>
            </tr>

            <tr>
                <th>Besar Pengeluaran</th>
                    <td class="text-center">Rp. <?php echo $detail_permohonan->pengeluaran ?>,-</td>
            </tr>

            <tr>
                <th>Besar Penggantian</th>
                    <td class="text-center">Rp.<?php echo $detail_permohonan->pengganti ?>,-</td>
            </tr>

            <tr>
                <th>Tanggal Pemakaian</th>
                    <td class="text-center"><?php echo $detail_permohonan->pemakaian ?></td>
            </tr>

            <tr>
                <th>Lokasi Claim</th>
                    <td class="text-center"><?php echo $detail_permohonan->lokasi_claim ?></td>
            </tr>

            <tr>
                <th>Tanggal Claim</th>
                    <td class="text-center"><?php echo $detail_permohonan->tanggal_claim ?></td>
            </tr>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('permohonan/index') ?>" class="btn btn-primary btn-sm">Kembali</i></a>
            </center>
            <br><br>

    </section>
</div>