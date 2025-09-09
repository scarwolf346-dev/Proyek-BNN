<?php
    //cek session
    if(!empty($_SESSION['admin'])){
?>

<nav class="blue-grey darken-1">
    <div class="nav-wrapper">
        <a href="./" class="brand-logo center hide-on-large-only"><i class="material-icons md-36">BNN</i> Sistem Informasi Surat</a>
        <ul id="slide-out" class="side-nav" data-simplebar-direction="vertical">
            <li class="no-padding">
                <div class="logo-side center blue-grey darken-3">
                    <?php
                        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                        while($data = mysqli_fetch_array($query)){
                            if(!empty($data['logo'])){
                                echo '<img class="logoside" src="./upload/'.$data['logo'].'"/>';
                            } else {
                                echo '<img class="logoside" src="./asset/img/logo.png"/>';
                            }
                            if(!empty($data['nama'])){
                                echo '<h5 class="smk-side">'.$data['nama'].'</h5>';
                            } else {
                                echo '<h5 class="smk-side">Badan Narkotika Nasional</h5>';
                            }
                            if(!empty($data['alamat'])){
                                echo '<p class="description-side">'.$data['alamat'].'</p>';
                            } else {
                                echo '<p class="description-side">Jl. Letjen M.T. Haryono No.11, RT.1/RW.6, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630</p>';
                            }
                        }
                    ?>
					</li>
            <li><a href="?page=ref"><i class="material-icons middle">class</i> Referensi</a></li>
            <li class="no-padding">
					</li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header"><i class="material-icons">image</i> Galeri File</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=gsm">Surat Masuk</a></li>
                                <li><a href="?page=gsk">Surat Keluar</a></li>
                            </ul>
                        </div>
            <li><a class="dropdown-button" href="#!" data-activates="agenda">Galeri File <i class="material-icons md-18">arrow_drop_down</i></a></li>
                <ul id='agenda' class='dropdown-content'>
                    <li><a href="?page=gsm">Surat Masuk</a></li>
                    <li><a href="?page=gsk">Surat Keluar</a></li>
                </ul>
				</div>
		</nav>