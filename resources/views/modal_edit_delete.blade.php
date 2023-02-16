<!-- Modal -->
<div class="modal fade" id="edit{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="admin/{{ $p->id }})" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control form-control-alternative"
                                    id="exampleFormControlInput1" placeholder="Masukan id" value="{{ $p->id }}"
                                    hidden>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('kd_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="kd_barang" class="form-control form-control-alternative"
                                    id="exampleFormControlInput1" placeholder="Masukkan kd barang"
                                    value="{{ $p->kd_barang }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('nm_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="nm_barang" placeholder="Masukkan nama barang"
                                    class="form-control form-control-alternative" value="{{ $p->nm_barang }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('tp_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <select name="tp_barang" id="" class="form-control">
                                    <option value="{{ $p->tp_barang }}" hidden>{{ $p->tp_barang }}</option>
                                    <option value="Packs">Packs</option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Slop">Slop</option>
                                    <option value="Box">Box</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('jml_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="jml_barang" placeholder="Masukkan jumlah barang"
                                    class="form-control form-control-alternative" value="{{ $p->jml_barang }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('dstbr_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="dstbr_barang" class="form-control form-control-alternative"
                                    id="exampleFormControlInput1" placeholder="Masukkan distributor barang"
                                    value="{{ $p->dstbr_barang }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('tgl_masuk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="date" name="tgl_masuk" placeholder="Masukkan tanggal masuk"
                                    class="form-control form-control-alternative" value="{{ $p->tgl_masuk }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            @error('tgl_keluar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="date" name="tgl_keluar" class="form-control form-control-alternative"
                                    id="exampleFormControlInput1" placeholder="Masukkan tanggal keluar"
                                    value="{{ $p->tgl_keluar }}">
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn"
                                style="color: white; background-color: #312450">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="delete<?php $p->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php $p->id; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <form action="{{ url('admin/' . $p->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>

        </div>
    </div>
</div>
