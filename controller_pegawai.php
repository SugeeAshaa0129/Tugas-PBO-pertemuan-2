<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from datapegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data dari table
    function GetData_All_Laki (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from datapegawai where jns_kel='L' ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table
    function GetData_All_Perempuan (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from datapegawai where jns_kel='P' ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table
    function GetData_All_Menikah (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from datapegawai where status='M' ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

      // Method untuk mengambil semua data dari table
    function GetData_All_BMenikah (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from datapegawai where status='B' ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

      // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_Usia20_30 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM datapegawai");
                while($this->data=mysqli_fetch_array($this->query)){
                    if (($this->data['age']>=20)&&($this->data['age']<=30)) {
                        $this->result[]=$this->data;
                    }
                }
                return $this->result;
            }

            // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_Usia31_45 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM datapegawai");
                while($this->data=mysqli_fetch_array($this->query)){
                    if (($this->data['age']>=31)&&($this->data['age']<=45)) {
                        $this->result[]=$this->data;
                    }
                }
                return $this->result;
            }
             // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_MK1_5 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS tgl FROM datapegawai");
                while($this->data=mysqli_fetch_array($this->query)){
                    if (($this->data['tgl']>=1)&&($this->data['tgl']<=5)) {
                        $this->result[]=$this->data;
                    }
                }
                return $this->result;
            }

             // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_MK6_10 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS tgl FROM datapegawai");
                while($this->data=mysqli_fetch_array($this->query)){
                    if (($this->data['tgl']>=6)&&($this->data['tgl']<=10)) {
                        $this->result[]=$this->data;
                    }
                }
                return $this->result;
            }

             // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_MK11_25 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS tgl FROM datapegawai");
                while($this->data=mysqli_fetch_array($this->query)){
                    if (($this->data['tgl']>=11)&&($this->data['tgl']<=25)) {
                        $this->result[]=$this->data;
                    }
                }
                return $this->result;
            }
}

?>