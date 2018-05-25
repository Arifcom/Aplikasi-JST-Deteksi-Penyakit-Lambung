<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:39 AM
 */

class Diagnosa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_latih_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title']      = 'Diagnosa';
        $data['active']     = 'diagnosa';
        $data['content']    = 'diagnosa';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         =
            '
            <script type="text/javascript">
                var table;
                $(document).ready(function()
                {
                    table = $("#table").DataTable({
                    
                    });                    
                });
            </script>
            ';
        $this->parser->parse('template/template', $data);
    }

    public function loading()
    {
        $mual       = $this->input->post('mual');
        $muntah     = $this->input->post('muntah');
        $sbh        = $this->input->post('sbh');
        $nmb        = $this->input->post('nmb');
        $mtp        = $this->input->post('mtp');
        $sb         = $this->input->post('sb');
        $regurgitas = $this->input->post('regurgitas');
        $kembung    = $this->input->post('kembung');
        $ptp        = $this->input->post('ptp');
        $ck         = $this->input->post('ck');
        $mgadm      = $this->input->post('mgadm');
        $nbtd       = $this->input->post('nbtd');
        $ss         = $this->input->post('ss');
        $pbb        = $this->input->post('pbb');
        $smbt       = $this->input->post('smbt');
        $pdp        = $this->input->post('pdp');
        if(empty($mual) & empty($muntah) & empty($sbh) & empty($nmb) & empty($mtp) & empty($sb) & empty($regurgitas) & empty($kembung) & empty($ptp) & empty($ck) & empty($mgadm) & empty($nbtd) & empty($ss) & empty($pbb) & empty($smbt) & empty($pdp)) {
            $data['title']      = 'Diagnosa';
            $data['active']     = 'diagnosa';
            $data['content']    = 'hasil';
            $data['query']      = 'Anda tidak sakit';
            $data['modal']      = '';
            $data['css']        = '';
            $data['js']         = '';
            $this->parser->parse('template/template', $data);
        } else {
            if(empty($mual)) {
                $mual = 0;
            }
            if(empty($muntah)) {
                $muntah = 0;
            }
            if(empty($sbh)) {
                $sbh = 0;
            }
            if(empty($nmb)) {
                $nmb = 0;
            }
            if(empty($mtp)) {
                $mtp = 0;
            }
            if(empty($sb)) {
                $sb = 0;
            }
            if(empty($regurgitas)) {
                $regurgitas = 0;
            }
            if(empty($kembung)) {
                $kembung = 0;
            }
            if(empty($ptp)) {
                $ptp = 0;
            }
            if(empty($ck)) {
                $ck = 0;
            }
            if(empty($mgadm)) {
                $mgadm = 0;
            }
            if(empty($nbtd)) {
                $nbtd = 0;
            }
            if(empty($ss)) {
                $ss = 0;
            }
            if(empty($pbb)) {
                $pbb = 0;
            }
            if(empty($smbt)) {
                $smbt = 0;
            }
            if(empty($pdp)) {
                $pdp = 0;
            }

            $w1 = array(0.3489, 0.9802, 0.1258, 0.3687, 0.1891, 0.0514, 0.8951, 0.5752, 0.6117, 0.4279, 0.0261, -0.0007, 0.0815, 0.3768, 0.0039, 0.039, 1);
            $w2 = array(0.3074, 0.9051, 0.5581, 0.5911, 0.5731, 0.4181, 0.2438, 0.2298, 0.0713, 0.129, 0.0297, -0.0114, 0.0511, 0.0458, -0.0002, 0.0751, 2);
            $w3 = array(0.5293, 0.9982, 0.1889, 0.1962, 0.2823, 0.1715, 0.2912, 0.2218, 0.17, 0.1198, 0.3919, 0.3375, 0.4373, 0.731, 0.2935, 0.5218, 3);
            $alfa = 0.01;
            $epoch = 1;

//        $query   = $this->data_latih_model->get_entries();
//
//        $satu = 0;
//        $dua = 0;
//        $tiga = 0;
//
//        while(($alfa >= 0.001) | $epoch <= 15) {
//            foreach ($query as $datas):
//                $dispesia = pow($datas->mual - $w1[0],2)
//                    + pow($datas->muntah - $w1[1],2)
//                    + pow($datas->sbh - $w1[2],2)
//                    + pow($datas->nmb - $w1[3],2)
//                    + pow($datas->mtp - $w1[4],2)
//                    + pow($datas->sb - $w1[5],2)
//                    + pow($datas->regurgitas - $w1[6],2)
//                    + pow($datas->kembung - $w1[7],2)
//                    + pow($datas->ptp - $w1[8],2)
//                    + pow($datas->ck - $w1[9],2)
//                    + pow($datas->mgadm - $w1[10],2)
//                    + pow($datas->nbtd - $w1[11],2)
//                    + pow($datas->ss - $w1[12],2)
//                    + pow($datas->pbb - $w1[13],2)
//                    + pow($datas->smbt - $w1[14],2)
//                    + pow($datas->pdp - $w1[15],2);
//                $maag = pow($datas->mual - $w2[0],2)
//                    + pow($datas->muntah - $w2[1],2)
//                    + pow($datas->sbh - $w2[2],2)
//                    + pow($datas->nmb - $w2[3],2)
//                    + pow($datas->mtp - $w2[4],2)
//                    + pow($datas->sb - $w2[5],2)
//                    + pow($datas->regurgitas - $w2[6],2)
//                    + pow($datas->kembung - $w2[7],2)
//                    + pow($datas->ptp - $w2[8],2)
//                    + pow($datas->ck - $w2[9],2)
//                    + pow($datas->mgadm - $w2[10],2)
//                    + pow($datas->nbtd - $w2[11],2)
//                    + pow($datas->ss - $w2[12],2)
//                    + pow($datas->pbb - $w2[13],2)
//                    + pow($datas->smbt - $w2[14],2)
//                    + pow($datas->pdp - $w2[15],2);
//                $gerd = pow($datas->mual - $w3[0],2)
//                    + pow($datas->muntah - $w3[1],2)
//                    + pow($datas->sbh - $w3[2],2)
//                    + pow($datas->nmb - $w3[3],2)
//                    + pow($datas->mtp - $w3[4],2)
//                    + pow($datas->sb - $w3[5],2)
//                    + pow($datas->regurgitas - $w3[6],2)
//                    + pow($datas->kembung - $w3[7],2)
//                    + pow($datas->ptp - $w3[8],2)
//                    + pow($datas->ck - $w3[9],2)
//                    + pow($datas->mgadm - $w3[10],2)
//                    + pow($datas->nbtd - $w3[11],2)
//                    + pow($datas->ss - $w3[12],2)
//                    + pow($datas->pbb - $w3[13],2)
//                    + pow($datas->smbt - $w3[14],2)
//                    + pow($datas->pdp - $w3[15],2);
//                $satu = sqrt($dispesia);
//                $dua = sqrt($maag);
//                $tiga = sqrt($gerd);
//                if(($satu<$dua) & ($satu<$tiga)) {
//                    if($satu == $w1[16]) {
//                        $w1[0] = $w1[0] + $alfa * ($datas->mual - $w1[0]);
//                        $w1[1] = $w1[1] + $alfa * ($datas->muntah - $w1[1]);
//                        $w1[2] = $w1[2] + $alfa * ($datas->sbh - $w1[2]);
//                        $w1[3] = $w1[3] + $alfa * ($datas->nmb - $w1[3]);
//                        $w1[4] = $w1[4]+ $alfa * ($datas->mtp - $w1[4]);
//                        $w1[5] = $w1[5] + $alfa * ($datas->sb - $w1[5]);
//                        $w1[6] = $w1[6] + $alfa * ($datas->regurgitas - $w1[6]);
//                        $w1[7] = $w1[7] + $alfa * ($datas->kembung - $w1[7]);
//                        $w1[8] = $w1[8] + $alfa * ($datas->ptp - $w1[8]);
//                        $w1[9] = $w1[9] + $alfa * ($datas->ck - $w1[9]);
//                        $w1[10] = $w1[10] + $alfa * ($datas->mgadm - $w1[10]);
//                        $w1[11] = $w1[11] + $alfa * ($datas->nbtd - $w1[11]);
//                        $w1[12] = $w1[12] + $alfa * ($datas->ss - $w1[12]);
//                        $w1[13] = $w1[13] + $alfa * ($datas->pbb - $w1[13]);
//                        $w1[14] = $w1[14] + $alfa * ($datas->smbt - $w1[14]);
//                        $w1[15] = $w1[15] + $alfa * ($datas->pdp - $w1[15]);
//                    } else {
//                        $w1[0] = $w1[0] - $alfa * ($datas->mual - $w1[0]);
//                        $w1[1] = $w1[1] - $alfa * ($datas->muntah - $w1[1]);
//                        $w1[2] = $w1[2] - $alfa * ($datas->sbh - $w1[2]);
//                        $w1[3] = $w1[3] - $alfa * ($datas->nmb - $w1[3]);
//                        $w1[4] = $w1[4] - $alfa * ($datas->mtp - $w1[4]);
//                        $w1[5] = $w1[5] - $alfa * ($datas->sb - $w1[5]);
//                        $w1[6] = $w1[6] - $alfa * ($datas->regurgitas - $w1[6]);
//                        $w1[7] = $w1[7] - $alfa * ($datas->kembung - $w1[7]);
//                        $w1[8] = $w1[8] - $alfa * ($datas->ptp - $w1[8]);
//                        $w1[9] = $w1[9] - $alfa * ($datas->ck - $w1[9]);
//                        $w1[10] = $w1[10] - $alfa * ($datas->mgadm - $w1[10]);
//                        $w1[11] = $w1[11] - $alfa * ($datas->nbtd - $w1[11]);
//                        $w1[12] = $w1[12] - $alfa * ($datas->ss - $w1[12]);
//                        $w1[13] = $w1[13] - $alfa * ($datas->pbb - $w1[13]);
//                        $w1[14] = $w1[14] - $alfa * ($datas->smbt - $w1[14]);
//                        $w1[15] = $w1[15] - $alfa * ($datas->pdp - $w1[15]);
//                    }
//                } else if(($dua<$satu) & ($dua<$tiga)) {
//                    if($dua == $w2[16]) {
//                        $w2[0] = $w2[0] + $alfa * ($datas->mual - $w2[0]);
//                        $w2[1] = $w2[1] + $alfa * ($datas->muntah - $w2[1]);
//                        $w2[2] = $w2[2] + $alfa * ($datas->sbh - $w2[2]);
//                        $w2[3] = $w2[3] + $alfa * ($datas->nmb - $w2[3]);
//                        $w2[4] = $w2[4] + $alfa * ($datas->mtp - $w2[4]);
//                        $w2[5] = $w2[5] + $alfa * ($datas->sb - $w2[5]);
//                        $w2[6] = $w2[6] + $alfa * ($datas->regurgitas - $w2[6]);
//                        $w2[7] = $w2[7] + $alfa * ($datas->kembung - $w2[7]);
//                        $w2[8] = $w2[8] + $alfa * ($datas->ptp - $w2[8]);
//                        $w2[9] = $w2[9] + $alfa * ($datas->ck - $w2[9]);
//                        $w2[10] = $w2[10] + $alfa * ($datas->mgadm - $w2[10]);
//                        $w2[11] = $w2[11] + $alfa * ($datas->nbtd - $w2[11]);
//                        $w2[12] = $w2[12] + $alfa * ($datas->ss - $w2[12]);
//                        $w2[13] = $w2[13] + $alfa * ($datas->pbb - $w2[13]);
//                        $w2[14] = $w2[14] + $alfa * ($datas->smbt - $w2[14]);
//                        $w2[15] = $w2[15] + $alfa * ($datas->pdp - $w2[15]);
//                    } else {
//                        $w2[0] = $w2[0] - $alfa * ($datas->mual - $w2[0]);
//                        $w2[1] = $w2[1] - $alfa * ($datas->muntah - $w2[1]);
//                        $w2[2] = $w2[2] - $alfa * ($datas->sbh - $w2[2]);
//                        $w2[3] = $w2[3] - $alfa * ($datas->nmb - $w2[3]);
//                        $w2[4] = $w2[4] - $alfa * ($datas->mtp - $w2[4]);
//                        $w2[5] = $w2[5] - $alfa * ($datas->sb - $w2[5]);
//                        $w2[6] = $w2[6] - $alfa * ($datas->regurgitas - $w2[6]);
//                        $w2[7] = $w2[7] - $alfa * ($datas->kembung - $w2[7]);
//                        $w2[8] = $w2[8] - $alfa * ($datas->ptp - $w2[8]);
//                        $w2[9] = $w2[9] - $alfa * ($datas->ck - $w2[9]);
//                        $w2[10] = $w2[10] - $alfa * ($datas->mgadm - $w2[10]);
//                        $w2[11] = $w2[11] - $alfa * ($datas->nbtd - $w2[11]);
//                        $w2[12] = $w2[12] - $alfa * ($datas->ss - $w2[12]);
//                        $w2[13] = $w2[13] - $alfa * ($datas->pbb - $w2[13]);
//                        $w2[14] = $w2[14]- $alfa * ($datas->smbt - $w2[14]);
//                        $w2[15] = $w2[15] - $alfa * ($datas->pdp - $w2[15]);
//                    }
//                } else if(($tiga<$satu) & ($tiga<$dua)) {
//                    if($tiga == $w3[16]) {
//                        $w3[0] = $w3[0] + $alfa * ($datas->mual - $w3[0]);
//                        $w3[1] = $w3[1] + $alfa * ($datas->muntah - $w3[1]);
//                        $w3[2] = $w3[2] + $alfa * ($datas->sbh - $w3[2]);
//                        $w3[3] = $w3[3] + $alfa * ($datas->nmb - $w3[3]);
//                        $w3[4] = $w3[4] + $alfa * ($datas->mtp - $w3[4]);
//                        $w3[5] = $w3[5] + $alfa * ($datas->sb - $w3[5]);
//                        $w3[6] = $w3[6] + $alfa * ($datas->regurgitas - $w3[6]);
//                        $w3[7] = $w3[7] + $alfa * ($datas->kembung - $w3[7]);
//                        $w3[8] = $w3[8] + $alfa * ($datas->ptp - $w3[8]);
//                        $w3[9] = $w3[9] + $alfa * ($datas->ck - $w3[9]);
//                        $w3[10] = $w3[10] + $alfa * ($datas->mgadm - $w3[10]);
//                        $w3[11] = $w3[11] + $alfa * ($datas->nbtd - $w3[11]);
//                        $w3[12] = $w3[12] + $alfa * ($datas->ss - $w3[12]);
//                        $w3[13] = $w3[13] + $alfa * ($datas->pbb - $w3[13]);
//                        $w3[14] = $w3[14] + $alfa * ($datas->smbt - $w3[14]);
//                        $w3[15] = $w3[15] + $alfa * ($datas->pdp - $w2[15]);
//                    } else {
//                        $w3[0] = $w3[0] - $alfa * ($datas->mual - $w3[0]);
//                        $w3[1] = $w3[1] - $alfa * ($datas->muntah - $w3[1]);
//                        $w3[2] = $w3[2] - $alfa * ($datas->sbh - $w3[2]);
//                        $w3[3] = $w3[3] - $alfa * ($datas->nmb - $w3[3]);
//                        $w3[4] = $w3[4] - $alfa * ($datas->mtp - $w3[4]);
//                        $w3[5] = $w3[5] - $alfa * ($datas->sb - $w3[5]);
//                        $w3[6] = $w3[6] - $alfa * ($datas->regurgitas - $w3[6]);
//                        $w3[7] = $w3[7] - $alfa * ($datas->kembung - $w3[7]);
//                        $w3[8] = $w3[8] - $alfa * ($datas->ptp - $w3[8]);
//                        $w3[9] = $w3[9] - $alfa * ($datas->ck - $w3[9]);
//                        $w3[10] = $w3[11] - $alfa * ($datas->mgadm - $w3[10]);
//                        $w3[11] = $w3[11] - $alfa * ($datas->nbtd - $w3[11]);
//                        $w3[12] = $w3[12] - $alfa * ($datas->ss - $w3[12]);
//                        $w3[13] = $w3[13] - $alfa * ($datas->pbb - $w3[13]);
//                        $w3[14] = $w3[14] - $alfa * ($datas->smbt - $w3[14]);
//                        $w3[15] = $w3[15] - $alfa * ($datas->pdp - $w2[15]);
//                    }
//                }
//                $alfa = 0.01 * $alfa;
//            endforeach;
//            $epoch++;
//        }
            $penyakit1 = pow($mual - $w1[0],2)
                + pow($muntah - $w1[1],2)
                + pow($sbh - $w1[2],2)
                + pow($nmb - $w1[3],2)
                + pow($mtp - $w1[4],2)
                + pow($sb - $w1[5],2)
                + pow($regurgitas - $w1[6],2)
                + pow($kembung - $w1[7],2)
                + pow($ptp - $w1[8],2)
                + pow($ck - $w1[9],2)
                + pow($mgadm - $w1[10],2)
                + pow($nbtd - $w1[11],2)
                + pow($ss - $w1[12],2)
                + pow($pbb - $w1[13],2)
                + pow($smbt - $w1[14],2)
                + pow($pdp - $w1[15],2);
            $penyakit2 = pow($mual - $w2[0],2)
                + pow($muntah - $w2[1],2)
                + pow($sbh - $w2[2],2)
                + pow($nmb - $w2[3],2)
                + pow($mtp - $w2[4],2)
                + pow($sb - $w2[5],2)
                + pow($regurgitas - $w2[6],2)
                + pow($kembung - $w2[7],2)
                + pow($ptp - $w2[8],2)
                + pow($ck - $w2[9],2)
                + pow($mgadm - $w2[10],2)
                + pow($nbtd - $w2[11],2)
                + pow($ss - $w2[12],2)
                + pow($pbb - $w2[13],2)
                + pow($smbt - $w2[14],2)
                + pow($pdp - $w2[15],2);
            $penyakit3 = pow($mual - $w3[0],2)
                + pow($muntah - $w3[1],2)
                + pow($sbh - $w3[2],2)
                + pow($nmb - $w3[3],2)
                + pow($mtp - $w3[4],2)
                + pow($sb - $w3[5],2)
                + pow($regurgitas - $w3[6],2)
                + pow($kembung - $w3[7],2)
                + pow($ptp - $w3[8],2)
                + pow($ck - $w3[9],2)
                + pow($mgadm - $w3[10],2)
                + pow($nbtd - $w3[11],2)
                + pow($ss - $w3[12],2)
                + pow($pbb - $w3[13],2)
                + pow($smbt - $w3[14],2)
                + pow($pdp - $w3[15],2);
            $penyakit1 = sqrt($penyakit1);
            $penyakit2 = sqrt($penyakit2);
            $penyakit3 = sqrt($penyakit3);
            if(($penyakit1<$penyakit2) & ($penyakit1<$penyakit3)) {
                $data['title']      = 'Diagnosa';
                $data['active']     = 'diagnosa';
                $data['content']    = 'hasil';
                $data['query']      = 'Anda sakit dispesia';
                $data['modal']      = '';
                $data['css']        = '';
                $data['js']         = '';
                $this->parser->parse('template/template', $data);
            } else if(($penyakit2<$penyakit1) & ($penyakit2<$penyakit3)) {
                $data['title']      = 'Diagnosa';
                $data['active']     = 'diagnosa';
                $data['content']    = 'hasil';
                $data['query']      = 'Anda sakit maag';
                $data['modal']      = '';
                $data['css']        = '';
                $data['js']         = '';
                $this->parser->parse('template/template', $data);
            } else if(($penyakit3<$penyakit1) & ($penyakit3<$penyakit2)) {
                $data['title']      = 'Diagnosa';
                $data['active']     = 'diagnosa';
                $data['content']    = 'hasil';
                $data['query']      = 'Anda sakit gerd';
                $data['modal']      = '';
                $data['css']        = '';
                $data['js']         = '';
                $this->parser->parse('template/template', $data);
            } else {
                $data['title']      = 'Diagnosa';
                $data['active']     = 'diagnosa';
                $data['content']    = 'hasil';
                $data['query']      = 'Anda tidak sakit';
                $data['modal']      = '';
                $data['css']        = '';
                $data['js']         = '';
                $this->parser->parse('template/template', $data);
            }
        }
    }

}