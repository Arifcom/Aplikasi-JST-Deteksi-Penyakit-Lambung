<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/19/2017
 * Time: 9:59 PM
 */
?>
<div class="row">
    <div class="col s12 center"><h3>Gejala Pasien</h3></div>
    <div class="col s3"></div>
    <div class="col s6 center">
        <form method="post" action="<?php echo base_url('diagnosa/loading'); ?>">
            <p>
                <input type="checkbox" class="filled-in" id="mual" name="mual" value="1"/>
                <label for="mual">Mual</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="muntah" name="muntah" value="1"/>
                <label for="muntah">Muntah</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="sbh" name="sbh" value="1"/>
                <label for="sbh">Sakit di bagian hulu hati</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="nmb" name="nmb" value="1"/>
                <label for="nmb">Nafsu makan berkurang</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="mtp" name="mtp" value="1"/>
                <label for="mtp">Mulut terasa pahit</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="sb" name="sb" value="1"/>
                <label for="sb">Sering bersendawa</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="regurgitas" name="regurgitas" value="1"/>
                <label for="regurgitas">Regurgitas</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="kembung" name="kembung" value="1"/>
                <label for="kembung">Kembung</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="ptp" name="ptp" value="1"/>
                <label for="ptp">Perut terasa penuh</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="ck" name="ck" value="1"/>
                <label for="ck">Cepat kenyang</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="mgadm" name="mgadm" value="1"/>
                <label for="mgadm">Mengeluarkan gas asam dari mulut</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="nbtd" name="nbtd" value="1"/>
                <label for="nbtd">Nyeri di belakang tulang dada</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="ss" name="ss" value="1"/>
                <label for="ss">Suara serak</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="pbb" name="pbb" value="1"/>
                <label for="pbb">Penurunan berat badan</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="smbt" name="smbt" value="1"/>
                <label for="smbt">Sesak menyedat pada bagian tengah</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="pdp" name="pdp" value="1"/>
                <label for="pdp">Panas di dada dan perut</label>
            </p>
            </p>
            <button class="btn waves-effect waves-light red" type="submit" name="action">Diagnosa
                <i class="material-icons right">autorenew</i>
            </button>
        </form>
    </div>
    <div class="col s3"></div>
</div>
