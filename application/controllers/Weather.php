<?php


class Weather extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function search(){
        if (isset($_POST['weather-search'])){
            $date = $_POST['date'];
            $year = $date("Y");
            var_dump($year);
//            var_dump(file_get_contents("https://mesonet.agron.iastate.edu/cgi-bin/request/asos.py?station=ALO&data=all&year1=".$year."&month1=8&day1=1&year2=2019&month2=8&day2=1&tz=Etc%2FUTC&format=onlycomma&latlon=no&missing=M&trace=T&direct=no&report_type=1&report_type=2",false));
        }
    }
}
