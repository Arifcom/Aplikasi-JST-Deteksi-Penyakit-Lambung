<div class="row">
    <div class="col s1">

    </div>
    <div class="col s10">
<?php
//UJI 102 45 DATA UJI
////$tampil = $this->db->get('data_latih')->result();
//$this->db->select('*');
//$this->db->from('data_latih');
//$this->db->limit(150, 102);
//$tampil = $this->db->get()->result();
//
//$gejaladb;
//
//foreach ($tampil as $data) {
//
//    $gejaladb[] = $data->mual . " " . $data->muntah . " " . $data->sbh . " "
//            . $data->nmb . " " . $data->mtp . " " . $data->sb . " " . $data->regurgitas . " " . $data->kembung . " " . $data->ptp . " " . $data->ck
//            . " " . $data->mgadm . " " . $data->nbtd . " " . $data->ss . " "
//            . $data->pbb . " " . $data->smbt . " " . $data->pdp . " " . $data->kelas . "<br>";
//}
//
//for ($i = 0; $i < count($tampil); $i++) {
//    $gejal = explode(" ", $gejaladb[$i]);
//    $gejale = implode(",", $gejal);
//
//    echo "array(" . $gejale . "),";
//}
$gejala = array(
    //16 kolom
    //0 - 131 bar
    array(0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 3
    ), array(0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 3
    ), array(1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 3
    ), array(0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 3
    ), array(1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 3
    ), array(0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 3
    ), array(1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 3
    ), array(0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 3
    ), array(1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 3
    ), array(0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 1, 3
    ), array(0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 3
    ), array(0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1
    ), array(0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1
    ), array(0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1
    ), array(0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1
    ), array(1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1
    ), array(0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1
    ), array(1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1
    ), array(0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1
    ), array(0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1
    ), array(1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1
    ), array(0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 2
    ), array(0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 2
    ), array(1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2
    ), array(1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(1, 1, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2
    ), array(0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 2
    ), array(0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 2
    ), array(0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2
    ), array(0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 3
    ), array(1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 3
    ), array(0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 3
    ), array(1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 3
    )
);

$bobot = array(//0 - 15 gejala 16 kelas
    array(0.3606, 1.0086, 0.1636, 0.4359, 0.194, -0.0081, 0.9828, 0.6985, 0.708, 0.5471, -0.0483, -0.0132, -0.0314, 0.2977, -0.0559, -0.0665, 1),
    array(0.2394, 0.8655, 0.5815, 0.7033, 0.6357, 0.3594, 0.233, 0.2571, 0.0062, 0.1603, -0.0586, -0.0263, -0.1127, 0.0603, -0.1619, 0.0171, 2),
    array(0.9215, 1.0318, 0.0338, 0.9592, 0.7, -0.0193, 0.0169, -0.0712, -0.0027, -0.007, 0.1229, 0.0169, -0.0024, 1.0814, 0.1076, 0.9805, 3)
);


for ($i = 0; $i < 45; $i++) { //baris gejala
    $sum = array(0, 0, 0, 0, 0);
    for ($j = 0; $j < 3; $j++) { //baris bobot
        for ($k = 0; $k < 16; $k++) { //kolom gejala nya dan bobot
            $pangkat[$j][$k] = ($gejala[$i][$k] - $bobot[$j][$k]) * ($gejala[$i][$k] - $bobot[$j][$k]);
        }

        for ($k = 0; $k < 16; $k++) {
            $sum[$j] = $sum[$j] + $pangkat[$j][$k];
        }
        //jarak
        $sqrt[$j] = sqrt($sum[$j]); //Jarak
    }
    ?>

    <table border='1'>
        <h2>Jarak Data -  <?php echo $i + 1; ?></h2>
        <tr style="color: #fff; text-align: center;" BGCOLOR="gray"><?php for ($z = 0; $z < 3; $z++) { ?>
                <td> Jarak <?php echo $z + 1; ?></td><?php } ?>
        </tr>
        <tr BGCOLOR="#f2f2f2"><?php for ($z = 0; $z < 3; $z++) { ?>
                <td style="width: 200px;"><?php echo number_format($sqrt[$z], 4) ?></td><?php } ?>
        </tr>


    </table>

    <?php
    //cari jarak minimal
    $minimal = min($sqrt[0], $sqrt[1], $sqrt[2]);
    for ($x = 0; $x < 3; $x++) {
        //cek apakah sama isi dengan array terkecil
        if ($sqrt[$x] !== $minimal) {
            echo number_format($sqrt[$x], 4) . " , " . $gejala[$i][16];
            echo "<br>";
        } else if ($sqrt[$x] == $minimal) {
            echo number_format($sqrt[$x], 4) . " , Minimal " . $gejala[$i][16];
            echo "<br>";
        }
    }
    ?>

    <?php
}
?>
        <div class="card-panel black">
          <span class="white-text">
                <h6>Data yang benar: 31</h6>
                <h6>Data yang salah: 14</h6>
          </span>
        </div>
    </div>
    <div class="col s1">

    </div>
</div>
