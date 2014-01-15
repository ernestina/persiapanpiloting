<h2>REKAP PERSIAPAN PILOTING</h2>

<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $no = 1;
        ?>
        <table width="100%" class=" zebra">
            <thead>
                <tr>
                    <th rowspan="2" width="5%">No</th>
                    <th rowspan="2" width="21%">Kantor</th>
                    <th colspan="3" width="18%">Jaringan</th>
                    <th colspan="5" width="30%">Data Awal (diisi KPPN)</th>
                    <th colspan="3" width="18%">Data Awal (Diisi Tim SPAN)</th>
                    <th rowspan="2" width="8%">TOTAL</th>
                </tr>
                <tr>
                    <th width="6%">11</th>
                    <th width="6%">12</th>
                    <th width="6%">13</th>
                    <th width="6%">21</th>
                    <th width="6%">22</th>
                    <th width="6%">23</th>
                    <th width="6%">24</th>
                    <th width="6%">25</th>
                    <th width="6%">31</th>
                    <th width="6%">32</th>
                    <th width="6%">33</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 1000) {
                    ?><tr style="text-align: center">
                        <td><?php echo $no++; ?></td>
                        <td style="text-align: left"><a href="#"><?php echo $val->get_kd_d_kppn(); ?></a></td>
                        <td><?php
                            if ($val->get_kd_d_pc() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_laser() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_dot() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_supplier() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_kontrak() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_saldo() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_retur() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_konversi() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_supplier_tim() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_kontrak_tim() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_user_id() == 1) {
                                echo "<icon class='icon-ok'></icon>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            echo $val->get_kd_d_pc() + $val->get_kd_d_laser() + $val->get_kd_d_dot() + $val->get_kd_d_supplier() + $val->get_kd_d_kontrak() + $val->get_kd_d_saldo() + $val->get_kd_d_retur() + $val->get_kd_d_konversi() + $val->get_kd_d_supplier_tim() + $val->get_kd_d_kontrak_tim() + $val->get_kd_d_user_id();
                            ?>/11</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</div>


