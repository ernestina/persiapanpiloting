<br>
<div id="header">
			<div id="kiri">
				<h2>FORM ISIAN <?php echo Session::get('user'); ?></h2>
			</div>
			<div id="kanan">
				<canvas id="canvas" height="70" width="70" style="padding-left: 10px"></canvas>
				<h2 style="margin-top: -10px; margin-right: 10px">12/15</h2>
				<!--div id="bundar" class="merah dikananatas"></div-->
			</div>
		</div><br><br><br><br><br><br>
<!--div id="kanan">
				<canvas id="canvas" height="70" width="70" style="padding-left: 10px"></canvas>
				<h2 style="margin-top: -15px; margin-left: 10px">12/15</h2>
				<!--div id="bundar" class="merah dikananatas"></div-->
			<!--/div-->
<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        foreach ($this->data as $val) {
            $kd_d_tgl = $val->get_kd_d_tgl();
            $kd_d_pc = $val->get_kd_d_pc();
            $kd_d_pc_mas = $val->get_kd_d_pc_mas();
            $kd_d_laser = $val->get_kd_d_laser();
            $kd_d_laser_mas = $val->get_kd_d_laser_mas();
            $kd_d_dot = $val->get_kd_d_dot();
            $kd_d_dot_mas = $val->get_kd_d_dot_mas();
            $kd_d_supplier = $val->get_kd_d_supplier();
            $kd_d_supplier_mas = $val->get_kd_d_supplier_mas();
            $kd_d_kontrak = $val->get_kd_d_kontrak();
            $kd_d_kontrak_mas = $val->get_kd_d_kontrak_mas();
            $kd_d_saldo = $val->get_kd_d_saldo();
            $kd_d_saldo_mas = $val->get_kd_d_saldo_mas();
            $kd_d_retur = $val->get_kd_d_retur();
            $kd_d_retur_mas = $val->get_kd_d_retur_mas();
            $kd_d_konversi = $val->get_kd_d_konversi();
            $kd_d_konversi_mas = $val->get_kd_d_konversi_mas();
            $kd_d_supplier_tim = $val->get_kd_d_supplier_tim();
            $kd_d_supplier_tim_mas = $val->get_kd_d_supplier_tim_mas();
            $kd_d_kontrak_tim = $val->get_kd_d_kontrak_tim();
            $kd_d_kontrak_tim_mas = $val->get_kd_d_kontrak_tim_mas();
            $kd_d_user_id = $val->get_kd_d_user_id();
            $kd_d_user_id_mas = $val->get_kd_d_user_id_mas();
        }
        ?>
        <!--<div id="wtgl"  class="error"></div>-->
		<!--coba code-->
        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Infrastruktur</div><br>
			<input type=hidden name='kd_d_user' value="<?php echo Session::get('id_user'); ?>">
            <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
			<label class="isian" style="margin-left: 150px">Tanggal</label>
			<input type="text" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $kd_d_tgl; ?>">
		<table width="100%" class="zebra">
		
		<!--baris pertama-->
		<tr>
			<td width="30%"><label>Pengetesan PC: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td width="10%"><select name="kd_d_pc" id="kd_d_pc">
				<?php if ($kd_d_pc == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                ?>
			</select></td>
			<td width="50%" style="margin-left: 10px"><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_pc_mas" id="kd_d_pc_mas" value=""><?php echo $kd_d_pc_mas; ?></textarea></td>
			<td width="10%"><div id="bundar" class="hijau"></div></td>
		</tr>
		<!--baris kedua-->
		<tr>
			<td><label>Pengetesan Printer Laser: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_laser" id="kd_d_laser" >
				<?php if ($kd_d_laser == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                            ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_laser_mas" id="kd_d_laser_mas" value=""><?php echo $kd_d_laser_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
		<!--baris ketiga-->
		<tr>
			<td><label>Pengetesan Printer Dotmatrix: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
				
			<td><select name="kd_d_dot" id="kd_d_dot">
				<?php if ($kd_d_dot == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                            ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dot_mas" id="kd_d_dot_mas"><?php echo $kd_d_dot_mas; ?></textarea></td>
				<td width="10%"><div id="bundar" class="hijau"></div></td>
		</tr>
	</table>

<div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Data Awal</div>
	
	<table width="100%" class="zebra">
		
		<tr>
			<td width="30%"><label>Supplier: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td width="10%"><select name="kd_d_supplier" id="kd_d_supplier">
				<?php if ($kd_d_supplier == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
			<td width="50%" style="margin-left: 10px"><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_supplier_mas" id="kd_d_supplier_mas" value=""><?php echo $kd_d_supplier_mas; ?></textarea></td>
			<td width="10%"><div id="bundar" class="hijau"></div></td>
		</tr>
		
		<tr>
			<td><label>Kontrak: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_kontrak" id="kd_d_kontrak" >
				<?php if ($kd_d_kontrak == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_kontrak_mas" id="kd_d_kontrak_mas" value=""><?php echo $kd_d_kontrak_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
		<tr>
			<td><label>Saldo Bank: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_saldo" id="kd_d_saldo" >
				<?php if ($kd_d_saldo == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_saldo_mas" id="kd_d_saldo_mas" value=""><?php echo $kd_d_saldo_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
		<tr>
			<td><label>Retur: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_retur" id="kd_d_retur" >
				<?php if ($kd_d_retur == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_retur_mas" id="kd_d_retur_mas" value=""><?php echo $kd_d_retur_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
		<tr>
			<td><label>Aplikasi Konversi & Koneksi ke FTP: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_konversi" id="kd_d_konversi">
				<?php if ($kd_d_konversi == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_konversi_mas" id="kd_d_konversi_mas" value=""><?php echo $kd_d_konversi_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
	</table>
<div id="komponen3"><i class="icon-folder-open icon-white" id="label"></i>Data Awal Tim SPAN</div>
	<table width="100%" class="zebra">
	
		<tr>
			<td width="30%"><label>Konfimasi Supplier: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td width="10%"><select name="kd_d_supplier_tim" id="kd_d_supplier_tim">
				<?php if ($kd_d_supplier_tim == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
			<td width="50%" style="margin-left: 10px"><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas" value=""><?php echo $kd_d_supplier_tim_mas; ?></textarea></td>
			<td width="10%"><div id="bundar" class="hijau"></div></td>
		</tr>
		
		<tr>
			<td><label>Konfimasi Kontrak: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_kontrak_tim" id="kd_d_kontrak_tim">
				<?php if ($kd_d_kontrak_tim == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas" value=""><?php echo $kd_d_kontrak_tim_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
		<tr>
			<td><label>User ID/Password SPAN: <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label></td>
			<td><select name="kd_d_user_id" id="kd_d_user_id">
				<?php if ($kd_d_user_id == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                ?>
			</select></td>
				<td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3" name="kd_d_user_id_mas" id="kd_d_user_id_mas" value=""><?php echo $kd_d_user_id_mas; ?></textarea></td>
				<td><div id="bundar" class="merah"></div></td>
		</tr>
		
	</table>
		<!--end coba-->
		
		
		<!--label class="isian">Tanggal</label>
        <div class="kolom">
            <fieldset><legend>Jaringan</legend>
                
                <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="hijau" ></div></center></h2>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    <li><label class="isian">Pengetesan PC</label>
                        <select name="kd_d_pc" id="kd_d_pc" style="width: 110px" type="text">
                            <?php if ($kd_d_pc == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                            ?>
                        </select>
                    </li>
                    <li>
                        <label class="isian">Permasalahan Pengetesan PC</label><textarea type="text" name="kd_d_pc_mas" id="kd_d_pc_mas" rows="7" value=""><?php echo $kd_d_pc_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    <li><label class="isian">Pengetesan Printer Laser<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                        <select name="kd_d_laser" id="kd_d_laser" style="width: 110px" type="text">
                            <?php if ($kd_d_laser == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                            ?>
                        </select>
                    </li>
                    <li>
                        <label class="isian">Permasalahan Pengetesan Printer Laser</label><textarea type="text" name="kd_d_laser_mas" id="kd_d_laser_mas" rows="7" value=""><?php echo $kd_d_laser_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    <li><label class="isian">Pengetesan Printer Dotmatrix<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                        <select name="kd_d_dot" id="kd_d_dot" style="width: 110px" type="text">
                            <?php if ($kd_d_dot == 1) {
                                ?>
                                <option value="1" selected>Ya</option>
                                <option value="0" >Tidak</option>
                            <?php } else {
                                ?>
                                <option value="1" >Ya</option>
                                <option value="0" selected>Tidak</option>
                                <?php
                            }
                            ?>
                        </select>
                    </li>
                    <li>
                        <label class="isian">Permasalahan Pengetesan Printer Dotmatrix</label><textarea type="text" name="kd_d_dot_mas" id="kd_d_dot_mas" rows="7" value=""><?php echo $kd_d_dot_mas; ?></textarea>
                    </li>
                </ul>
                <ul class="inline">
                    <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                    <li><input class="sukses" type="submit" name="add_d_kppn" value="SIMPAN" onclick=""></li>
                </ul>
            </fieldset>
        </div>
        <div class="kolom">
            <fieldset><legend>Data Awal</legend>
                <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="merah" ></div></center></h2>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Supplier<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_supplier" id="kd_d_supplier" style="width: 110px" type="text">
                        <?php if ($kd_d_supplier == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Supplier</label><textarea type="text" name="kd_d_supplier_mas" id="kd_d_supplier_mas" rows="7" value=""><?php echo $kd_d_supplier_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Kontrak<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_kontrak" id="kd_d_kontrak" style="width: 110px" type="text">
                        <?php if ($kd_d_kontrak == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Kontrak</label><textarea type="text" name="kd_d_kontrak_mas" id="kd_d_kontrak_mas" rows="7" value=""><?php echo $kd_d_kontrak_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Saldo Bank<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_saldo" id="kd_d_saldo" style="width: 110px" type="text">
                        <?php if ($kd_d_saldo == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Saldo Bank</label><textarea type="text" name="kd_d_saldo_mas" id="kd_d_saldo_mas" rows="7" value=""><?php echo $kd_d_saldo_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Retur<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_retur" id="kd_d_retur" style="width: 110px" type="text">
                        <?php if ($kd_d_retur == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Retur</label><textarea type="text" name="kd_d_retur_mas" id="kd_d_retur_mas" rows="7" value=""><?php echo $kd_d_retur_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Aplikasi Konversi & Koneksi ke FTP<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_konversi" id="kd_d_konversi" style="width: 110px" type="text">
                        <?php if ($kd_d_konversi == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Pemasalahan Aplikasi Konversi & Koneksi ke FTP</label><textarea type="text" name="kd_d_konversi_mas" id="kd_d_konversi_mas" rows="7" value=""><?php echo $kd_d_konversi_mas; ?></textarea>
                    </li>
                </ul>
                <ul class="inline tengah1">
                    <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                    <li><input class="sukses" type="submit" name="add_d_kppn" value="SIMPAN" onclick="return ceklvl1();"></li>
                </ul>
            </fieldset>
        </div>    
        <div class="kolom">
            <fieldset><legend>Data Awal Tim SPAN</legend>
                <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="hijau" ></div></center></h2>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Konfimasi Supplier<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_supplier_tim" id="kd_d_supplier_tim" style="width: 110px" type="text">
                        <?php if ($kd_d_supplier_tim == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Konfimasi Supplier</label><textarea type="text" name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas" rows="7" value=""><?php echo $kd_d_supplier_tim_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">Konfimasi Kontrak<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_kontrak_tim" id="kd_d_kontrak_tim" style="width: 110px" type="text">
                        <?php if ($kd_d_kontrak_tim == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan Konfimasi Kontrak</label><textarea type="text" name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas" rows="7" value=""><?php echo $kd_d_kontrak_tim_mas; ?></textarea>
                    </li>
                </ul>
                <!--<div id="pilihan1"  class="error"></div>-->
                <!--ul class="inline">
                    </li><label class="isian">User ID / Password SPAN<abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
                    <select name="kd_d_user_id" id="kd_d_user_id" style="width: 110px" type="text">
                        <?php if ($kd_d_user_id == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select>
                    <li>
                        <label class="isian">Permasalahan User ID / Password SPAN</label><textarea type="text" name="kd_d_user_id_mas" id="kd_d_user_id_mas" rows="7" value=""><?php echo $kd_d_user_id_mas; ?></textarea>
                    </li>
                </ul>
                <ul class="inline">
                    <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                    <li><input class="sukses" type="submit" name="add_d_kppn" value="SIMPAN" onclick="return ceklvl1();"></li>
                </ul>
            </fieldset>
        </div>
    </form!--> 
	<ul class="inline">
                    <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                    <li><input class="sukses" type="submit" name="add_d_kppn" value="SIMPAN" onclick="return ceklvl1();"></li>
                </ul>
</div> <!--end top-->
	
<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        });
    });
	var donat = [
	{
		value: 60,
		color:"#E06666"
	},
	
	{
		value : 40,
		color : "#70DB70"
	}
	

]

var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(donat);
</script>


