<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:39 AM
 */

class DataLatih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_latih_model');
        $this->load->library('PHPExcel');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function import()
    {
        $config['upload_path'] = './application/public/';
        $config['file_name'] = $_FILES['file']['name'];
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 1000000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $file_name = './application/public/' . $this->upload->data('file_name');
        try {
            $file_type = PHPExcel_IOFactory::identify($file_name);
            $object_reader = PHPExcel_IOFactory::createReader($file_type);
            $object_PHPExcel = $object_reader->load($file_name);
        } catch (Exception $e) {
            die('Error uploading file "' . pathinfo($file_name, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }
        $sheet = $object_PHPExcel->getSheet(0);
        $highest_row = $sheet->getHighestDataRow();
        $highest_column = $sheet->getHighestDataColumn();
        for ($row = 2; $row <= $highest_row; $row++) {
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highest_column . $row, NULL, TRUE, FALSE);
            $datas = array(
                "mual"          => $rowData[0][1],
                "muntah"        => $rowData[0][2],
                "sbh"           => $rowData[0][3],
                "nmb"           => $rowData[0][4],
                "mtp"           => $rowData[0][5],
                "sb"            => $rowData[0][6],
                "regurgitas"    => $rowData[0][7],
                "kembung"       => $rowData[0][8],
                "ptp"           => $rowData[0][9],
                "ck"            => $rowData[0][10],
                "mgadm"         => $rowData[0][11],
                "nbtd"          => $rowData[0][12],
                "ss"            => $rowData[0][13],
                "pbb"           => $rowData[0][14],
                "smbt"          => $rowData[0][15],
                "pdp"           => $rowData[0][16],
                "penyakit"      => $rowData[0][17],
                "kelas"         => $rowData[0][18],
                "date"          => date('Y-m-d'),
                "time"          => date('H:i:s')
            );
            $insert = $this->db->insert("data_latih", $datas);
        }
        delete_files('./application/public/');
        redirect(base_url() . 'dashboard');
    }

    public function export()
    {
        $this->load->library('PHPExcel');
        $file = new PHPExcel ();
        $file->getProperties()->setCreator("Kelompok 3");
        $file->getProperties()->setLastModifiedBy("Kelompok 3");
        $file->createSheet(NULL, 0);
        $file->setActiveSheetIndex(0);
        $sheet = $file->getActiveSheet(0);
        $sheet->setTitle("Data Latih");
        $file->getDefaultStyle()
            ->getAlignment()
            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $sheet->setCellValue("A1", "Nomor")
            ->setCellValue("B1", "Mual")
            ->setCellValue("C1", "Muntah")
            ->setCellValue("D1", "Sakit Hulu Hati")
            ->setCellValue("E1", "Nafsu Makan Berkurang")
            ->setCellValue("F1", "Mulut Pahit")
            ->setCellValue("G1", "Sering Bersendawa")
            ->setCellValue("H1", "Regurgitas")
            ->setCellValue("I1", "Kembung")
            ->setCellValue("J1", "Perut Terasa Penuh")
            ->setCellValue("K1", "Cepat Kenyang")
            ->setCellValue("L1", "Keluar Gas Asam dari Mulut")
            ->setCellValue("M1", "Nyeri di Belakang Tulang Dada")
            ->setCellValue("N1", "Suara Serak")
            ->setCellValue("O1", "Penurunan Berat Badan")
            ->setCellValue("P1", "Sesak Seperti Menyedat di Bagian Tenggorokan")
            ->setCellValue("Q1", "Panas di Dada dan Perut")
            ->setCellValue("R1", "Penyakit")
            ->setCellValue("S1", "Kelas");
        $query = $this->data_latih_model->get_entries();
        $i = 2;
        $j = 0;
        foreach ($query as $datas):
            $sheet->setCellValue("A" . $i, ++$j)
                ->setCellValue("B" . $i, $datas->mual)
                ->setCellValue("C" . $i, $datas->muntah)
                ->setCellValue("D" . $i, $datas->sbh)
                ->setCellValue("E" . $i, $datas->nmb)
                ->setCellValue("F" . $i, $datas->mtp)
                ->setCellValue("G" . $i, $datas->sb)
                ->setCellValue("H" . $i, $datas->regurgitas)
                ->setCellValue("I" . $i, $datas->kembung)
                ->setCellValue("J" . $i, $datas->ptp)
                ->setCellValue("K" . $i, $datas->ck)
                ->setCellValue("L" . $i, $datas->mgadm)
                ->setCellValue("M" . $i, $datas->nbtd)
                ->setCellValue("N" . $i, $datas->ss)
                ->setCellValue("O" . $i, $datas->pbb)
                ->setCellValue("P" . $i, $datas->smbt)
                ->setCellValue("Q" . $i, $datas->pdp)
                ->setCellValue("R" . $i, $datas->penyakit)
                ->setCellValue("S" . $i, $datas->kelas);
            $i++;
        endforeach;
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Data Latih.xls"');
        header('Cache-Control: max-age=0');
        $writer = \PHPExcel_IOFactory::createWriter($file, 'Excel5');
        $writer->save('php://output');
        redirect(base_url());
    }
}