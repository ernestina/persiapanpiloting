<h2>FORM ISIAN KPPN</h2>
<div id="top">
    <?php
    foreach ($this->data as $val) {
        echo $val->get_kd_d_konversi();
    }
    ?>
    <!--<div id="wtgl"  class="error"></div>-->
    <label class="isian">Tanggal</label><input type="text" name="tanggal" id="kd_d_tgl" size="20" value="">
    <div class="kolomx">
        <fieldset><legend>Sub Isian 1</legend>
            <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="hijau" ></div></center></h2>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 1 A <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 1 B <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 1 C <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 1 D <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 1 E <abbr title="adalah penjelasan dari Pilihan 1 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="wmslh"  class="error"></div>-->
            <label class="isian">Permasalahan</label><textarea type="text" name="masalah" id="masalah" rows="7" value=""></textarea>
            <ul class="inline tengah1">
                <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                <li><input class="sukses" type="submit" name="upd_bobot" value="SIMPAN" onclick="return ceklvl1();"></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomy">
        <fieldset><legend>Sub Isian 2</legend>
            <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="merah" ></div></center></h2>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 2 A <abbr title="adalah penjelasan dari Pilihan 2 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 2 B <abbr title="adalah penjelasan dari Pilihan 2 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 2 C <abbr title="adalah penjelasan dari Pilihan 2 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 2 D <abbr title="adalah penjelasan dari Pilihan 2 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 2 E <abbr title="adalah penjelasan dari Pilihan 2 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <label class="isian">Permasalahan</label><textarea type="text" name="masalah" id="masalah" rows="7" value=""></textarea>
            <ul class="inline tengah1">
                <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                <li><input class="sukses" type="submit" name="upd_bobot" value="SIMPAN" onclick="return ceklvl1();"></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomz">
        <fieldset><legend>Sub Isian 3</legend>
            <h2 height="200" width="200"><center>STATUS : <br> <div id="bundar" class="merah" ></div></center></h2>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 3 A <abbr title="adalah penjelasan dari Pilihan 3 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 3 B <abbr title="adalah penjelasan dari Pilihan 3 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 3 C <abbr title="adalah penjelasan dari Pilihan 3 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 3 D <abbr title="adalah penjelasan dari Pilihan 3 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <!--<div id="pilihan1"  class="error"></div>-->
            <label class="isian">Pilihan 3 E <abbr title="adalah penjelasan dari Pilihan 3 A"><i class="icon-question-sign"></i></abbr></label>
            <select name="pilihan1" id="pilihan1" style="width: 110px" type="text">
                <option value="1">Ya</option>
                <option value="2" selected>Tidak</option>
            </select>
            <label class="isian">Permasalahan</label><textarea type="text" name="masalah" id="masalah" rows="7" value=""></textarea>
            <ul class="inline tengah1">
                <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                <li><input class="sukses" type="submit" name="upd_bobot" value="SIMPAN" onclick="return ceklvl1();"></li>
            </ul>
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


