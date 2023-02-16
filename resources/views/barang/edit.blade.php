 <!-- Edit -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="" action="">
                        <input type="hidden" class="form-control" name="id" value="{{-- <?php echo $data['id']; ?> --}}">
                        <div class="data form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">KD BARANG</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kd_barang"
                                    value="">
                            </div>
                        </div>
                        <div class="data form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">NAMA BARANG</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nm_barang"
                                    value="">
                            </div>
                            <div class="data form-group">
                                <div class="col-sm-2">
                                    <label class="control-label modal-label">TIPE BARANG</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tp_barang"
                                        value="">
                                </div>
                                <div class="data form-group">
                                    <div class="col-sm-2">
                                        <label class="control-label modal-label">JUMLAH BARANG</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="jml_barang"
                                            value="">
                                    </div>
                                    <div class="data form-group">
                                        <div class="col-sm-2">
                                            <label class="control-label modal-label">DISTRIBUTOR BARANG</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="dstbr_barang"
                                                value="">
                                        </div>
                                        <div class="data form-group">
                                            <div class="col-sm-2">
                                                <label class="control-label modal-label">TANGGAL KELUAR</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tgl_keluar"
                                                    value="">
                                            </div>
                                            <div class="data form-group">
                                                <div class="col-sm-2">
                                                    <label class="control-label modal-label">TANGGAL MASUK</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="tgl_masuk"
                                                        value="">
                                                </div>
                        </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-info"><span class="glyphicon glyphicon-check"></span>
                    Update</a>
                    </form>
            </div>

        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete{{-- <?php echo $data['id']; ?>" --}} tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center">{{-- <?php echo $data['id']; ?> --}}</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="php/delete_data_biaya.php?id={{-- <?php echo $data['id']; ?> --}}" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
