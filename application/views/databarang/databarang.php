
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
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/a-001-18.jpg"></span></td>
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
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/a-002-18.jpg"></span></td>
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
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/a-003-18.jpg"></span></td>
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
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/a-004-18.jpg"></span></td>
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
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/a-005-18.jpg"></span></td>
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
            </div>
        </div>
    </div>
