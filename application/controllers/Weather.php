<?php

class Weather extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function ConvertMetar($data,$time,$station){
        $result =array();
        $j=1;
        for ($i=3;$i<sizeof($data);$i=$i+2){
            if (substr($data[$i],11,2) == substr($time,0,2) ) {
                $result[$j][0] = $station;
                $result[$j][1] = $data[$i];
                $result[$j][2] = $data[$i+1];
            }
            $j++;
        }
        return $result;
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
            $date = $_POST['date'];
            $year = date("Y", strtotime($date));
            $mounth = date("m", strtotime($date));
            $day = date("d", strtotime($date));
            $time = $_POST['time'];
           $content = file_get_contents("https://mesonet.agron.iastate.edu/cgi-bin/request/asos.py?station=".$icao."&data=metar&year1=".$year."&month1=".$mounth."&day1=".$day."&year2=".$year."&month2=".$mounth."&day2=".$day."&tz=Etc%2FUTC&format=onlycomma&latlon=no&&direct=no&report_type=1&report_type=2",false);
           $arr1 = explode(',',trim($content));
//           var_dump($this->ConvertMetar($arr1,$time,$icao));
//           $data['metar_data'] = $this->ConvertMetar($arr1,$time,$icao);
//           $data['menu'] = $this->load->view('search',$data);
//           $this->load->view('index',$data);
            $data['metar_data'] = $this->ConvertMetar($arr1,$time,$icao);
            $this->load->view('search',$data);

        }
    }

    public function getWeather(){
        include('../../simple_html_dom.php');

    }
}
