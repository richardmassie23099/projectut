<div class="page-content">
    <section class="row">
        <br><br><center>
            <h2><strong>Detail Kondisi APAR</strong></h2>
        <br><br> 

        <table class=" col-11 table">  
            <tr>
                <th>Tanggal Pengecekan</th>
                <td> <h4><span class="btn btn-primary btn-sm"><?php echo $detail_apar->tanggal ?></span></h4></td>
            </tr>

            <tr>
                <th>Kode</th>
                    <td class="text-center"><?php echo $detail_apar->no_apar ?></td>
            </tr>

            <tr>
                <th>Lokasi / Posisi</th>
                    <td class="text-center"><?php echo $detail_apar->lokasi ?></td>
            </tr>

            <tr>
                <th>Kondisi Visual</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_visual ?></td>
            </tr>

            <tr>
                <th>Kondisi Tekanan (Arah Jarum)</th>
                    <td class="text-center"><?php echo $detail_apar->arah_jarum ?></td>
            </tr>

            <tr>
                <th>Kondisi Segel</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_segel ?></td>
            </tr>

            <tr>
                <th>Kondisi Isi</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_isi ?></td>
            </tr>

            <tr>
                <th>Kondisi Hose</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_hose ?></td>
            </tr>

            <tr>
                <th>Kondisi Handle</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_handle ?></td>
            </tr>

            <tr>
                <th>Kondisi Lock Pin</th>
                    <td class="text-center"><?php echo $detail_apar->lock_pin ?></td>
            </tr>

            <tr>
                <th>Penempatan</th>
                    <td class="text-center"><?php echo $detail_apar->kondisi_apar ?></td>
            </tr>

            <tr>
                <th>Rambu-Rambu</th>
                    <td class="text-center"><?php echo $detail_apar->rambu_apar ?></td>
            </tr>
            
            <tr>
                <th>Keterangan</th>
                    <td class="text-center"><?php echo $detail_apar->keterangan ?></td>
            </tr>

            <tr>
                <th>Gambar / Foto</th>
                    <td class="text-center"><img src="<?php echo base_url(); ?>assets/foto/apar/<?php echo $detail_apar->foto; ?>" width="200px" height="auto"></td>
            </tr>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('apar/index') ?>" class="btn btn-primary btn-sm">KEMBALI</i></a>
            </center>
            <br>

    </section>
</div>