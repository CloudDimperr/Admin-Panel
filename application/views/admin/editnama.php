
            <div class="admin__profile">
                <div class="admin__pic"><ion-icon name="person-circle-outline"></ion-icon></div>
                <div class="admin__nameedit">
                    <div>Nama</div>
                        <span class="admin__namedetails">
                            <label>
                                <input type="text" placeholder="Masukkan nama baru..">
                            </label>
                            <a href="<?= site_url('Admin/');?>">
                                <span><ion-icon name="checkmark"></ion-icon></span>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="admin__password">
                    <div>Password</div>
                    <div class="admin__passwordlabel">
                        <span class="admin__passworddetails">********
                            <ion-icon name="eye-off-outline"></ion-icon>
                        </span>
                    </div>
                    <div class="admin__changepw">
                        <a href="<?= site_url('Admin/ubahpassword');?>">
                            <span class="admin__changepwdetails">Ubah password?</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
