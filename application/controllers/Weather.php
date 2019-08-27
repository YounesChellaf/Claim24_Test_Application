<?php


class Weather extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function search(){
        if (isset($_POST['weather-search'])){
            $airport = $_POST['airport'];
//            $sql = "SELECT * FROM airports WHERE name ='Aero B Ranch Airport'  ";
//            $icao = $this->db->query($sql);

            $this->db->like('name', $airport);
            $query = $this->db->get('airports');
            if($query->num_rows() > 0)
            {
                foreach($query->result_array() as $row)
                {
                    $icao = $row["icao"];
                }
            }
            else {
                redirect(base_url(),'refresh');
            }
            $date = $_POST['date'];
            $year = date("Y", strtotime($date));
            $mounth = date("m", strtotime($date));
            $day = date("d", strtotime($date));
           $data['metar_data'] = file_get_contents("https://mesonet.agron.iastate.edu/cgi-bin/request/asos.py?station=".$icao."&data=all&year1=".$year."&month1=".$mounth."&day1=".$day."&year2=".$year."&month2=".$mounth."&day2=".$day."&tz=Etc%2FUTC&format=onlycomma&latlon=no&missing=M&trace=T&direct=no&report_type=1&report_type=2",false);
           $this->load->view('search',$data);

        }
    }
}
