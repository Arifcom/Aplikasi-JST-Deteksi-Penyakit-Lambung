<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 1/4/2018
 * Time: 6:59 AM
 */
?>
<table>
    <thead>
    <tr>
        <th style="text-align: center;">Nomor</th>
        <th style="text-align: center;">Mual</th>
        <th style="text-align: center;">Muntah</th>
        <th style="text-align: center;">Sakit Bagian Hulu Hari</th>
        <th style="text-align: center;">Nafsu Makan Berkurang</th>
        <th style="text-align: center;">Mulut Pahit</th>
        <th style="text-align: center;">Sering Bersendawa</th>
        <th style="text-align: center;">Regurgitas</th>
        <th style="text-align: center;">Kembung</th>
        <th style="text-align: center;">Perut Terasa Penuh</th>
        <th style="text-align: center;">Cepat Kenyang</th>
        <th style="text-align: center;">Keluar Gas Asam Dari Mulut</th>
        <th style="text-align: center;">Nyeri di Belakang Tulang Dada</th>
        <th style="text-align: center;">Suara Serak</th>
        <th style="text-align: center;">Penurunan Berat Badan</th>
        <th style="text-align: center;">Sesak Seperti Menyedat pada Bagian Dada</th>
        <th style="text-align: center;">Panas di Dada dan Perut</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($query as $datas):
        echo
        "
            <tr>
                <td style='text-align: center;'>$datas->data_latih_id</td>
                <td style='text-align: center;'>$datas->mual</td>
                <td style='text-align: center;'>$datas->muntah</td>
                <td style='text-align: center;'>$datas->sbh</td>
                <td style='text-align: center;'>$datas->nmb</td>
                <td style='text-align: center;'>$datas->mtp</td>
                <td style='text-align: center;'>$datas->sb</td>
                <td style='text-align: center;'>$datas->regurgitas</td>
                <td style='text-align: center;'>$datas->kembung</td>
                <td style='text-align: center;'>$datas->ptp</td>
                <td style='text-align: center;'>$datas->ck</td>
                <td style='text-align: center;'>$datas->mgadm</td>
                <td style='text-align: center;'>$datas->nbtd</td>
                <td style='text-align: center;'>$datas->ss</td>
                <td style='text-align: center;'>$datas->pbb</td>
                <td style='text-align: center;'>$datas->smbt</td>
                <td style='text-align: center;'>$datas->pdp</td>
            </tr>
        ";
    endforeach;
    ?>
    </tbody>
</table>
