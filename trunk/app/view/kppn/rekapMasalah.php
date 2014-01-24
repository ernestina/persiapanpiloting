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
							echo "Masalah PC: "; echo $val->get_kd_d_pc_mas(); echo "<br>"; }
							if ($val->get_kd_d_laser_mas() != "") { 
							echo "Masalah P. Laser: "; echo $val->get_kd_d_laser_mas(); echo "<br>"; }
							if ($val->get_kd_d_dot_mas() != "") { 
							echo "Masalah P. Dotmatrix: "; echo $val->get_kd_d_dot_mas(); echo "<br>"; }
							?> 
						</td>
                        <td><?php
							if ($val->get_kd_d_supplier_mas() != "") { 
							echo "Masalah Supplier: "; echo $val->get_kd_d_supplier_mas(); echo "<br>"; }
							if ($val->get_kd_d_kontrak_mas() != "") { 
							echo "Masalah Kontrak: "; echo $val->get_kd_d_kontrak_mas(); echo "<br>"; }
							if ($val->get_kd_d_saldo_mas() != "") { 
							echo "Masalah Saldo Bank: "; echo $val->get_kd_d_saldo_mas(); echo "<br>"; }
							if ($val->get_kd_d_retur_mas() != "") { 
							echo "Masalah Retur: "; echo $val->get_kd_d_retur_mas(); echo "<br>"; }
							if ($val->get_kd_d_konversi_mas() != "") { 
							echo "Masalah Aplikasi Konversi: "; echo $val->get_kd_d_konversi_mas(); echo "<br>"; }
						?>
						</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
 
</div>


