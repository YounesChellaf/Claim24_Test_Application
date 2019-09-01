<?php

class Weather extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


    public function search(){
        if (isset($_POST['weather-search'])){
            $airport = $_POST['airport'];
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
            $time = $_POST['time'];
            $year = date("Y", strtotime($_POST['date']));
            $mounth = date("m", strtotime($_POST['date']));
            $day = date("d", strtotime($_POST['date']));
           $content = file_get_contents("https://mesonet.agron.iastate.edu/cgi-bin/request/asos.py?station=".$icao."&data=metar&year1=".$year."&month1=".$mounth."&day1=".$day."&year2=".$year."&month2=".$mounth."&day2=".$day."&tz=Etc%2FUTC&format=onlycomma&latlon=no&&direct=no&report_type=1&report_type=2",false);
           $arr1 = explode(',',trim($content));
//           $data['metar_data'] = $this->ConvertMetar($arr1,$time,$icao);
//           $data['menu'] = $this->load->view('search',$data);
//           $this->load->view('index',$data);
            $this->load->model('weather_model');
            $data['metar_data'] = $this->weather_model->ConvertMetar($arr1,$time,$icao);
            $data['menu'] = $this->load->view('search',$data);
            $this->load->view('index',$data);
           // $this->load->view('search',$data);

        }
    }

}
