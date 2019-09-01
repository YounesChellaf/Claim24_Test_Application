<?php
/**
 * Created by PhpStorm.
 * Date: 8/19/19
 * Time: 1:12 AM
 */

class Weather_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
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
}