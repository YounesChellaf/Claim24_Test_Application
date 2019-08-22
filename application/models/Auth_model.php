<?php
/**
 * Created by PhpStorm.
 * Date: 8/19/19
 * Time: 1:12 AM
 */

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function fetch_data($query)
    {
        $this->db->like('name', $query);
        $query = $this->db->get('airports');
        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                $output[] = array(
                    'iata_code' => $row["iata_code"],
                    'name'  => $row["name"],
                    'municipality'  => $row["municipality"],
                );
            }
            echo json_encode($output);
        }
    }
}