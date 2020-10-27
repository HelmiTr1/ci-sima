<div class="wrapper wrapper-content m-t-xl animated fadeIn">
<!-- <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4><i class="fa fa-info-circle"></i> Pencarian Data Berdasarkan Lokasi Cabang</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row form-horizontal">
                            <div class="col-sm-7">
                                <div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-9"><select name="id_cabang" class="form-control" id="OptCabang"></select>
                                        </div>
                                    </div>        
                                </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    --> 

    <div class="row">
        <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h3><i class="fa fa-info-circle"></i> Data Audit Part</h3>
                      <span id="info_message"></span>
                    </div>
                    <div class="panel-body" >
            <form id="FormLap" action="<?php echo base_url()?>laporan_auditor/cetakpart" method="post">
            <div class="row">
                <div class="col-sm-9">
                    <div class="col-sm-5 form-group">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-9"><select name="id_cabang" class="form-control" id="OptCabang" required></select>
                            </div>
                        </div>        
                    </div> 
                    <div class="col-sm-7 form-group">
                            <div class="form-group" id="data_5">
                                <label class="col-sm-3 control-label">Periode Tanggal</label>
                                <div class="col-sm-9">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-m form-control" name="tgl_awal" id="tgl_awal" value="<?php echo $tgl ?>" required/>
                                    <span class="input-group-addon" id="tgl_awal">s/d</span>
                                    <input type="text" class="input-m form-control" name="tgl_akhir" id="tgl_akhir" value="<?php echo $tgl ?>" required/>
                                </div>
                            </div>
                            </div>
                    </div>
                    <span id="change" class="hidden">
                        <div  class="col-sm-5">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Auditor</label>
                            <div class="col-sm-9"><input type="text" id="auditor" class="form-control" name="auditor" required></div>
                            </div>
                        </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Tempat</label>
                        <div class="col-sm-9"><input type="text" id="tempat" class="form-control" name="tempat" required></div>
                        </div>
                    </div>
                    <div  class="col-sm-2">
                        <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block" id="type" name="type" value="pdf">OK</button>
                    </div>
                </div>
                <div class="col-sm-5 ">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Counter</label>
                        <div class="col-sm-9"><input type="text" id="counter" class="form-control" name="counter" required></div>
                    </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Kepala Cabang</label>
                        <div class="col-sm-9"><input type="text" id="kacab" class="form-control" name="kacab" required></div>
                        </div>
                    </div>
                    <div  class="col-sm-2">
                        <div class="form-group">
                        <a class="btn btn-warning btn-block" id="cancel" >Cancel</a>
                    </div>
                </div>
                    </span>
                </div>
                <div class="col-sm-3">
                        <a id="preview" class="btn btn-primary">Preview</a>
                        <a id="open" class="btn btn-danger xshow"><i class="fa fa-fw fa-file-pdf-o"></i> Download Pdf</a>

                </div>
            </div>
                    </form>
                  <hr size="100px">
                  <div class="row">
                      <div class="col-lg-12">
                        
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example gray-bg" >
                    <thead>
                    <tr >
                        <th class="text-center" width="3%">No</th>
                        <th class="text-center">Nama Lokasi</th>
                        <th class="text-center">Part Number</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">KD Rak Bin</th>
                        <th class="text-center">QTY</th>
                        <th class="text-center">Tanggal Audit</th>
                    </tr>
                    </thead>
                    <tbody id="part">
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center" width="3%">No</th>
                        <th class="text-center">Nama Lokasi</th>
                        <th class="text-center">Part Number</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">KD Rak Bin</th>
                        <th class="text-center">QTY</th>
                        <th class="text-center">Tanggal Audit</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>

                    </div>

                  </div>
                  <div class="text-right" id="pagination"></div>
                    </div>
                </div>
                </div>
            </div>

</div>
