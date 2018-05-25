<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:44 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_data_latih extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'data_latih_id'=>
                array(
                    'type'          => 'INT',
                    'unsigned'      => TRUE,
                    'auto_increment' => TRUE
                ),
            'mual'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'muntah'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'sbh'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'nmb'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'mtp'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'sb'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'regurgitas'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'kembung'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'ptp'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'ck'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'mgadm'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'nbtd'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'ss'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'pbb'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'smbt'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'pdp'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'penyakit'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'kelas'=>
                array(
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ),
            'date'=>
                array(
                    'type'          => 'DATE'
                ),
            'time'=>
                array(
                    'type'          => 'TIME'
                ),
        ));
        $this->dbforge->add_key('data_latih_id', TRUE);
        $this->dbforge->create_table('data_latih');
    }

    public function down()
    {
        $this->dbforge->drop_table('data_latih');
    }
}