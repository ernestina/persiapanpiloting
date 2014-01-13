<h2>KONDISI KPPN DI <?php
    foreach ($this->data_kanwil as $val_kanwil) {
        $nama_kanwil = $val_kanwil->get_kd_d_user();
        echo $nama_kanwil;
    }
    ?>
</h2>
<div id="top">

    <?php
    $jml_sukses = 0;
    $jml_kppn = 0;
    ?>
                <?php foreach ($this->data as $val) { ?>
        <div class = "kolomw">
            <fieldset><legend><?php
                echo $val->get_kd_d_kppn();
                ?></legend>
                <?php
                $all = $val->get_kd_d_pc() + $val->get_kd_d_laser() + $val->get_kd_d_dot() + $val->get_kd_d_supplier() + $val->get_kd_d_kontrak() + $val->get_kd_d_saldo() + $val->get_kd_d_retur() + $val->get_kd_d_konversi() + $val->get_kd_d_supplier_tim() + $val->get_kd_d_kontrak_tim() + $val->get_kd_d_user_id();
                if ($all == 11) {
                    echo "<h2 height = '200' width = '200'><center>STATUS : <br> <div id = 'bundar' class = 'hijau' ></div></center></h2>";
                    $jml_sukses++;
                    $jml_kppn++;
                } else {
                    echo "<h2 height = '200' width = '200'><center>STATUS : <br> <div id = 'bundar' class = 'merah' ></div></center></h2>";
                    $jml_kppn++;
                }
                ?>
                <center><h2><?php echo $all ?>/11</h2></center>
            </fieldset>
        </div>

        <?php
    }
    ?>
    <div class="kolomv">
        <fieldset><legend>Resume KPPN di <?php echo $nama_kanwil; ?></legend>
            <?php
            if ($jml_sukses / $jml_kppn == 1) {
                echo "<h2 height='200' width='200'><center>STATUS : <br> <div id='bundar' class='hijau' ></div></center></h2>";
            } else {
                echo "<h2 height='200' width='200'><center>STATUS : <br> <div id='bundar' class='merah' ></div></center></h2>";
            }
            ?>
            <center><h0><?php echo $jml_sukses; ?>/<?php echo $jml_kppn; ?></h0></center>
        </fieldset>
    </div>
</div>

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "dd-mm-yy"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        });
    });
</script>


