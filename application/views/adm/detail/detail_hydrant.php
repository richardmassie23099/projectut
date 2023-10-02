<div class="page-content">
    <section class="row">
        <br><br><center>
            <h2><strong>Detail Kondisi HYDRANT</strong></h2>
        <br><br> 

        <table class=" col-11 table">  
        <tr>
                <th>Tanggal</th>
                    <td class="text-center"><h4><span class="btn btn-primary btn-sm"><?php echo $detail_hydrant->tanggal ?></span></h4></td>
            </tr>

            <tr>
                <th>Kode</th>
                    <td class="text-center"><?php echo $detail_hydrant->no_hydrant ?></td>
            </tr>

            <tr>
                <th>Lokasi / Posisi</th>
                    <td class="text-center"><?php echo $detail_hydrant->lokasi ?></td>
            </tr>

            <tr>
                <th>Kondisi Hose</th>
                    <td class="text-center"><?php echo $detail_hydrant->kondisi_hose ?></td>
            </tr>

            <tr>
                <th>Kondisi Nozzle</th>
                    <td class="text-center"><?php echo $detail_hydrant->kondisi_nozzle ?></td>
            </tr>

            <tr>
                <th>Kondisi Stand</th>
                    <td class="text-center"><?php echo $detail_hydrant->stand_hydrant ?></td>
            </tr>

            <tr>
                <th>Lock Pin</th>
                    <td class="text-center"><?php echo $detail_hydrant->lock_pin ?></td>
            </tr>

            <tr>
                <th>Kebocoran</th>
                    <td class="text-center"><?php echo $detail_hydrant->kebocoran ?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                    <td class="text-center"><?php echo $detail_hydrant->keterangan ?></td>
            </tr>

            <tr>
                <th>Gambar / Foto</th>
                    <td class="text-center"><img src="<?php echo base_url(); ?>assets/foto/hydrant/<?php echo $detail_hydrant->foto; ?>" width="200px" height="auto"></td>
            </tr>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('apar/index') ?>" class="btn btn-primary btn-sm">KEMBALI</i></a>
            </center>
            <br>

    </section>
</div>