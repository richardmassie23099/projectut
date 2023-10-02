<div class="page-content">
    <section class="row">
        <br><br><center>
            <h2><strong>Detail Deklarasi Karyawan</strong></h2>
            <br><br> 

        <table class="table text-center">
            <tbody>
                <tr>
                    <th rowspan="2" >Tanggal</th>
                    <th rowspan="2" >Keperluan</th>
                    <th rowspan="2" >Amount</th>
                    <th rowspan="2" >Keterangan</th>
                    <th colspan="2" >Uang deklarasi sudah diterima oleh:</th>
                </tr>
                <tr>
                    <th>NRP</th>
                    <td>Hose</td>
                </tr>
            </tbody>
                <tr>
                    <td><?php echo $detail_deklarasi->tanggal ?></td>
                    <td><?php echo $detail_deklarasi->keperluan ?></td>
                    <td><?php echo $detail_deklarasi->amount ?></td>
                    <td><?php echo $detail_deklarasi->keterangan ?></td>
                </tr>
        </table>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('deklarasi/index') ?>" class="btn btn-primary btn-sm">Kembali</i></a>
            </center>
            <br><br>

    </section>
</div>