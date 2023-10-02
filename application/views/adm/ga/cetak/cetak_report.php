
            <div class="page-heading">
                <h3>REPORTING AP</h3>
                <hr>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">By Tanggal</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>report/filter" method="post" target="_blank">
                                    <input type="hidden" name="nilaifilter" class="form-control" value="1">
                                        <div class="form-group">
                                            <label>Dari Tanggal </label>
                                            <input type="date" name="tanggalawal" value=""  class="form-control">
                                        </div><br>

                                        <div class="form-group">
                                            <label>Sampai pada Tanggal </label>
                                            <input type="date" name="tanggalakhir" value=""  class="form-control">
                                        </div><br>

                                        <div class="float-end">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-printer"> <b>Print</b></i></button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">By Bulan</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url(); ?>report/filter" method="post" target="_blank">
                                        <input type="hidden" name="nilaifilter" class="form-control" value="2">
                                        <div class="form-group">
                                            <label>Pilih Tahun</label>
                                                <select name="tahun1" class="form-control" value="" required="">
                                                    <option> </option>
                                                    <?php foreach ($tahun as $thn): ?>
                                                        <option value="<?php echo $thn->tahun ?>"><?php echo $thn->tahun ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dari Bulan</label>
                                                <select name="bulanawal" class="form-control" value="" required="">
                                                    <option value=""></option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Sampai pada Bulan</label>
                                                <select name="bulanakhir" class="form-control" value="" required="">
                                                    <option value=""></option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                        </div>

                                        <div class="float-end">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-printer"> <b>Print</b></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">By Tahun</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>report/filter" method="post" target="_blank">
                                    <input type="hidden" name="nilaifilter" class="form-control" value="3">
                                    <div class="form-group">
                                        <label>Pilih Tahun</label>
                                            <select name="tahun2" class="form-control" value="" required="">
                                                <option> </option>
                                                <?php foreach ($tahun as $thn): ?>
                                                    <option value="<?php echo $thn->tahun ?>"><?php echo $thn->tahun ?></option>  
                                                <?php endforeach ?>
                                            </select>
                                    </div>
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-printer"> <b> Print</b></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
