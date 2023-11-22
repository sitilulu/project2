 </div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <!-- <?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row ux-->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!--  row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2">Data User</span>
                <a class="text-danger"><i
                        class="fas fa-search mt-2 float-right">Tampilkan</i></a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>

                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama SBarang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($barang as $b) { ?>
                            <tr>
                                <td>
                                    <?= $i++; ?>
                                </td>
                                <td>
                                    <?= $b['nama_barang']; ?>
                                </td>
                                <td>
                                    <?= $b['harga']; ?>
                                </td>
                                <td>
                                    <?= $b['stok']; ?>
                                </td>
                                <td>
                                    <?= $b['harga']; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>