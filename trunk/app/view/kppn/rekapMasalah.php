<h2>REKAP MASALAH</h2>

<div id="top">
        <?php
        $no = 1;
        ?>
        <table width="95%" class="table-bordered zebra" style="margin-left: 20px">
            <thead>
                <tr>
                    <th width="2%" >No</th>
                    <th width="21%">Kantor</th>
                    <th width="36%">Masalah Infrastruktur</th>
                    <th width="36%">Masalah Data</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 1000) {
                    ?><tr >
                        <td style="text-align: right"><?php echo $no++; ?></td>
                        <td><?php echo $val->get_kd_d_kppn(); ?></a></td>
                        <td><?php 
							if ($val->get_kd_d_pc_mas() != "") { 
							echo "<b>Masalah PC: </b>"; echo $val->get_kd_d_pc_mas(); echo "<br>"; }
							if ($val->get_kd_d_laser_mas() != "") { 
							echo "<b>Masalah P. Laser: </b>"; echo $val->get_kd_d_laser_mas(); echo "<br>"; }
							if ($val->get_kd_d_dot_mas() != "") { 
							echo "<b>Masalah P. Dotmatrix: </b>"; echo $val->get_kd_d_dot_mas(); echo "<br>"; }
							?> 
						</td>
                        <td><?php
							if ($val->get_kd_d_supplier_mas() != "") { 
							echo "<b>Masalah Supplier: </b>"; echo $val->get_kd_d_supplier_mas(); echo "<br>"; }
							if ($val->get_kd_d_kontrak_mas() != "") { 
							echo "<b>Masalah Kontrak: </b>"; echo $val->get_kd_d_kontrak_mas(); echo "<br>"; }
							if ($val->get_kd_d_saldo_mas() != "") { 
							echo "<b>Masalah Saldo Bank: </b>"; echo $val->get_kd_d_saldo_mas(); echo "<br>"; }
							if ($val->get_kd_d_retur_mas() != "") { 
							echo "<b>Masalah Retur: </b>"; echo $val->get_kd_d_retur_mas(); echo "<br>"; }
							if ($val->get_kd_d_konversi_mas() != "") { 
							echo "<b>Masalah Aplikasi Konversi: </b>"; echo $val->get_kd_d_konversi_mas(); echo "<br>"; }
						?>
						</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
 
</div>


