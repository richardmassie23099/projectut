<div class="content-wrapper">
    <section class="content">
        <br><center>
        <h3><strong>DETAIL DATA ARSIP</strong></h3>
        <br> </center>
        <table class="table">  
            <tr>
                <th>No Dokumen</th>
                <td><?php echo $detail_arsip->no_dokumen ?></td>
            </tr>

            <tr>
                <th>Jenis Dokumen</th>
                    <td><?php echo $detail_arsip->jenis_dokumen ?></td>
            </tr>

            <tr>
                <th>Tanggal Dokumen</th>
                    <td><?php echo $detail_arsip->tanggal_dokumen ?></td>
            </tr>

            <tr>
                <th>Cabang</th>
                    <td><?php echo $detail_arsip->cabang ?></td>
            </tr>

            <tr>
                <th>Status</th>
                    <td><?php echo $detail_arsip->status ?></td>
            </tr>

            <tr>
                <th>Type</th>
                    <td><?php echo $detail_arsip->type ?></td>
            </tr>

            <tr>
                <th>Kepada/th>
                    <td><?php echo $detail_arsip->kepada ?></td>
            </tr>
            
            <tr>
                <th>Keperluan</th>
                    <td><?php echo $detail_arsip->keperluan ?></td>
            </tr>

            <tr>
                <th>Lokasi arsip</th>
                    <td><?php echo $detail_arsip->lokasi_arsip ?></td>
            </tr>



        </table><br>
        <center>
        <a href="<?php echo base_url('arsip/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>