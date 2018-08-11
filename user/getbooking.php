<?php
include "../inc/koneksi.php";
$hasil1="select * from tb_jadwal where id_jadwal='$_GET[q]'";
$pesan1=mysqli_query($con, $hasil1);
$data1=mysqli_fetch_array($pesan1);

$hasil2="select * from tb_kendaraan where id_kendaraan='$data1[id_kendaraan]'";
$pesan2=mysqli_query($con, $hasil2);
$data2=mysqli_fetch_array($pesan2);

$hasil3="select * from tb_supir where id_supir='$data1[id_supir]'";
$pesan3=mysqli_query($con, $hasil3);
$data3=mysqli_fetch_array($pesan3);

$hasil4="select * from tb_jadwal where id_jadwal='$data1[id_jadwal]'";
$pesan4=mysqli_query($con, $hasil4);
$data4=mysqli_fetch_array($pesan4);

?>



                                    <form class="form-horizontal form-label-left" method="get" action=""  enctype="multipart/form-data">
                                        <div class="item form-group">
                                        <label for="jam_keb" class="control-label col-md-3">Nama Supir </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="disabledInput" type="text" name="supir" value="<?php echo $data3['nama_supir'];?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="" disabled>
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kendaraan">Jenis Kendaraan <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="disabledInput" type="text" name="jenis_kendaraan" value="<?php echo $data2['jenis_kendaraan'];?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="" disabled>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kendaraan">No Kendaraan <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="disabledInput" type="text" name="id_kendaraan"  value="<?php echo $data2['id_kendaraan'];?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="" disabled>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_polisi">No Polisi <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="disabledInput" type="text" name="no_polisi" value="<?php echo $data2['no_polisi'];?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="" disabled>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_keb">Tanggal Keberangkatan</label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="tgl_keb" class="form-control col-md-7 col-xs-12" name="tgl_keb" type="datetime" value="<?php echo date("Y-m-d H:i:s",strtotime('+3 hours'));?>" >
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Jumlah Pemesanan </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="number" min="1" max="39" value="0" name="qty" step="1" data-validate-length="0" class="form-control col-md-7 col-xs-12" placeholder="Pilih Jumlah Pemesanan">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="" class="control-label col-md-3">Harga </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="number" name="otiket" class="form-control col-md-7 col-xs-12" readonly>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="" class="control-label col-md-3">Sub Total </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="number" name="osub" class="form-control col-md-7 col-xs-12" readonly>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <input id="submit" type="submit" value="Next" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>