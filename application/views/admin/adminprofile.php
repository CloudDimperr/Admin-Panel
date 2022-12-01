
            <div class="admin__profile">
                <div class="admin__pic"><ion-icon name="person-circle-outline"></ion-icon></div>
                <div class="admin__name">
                    <div>Nama</div>
                    <div class="admin__namelabel">
                        <a href="<?= site_url('Admin/editnama');?>">
                            <span class="admin__namedetails">Admin
                                <ion-icon name="create-outline"></ion-icon>
                            </span>
                        </a>  
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
