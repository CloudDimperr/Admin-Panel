
            <div class="dataitem">
                <div class="dataitem__header">
                    <div class="dataitem__title">
                        <h1>Data Barang</h1>
                    </div>
                    <div class="dataitem__fiture">
                        <div class="dataitem__add">
                            <a href="<?= site_url('Databarang/tambahbarang'); ?>" class="dataitem__adddetails">
                                <span>Tambah Barang<ion-icon name="add-circle-outline"></ion-icon></span>
                            </a>    
                        </div>
                        <div class="dataitem__search">
                            <label>
                                <input type="text" placeholder="Search...">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dataitem__details">
                    <table>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td>Bahan/Merk</td>
                                <td>Jumlah</td>
                                <td>Gambar</td>
                                <td>Keterangan</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>A-001-18</td>
                                <td>Loker</td>
                                <td>Besi</td>
                                <td>1</td>
                                <td><span class="dataitem__img"><img src="assets/a-001-18.jpg"></span></td>
                                <td>Baik</td>
                                <td>
                                    <a href="<?= site_url('Databarang/editbarang'); ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= site_url('Databarang/hapusbarang'); ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>A-002-18</td>
                                <td>Kipas Angin</td>
                                <td>Miyako</td>
                                <td>1</td>
                                <td><span class="dataitem__img"><img src="assets/a-002-18.jpg"></span></td>
                                <td>Kurang Baik</td>
                                <td>
                                    <a href="<?= site_url('Databarang/editbarang'); ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= site_url('Databarang/hapusbarang'); ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>A-003-18</td>
                                <td>Stand Mic</td>
                                <td>Krezt</td>
                                <td>1</td>
                                <td><span class="dataitem__img"><img src="assets/a-003-18.jpg"></span></td>
                                <td>Kurang Baik</td>
                                <td>
                                    <a href="<?= site_url('Databarang/editbarang'); ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= site_url('Databarang/hapusbarang'); ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>A-004-18</td>
                                <td>Kursi Cokelat</td>
                                <td>Kayu</td>
                                <td>1</td>
                                <td><span class="dataitem__img"><img src="assets/a-004-18.jpg"></span></td>
                                <td>Baik</td>
                                <td>
                                    <a href="<?= site_url('Databarang/editbarang'); ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= site_url('Databarang/hapusbarang'); ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>A-005-18</td>
                                <td>Dispenser</td>
                                <td>Cosmos</td>
                                <td>1</td>
                                <td><span class="dataitem__img"><img src="assets/a-005-18.jpg"></span></td>
                                <td>Baik</td>
                                <td>
                                    <a href="<?= site_url('Databarang/editbarang'); ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= site_url('Databarang/hapusbarang'); ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="popup">
                    <div class="item__header">Tambah Barang Baru</div>
                    <div class="item__details">
                        <div class="item__code">
                            <div>Kode Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan kode barang..">
                            </label>
                        </div>
                        <div class="item__name">
                            <div>Nama Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan nama barang..">
                            </label>
                        </div>
                        <div class="item__brand">
                            <div>Bahan/Merk</div>
                            <label>
                                <input type="text" placeholder="Masukkan bahan/merk barang..">
                            </label>
                        </div>
                        <div class="item__total">
                            <div>Jumlah Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan jumlah barang..">
                            </label>
                        </div>
                        <div class="item__img">
                            <div>Gambar Barang</div>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                            </form>
                        </div>
                        <div class="item__desc">
                            <div>Keterangan Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan keterangan barang..">
                            </label>
                        </div>
                    </div>
                    <div class="item__addoption">
                        <a href="<?= site_url('Databarang/'); ?>">
                            <span class="item__canceladd">Batal</span>
                        </a>
                        <a href="<?= site_url('Databarang/'); ?>">
                            <span class="item__saveadd">Simpan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
