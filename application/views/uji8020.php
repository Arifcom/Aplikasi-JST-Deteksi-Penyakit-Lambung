<div class="row">
    <div class="col s1">

    </div>
    <div class="col s10">
<?php
//UJI 102 30 DATA UJI
//$tampil = $this->db->get('data_latih')->result();
//$this->db->select('*');
//$this->db->from('data_latih');
//$this->db->limit(150, 117);
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
//
//die;
$gejala = array(
    //16 kolom
    //0 - 131 bar
    array(0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1
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
    array(0.3489, 0.9802, 0.1258, 0.3687, 0.1891, 0.0514, 0.8951, 0.5752, 0.6117, 0.4279, 0.0261, -0.0007, 0.0815, 0.3768, 0.0039, 0.039, 1),
    array(0.3074, 0.9051, 0.5581, 0.5911, 0.5731, 0.4181, 0.2438, 0.2298, 0.0713, 0.129, 0.0297, -0.0114, 0.0511, 0.0458, -0.0002, 0.0751, 2),
    array(0.5293, 0.9982, 0.1889, 0.1962, 0.2823, 0.1715, 0.2912, 0.2218, 0.17, 0.1198, 0.3919, 0.3375, 0.4373, 0.731, 0.2935, 0.5218, 3)
);


for ($i = 0; $i < 30; $i++) { //baris gejala
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
                <h6>Data yang benar: 29</h6>
                <h6>Data yang salah: 1</h6>
          </span>
        </div>
    </div>
    <div class="col s1">

    </div>
</div>
