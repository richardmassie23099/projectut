<div class="content-wrapper">
    <section class="content">
        <br><center>
        <h3><strong>DETAIL DATA ASSET</strong></h3>
        <br> </center>
        <table class="table">  
            <tr>
                <th>No Asset</th>
                <td><?php echo $detail_asset->no_asset ?></td>
            </tr>

            <tr>
                <th>Class</th>
                    <td><?php echo $detail_asset->class ?></td>
            </tr>

            <tr>
                <th>Cap Date</th>
                    <td><?php echo $detail_asset->cap_date ?></td>
            </tr>

            <tr>
                <th>Deskripsi</th>
                    <td><?php echo $detail_asset->deskripsi ?></td>
            </tr>

            <tr>
                <th>Lokasi</th>
                    <td><?php echo $detail_asset->lokasi ?></td>
            </tr>

            <tr>
                <th>Deskripsi Lokasi</th>
                    <td><?php echo $detail_asset->deskripsi_lokasi ?></td>
            </tr>

            <tr>
                <th>Acq Value</th>
                    <td><?php echo $detail_asset->acq_value ?></td>
            </tr>
            
            <tr>
                <th>Dep Value</th>
                    <td><?php echo $detail_asset->dep_value ?></td>
            </tr>

            <tr>
                <th>Book Value</th>
                    <td><?php echo $detail_asset->book_value ?></td>
            </tr>

            <tr>
                <th>kondisi</th>
                    <td><?php echo $detail_asset->kondisi ?></td>
            </tr>

            <tr>
                <th>Utilisasi</th>
                    <td><?php echo $detail_asset->utilisasi ?></td>
            </tr>

            <tr>
                <th>Hilang</th>
                    <td><?php echo $detail_asset->hilang ?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                    <td><?php echo $detail_asset->keterangan ?></td>
            </tr>

        </table><br>
        <center>
        <a href="<?php echo base_url('asset/index') ?>" class="btn btn-sm btn-primary">KEMBALI</i></a></center><br>
    </section>
</div>