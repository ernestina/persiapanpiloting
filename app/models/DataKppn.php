<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppn {

    private $db;
    private $_kd_d_kppn;
    private $_kd_d_user;
    private $_kd_d_tgl;
    private $_kd_d_pc;
    private $_kd_d_pc_mas;
    private $_kd_d_laser;
    private $_kd_d_laser_mas;
    private $_kd_d_dot;
    private $_kd_d_dot_mas;
    private $_kd_d_supplier;
    private $_kd_d_supplier_mas;
    private $_kd_d_kontrak;
    private $_kd_d_kontrak_mas;
    private $_kd_d_saldo;
    private $_kd_d_saldo_mas;
    private $_kd_d_retur;
    private $_kd_d_retur_mas;
    private $_kd_d_konversi;
    private $_kd_d_konversi_mas;
    private $_kd_d_supplier_tim;
    private $_kd_d_supplier_tim_mas;
    private $_kd_d_kontrak_tim;
    private $_kd_d_kontrak_tim_mas;
    private $_kd_d_user_id;
    private $_kd_d_user_id_mas;
    private $_kd_d_input_by;
    private $_error;
    private $_valid = TRUE;
    private $_table = 'd_kppn';
    public $registry;

    /*
     * konstruktor
     */

    public function __construct($registry = Registry) {
        $this->db = $registry->db;
        $this->registry = $registry;
    }

    /*
     * mengambil Data Semua KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn_all($limit = null, $batas = null) {
        $sql = "select a.* , c.nama_user
                from " . $this->_table . " a
                inner join (
                select `kd_d_user`, max(`kd_d_waktu_isi`) as MaxDate
                from " . $this->_table . "
                group by `kd_d_user`
                ) b on a.`kd_d_user` = b.`kd_d_user` and a.`kd_d_waktu_isi` = b.MaxDate
                left join d_user c on a.kd_d_user = c.kd_d_user
                ORDER BY a.`kd_d_user` ASC";

        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['nama_user']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

            $d_kppn->set_kd_d_pc($val['kd_d_pc']);
            $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
            $d_kppn->set_kd_d_laser($val['kd_d_laser']);
            $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
            $d_kppn->set_kd_d_dot($val['kd_d_dot']);
            $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

            $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
            $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
            $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
            $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
            $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
            $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
            $d_kppn->set_kd_d_retur($val['kd_d_retur']);
            $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
            $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
            $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

            $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
            $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
            $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
            $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
            $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
            $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);

            $data[] = $d_kppn;
        }

        return $data;
    }

    public function get_nama_kanwil($id = null) {
        $sql = "SELECT nama_user FROM d_user WHERE kd_d_user = " . $id;
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_user($val['nama_user']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_d_kppn_per_kanwil($kanwil = null, $limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user FROM d_user WHERE kd_r_unit = " . $kanwil;
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = ".$dt['kd_d_user']." 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_pc($val['kd_d_pc']);
                $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
                $d_kppn->set_kd_d_laser($val['kd_d_laser']);
                $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
                $d_kppn->set_kd_d_dot($val['kd_d_dot']);
                $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

                $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
                $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
                $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
                $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
                $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
                $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
                $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }

    public function get_d_kppn_per_all($limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user, nama_user FROM d_user WHERE kd_r_jenis = 3";
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = ".$dt['kd_d_user']." 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_pc($val['kd_d_pc']);
                $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
                $d_kppn->set_kd_d_laser($val['kd_d_laser']);
                $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
                $d_kppn->set_kd_d_dot($val['kd_d_dot']);
                $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

                $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
                $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
                $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
                $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
                $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
                $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
                $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }

    /*
     * mengambil Data KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn($limit = null, $batas = null) {
        $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user = " . Session::get('id_user') . " order by kd_d_waktu_isi desc LIMIT 1";

        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['kd_d_kppn']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

            $d_kppn->set_kd_d_pc($val['kd_d_pc']);
            $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
            $d_kppn->set_kd_d_laser($val['kd_d_laser']);
            $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
            $d_kppn->set_kd_d_dot($val['kd_d_dot']);
            $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

            $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
            $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
            $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
            $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
            $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
            $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
            $d_kppn->set_kd_d_retur($val['kd_d_retur']);
            $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
            $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
            $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

            $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
            $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
            $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
            $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
            $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
            $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);

            $data[] = $d_kppn;
        }

        return $data;
    }

    /*
     * tambah data Data KPPN
     * param array data array key=>value, nama kolom=>data
     */

    public function add_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_pc' => $this->get_kd_d_pc(),
            'kd_d_pc_mas' => $this->get_kd_d_pc_mas(),
            'kd_d_laser' => $this->get_kd_d_laser(),
            'kd_d_laser_mas' => $this->get_kd_d_laser_mas(),
            'kd_d_dot' => $this->get_kd_d_dot(),
            'kd_d_dot_mas' => $this->get_kd_d_dot_mas(),
            'kd_d_supplier' => $this->get_kd_d_supplier(),
            'kd_d_supplier_mas' => $this->get_kd_d_supplier_mas(),
            'kd_d_kontrak' => $this->get_kd_d_kontrak(),
            'kd_d_kontrak_mas' => $this->get_kd_d_kontrak_mas(),
            'kd_d_saldo' => $this->get_kd_d_saldo(),
            'kd_d_saldo_mas' => $this->get_kd_d_saldo_mas(),
            'kd_d_retur' => $this->get_kd_d_retur(),
            'kd_d_retur_mas' => $this->get_kd_d_retur_mas(),
            'kd_d_konversi' => $this->get_kd_d_konversi(),
            'kd_d_konversi_mas' => $this->get_kd_d_konversi_mas(),
            'kd_d_supplier_tim' => $this->get_kd_d_supplier_tim(),
            'kd_d_supplier_tim_mas' => $this->get_kd_d_supplier_tim_mas(),
            'kd_d_kontrak_tim' => $this->get_kd_d_kontrak_tim(),
            'kd_d_kontrak_tim_mas' => $this->get_kd_d_kontrak_tim_mas(),
            'kd_d_user_id' => $this->get_kd_d_user_id(),
            'kd_d_user_id_mas' => $this->get_kd_d_user_id_mas(),
            'kd_d_input_by' => $this->get_kd_d_input_by()
        );

        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);
    }

    /*
     * update Data KPPN, id harus di set terlebih dahulu
     * param data array
     */

    public function update_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_pc' => $this->get_kd_d_pc(),
            'kd_d_pc_mas' => $this->get_kd_d_pc_mas(),
            'kd_d_laser' => $this->get_kd_d_laser(),
            'kd_d_laser_mas' => $this->get_kd_d_laser_mas(),
            'kd_d_dot' => $this->get_kd_d_dot(),
            'kd_d_dot_mas' => $this->get_kd_d_dot_mas(),
            'kd_d_supplier' => $this->get_kd_d_supplier(),
            'kd_d_supplier_mas' => $this->get_kd_d_supplier_mas(),
            'kd_d_kontrak' => $this->get_kd_d_kontrak(),
            'kd_d_kontrak_mas' => $this->get_kd_d_kontrak_mas(),
            'kd_d_saldo' => $this->get_kd_d_saldo(),
            'kd_d_saldo_mas' => $this->get_kd_d_saldo_mas(),
            'kd_d_retur' => $this->get_kd_d_retur(),
            'kd_d_retur_mas' => $this->get_kd_d_retur_mas(),
            'kd_d_konversi' => $this->get_kd_d_konversi(),
            'kd_d_konversi_mas' => $this->get_kd_d_konversi_mas(),
            'kd_d_supplier_tim' => $this->get_kd_d_supplier_tim(),
            'kd_d_supplier_tim_mas' => $this->get_kd_d_supplier_tim_mas(),
            'kd_d_kontrak_tim' => $this->get_kd_d_kontrak_tim(),
            'kd_d_kontrak_tim_mas' => $this->get_kd_d_kontrak_tim_mas(),
            'kd_d_user_id' => $this->get_kd_d_kontrak_tim_mas(),
            'kd_d_user_id_mas' => $this->get_kd_d_user_id_mas_mas(),
            'kd_d_input_by' => $this->get_kd_d_input_by()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        $where = ' kd_d_kppn=' . $this->get_kd_d_kppn();
        return $this->db->update($this->_table, $data, $where);
    }

    /*
     * hapus Data KPPN, id harus di set terlebih dahulu
     */

    public function delete_d_kppn() {
        $where = ' kd_d_kppn=' . $this->get_kd_d_kppn();
        $this->db->delete($this->_table, $where);
    }

    /*
     * validasi server, untukmengecek pengisian
     */

    public function validate() {
        if ($this->get_kd_d_tgl() == "") {
            $this->_error .= "Tangal belum diinput!</br>";
            $this->_valid = FALSE;
        }
    }

    /*
     * getter
     */

    public function get_kd_d_kppn($where = null) {
        if (!is_null($where)) {
            $sql = "SELECT kd_d_kppn FROM '" . $this->_table . "' WHERE '" . $where . "'";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $this->set_kd_d_kppn($val['kd_d_kppn']);
            }
        }
        return $this->_kd_d_kppn;
    }

    public function get_kd_d_user() {
        return $this->_kd_d_user;
    }

    public function get_kd_d_tgl() {
        return $this->_kd_d_tgl;
    }

    public function get_kd_d_pc() {
        return $this->_kd_d_pc;
    }

    public function get_kd_d_pc_mas() {
        return $this->_kd_d_pc_mas;
    }

    public function get_kd_d_laser() {
        return $this->_kd_d_laser;
    }

    public function get_kd_d_laser_mas() {
        return $this->_kd_d_laser_mas;
    }

    public function get_kd_d_dot() {
        return $this->_kd_d_dot;
    }

    public function get_kd_d_dot_mas() {
        return $this->_kd_d_dot_mas;
    }

    public function get_kd_d_supplier() {
        return $this->_kd_d_supplier;
    }

    public function get_kd_d_supplier_mas() {
        return $this->_kd_d_supplier_mas;
    }

    public function get_kd_d_kontrak() {
        return $this->_kd_d_kontrak;
    }

    public function get_kd_d_kontrak_mas() {
        return $this->_kd_d_kontrak_mas;
    }

    public function get_kd_d_saldo() {
        return $this->_kd_d_saldo;
    }

    public function get_kd_d_saldo_mas() {
        return $this->_kd_d_saldo_mas;
    }

    public function get_kd_d_retur() {
        return $this->_kd_d_retur;
    }

    public function get_kd_d_retur_mas() {
        return $this->_kd_d_retur_mas;
    }

    public function get_kd_d_konversi() {
        return $this->_kd_d_konversi;
    }

    public function get_kd_d_konversi_mas() {
        return $this->_kd_d_konversi_mas;
    }

    public function get_kd_d_supplier_tim() {
        return $this->_kd_d_supplier_tim;
    }

    public function get_kd_d_supplier_tim_mas() {
        return $this->_kd_d_supplier_tim_mas;
    }

    public function get_kd_d_kontrak_tim() {
        return $this->_kd_d_kontrak_tim;
    }

    public function get_kd_d_kontrak_tim_mas() {
        return $this->_kd_d_kontrak_tim_mas;
    }

    public function get_kd_d_user_id() {
        return $this->_kd_d_user_id;
    }

    public function get_kd_d_user_id_mas() {
        return $this->_kd_d_user_id_mas;
    }

    public function get_kd_d_input_by() {
        return $this->_kd_d_input_by;
    }

    public function get_error() {
        return $this->_error;
    }

    public function get_valid() {
        return $this->_valid;
    }

    /*
     * setter
     */

    public function set_kd_d_kppn($_kd_d_kppn) {
        $this->_kd_d_kppn = $_kd_d_kppn;
    }

    public function set_kd_d_user($_kd_d_user) {
        $this->_kd_d_user = $_kd_d_user;
    }

    public function set_kd_d_tgl($_kd_d_tgl) {
        $this->_kd_d_tgl = $_kd_d_tgl;
    }

    public function set_kd_d_pc($_kd_d_pc) {
        $this->_kd_d_pc = $_kd_d_pc;
    }

    public function set_kd_d_pc_mas($_kd_d_pc_mas) {
        $this->_kd_d_pc_mas = $_kd_d_pc_mas;
    }

    public function set_kd_d_laser($_kd_d_laser) {
        $this->_kd_d_laser = $_kd_d_laser;
    }

    public function set_kd_d_laser_mas($_kd_d_laser_mas) {
        $this->_kd_d_laser_mas = $_kd_d_laser_mas;
    }

    public function set_kd_d_dot($_kd_d_dot) {
        $this->_kd_d_dot = $_kd_d_dot;
    }

    public function set_kd_d_dot_mas($_kd_d_dot_mas) {
        $this->_kd_d_dot_mas = $_kd_d_dot_mas;
    }

    public function set_kd_d_supplier($_kd_d_supplier) {
        $this->_kd_d_supplier = $_kd_d_supplier;
    }

    public function set_kd_d_supplier_mas($_kd_d_supplier_mas) {
        $this->_kd_d_supplier_mas = $_kd_d_supplier_mas;
    }

    public function set_kd_d_kontrak($_kd_d_kontrak) {
        $this->_kd_d_kontrak = $_kd_d_kontrak;
    }

    public function set_kd_d_kontrak_mas($_kd_d_kontrak_mas) {
        $this->_kd_d_kontrak_mas = $_kd_d_kontrak_mas;
    }

    public function set_kd_d_saldo($_kd_d_saldo) {
        $this->_kd_d_saldo = $_kd_d_saldo;
    }

    public function set_kd_d_saldo_mas($_kd_d_saldo_mas) {
        $this->_kd_d_saldo_mas = $_kd_d_saldo_mas;
    }

    public function set_kd_d_retur($_kd_d_retur) {
        $this->_kd_d_retur = $_kd_d_retur;
    }

    public function set_kd_d_retur_mas($_kd_d_retur_mas) {
        $this->_kd_d_retur_mas = $_kd_d_retur_mas;
    }

    public function set_kd_d_konversi($_kd_d_konversi) {
        $this->_kd_d_konversi = $_kd_d_konversi;
    }

    public function set_kd_d_konversi_mas($_kd_d_konversi_mas) {
        $this->_kd_d_konversi_mas = $_kd_d_konversi_mas;
    }

    public function set_kd_d_supplier_tim($_kd_d_supplier_tim) {
        $this->_kd_d_supplier_tim = $_kd_d_supplier_tim;
    }

    public function set_kd_d_supplier_tim_mas($_kd_d_supplier_tim_mas) {
        $this->_kd_d_supplier_tim_mas = $_kd_d_supplier_tim_mas;
    }

    public function set_kd_d_kontrak_tim($_kd_d_kontrak_tim) {
        $this->_kd_d_kontrak_tim = $_kd_d_kontrak_tim;
    }

    public function set_kd_d_kontrak_tim_mas($_kd_d_kontrak_tim_mas) {
        $this->_kd_d_kontrak_tim_mas = $_kd_d_kontrak_tim_mas;
    }

    public function set_kd_d_user_id($_kd_d_user_id) {
        $this->_kd_d_user_id = $_kd_d_user_id;
    }

    public function set_kd_d_user_id_mas($_kd_d_user_id_mas) {
        $this->_kd_d_user_id_mas = $_kd_d_user_id_mas;
    }

    public function set_kd_d_input_by($_kd_d_input_by) {
        $this->_kd_d_input_by = $_kd_d_input_by;
    }

    public function set_error($_error) {
        $this->_error = $_error;
    }

    public function set_valid($_valid) {
        $this->_valid = $_valid;
    }

    /*
     * destruktor
     */

    public function __destruct() {
        
    }

}
