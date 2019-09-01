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

    /**
     * @param $query
     */
    function fetch_data($query)
    {
        $q = metaphone($query);
        $p = metaphone('name');
        $this->db->like('name',$query);
        $query = $this->db->get('airports');
        //$query = $this->db->get_where("airports", array(metaphone("name") => $q));
        // $query = $this->db->query("SELECT * FROM airports WHERE name LIKE $query");
        if($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                if ($row["iata"]=='\N') $iata=null;
                else $iata = $row["iata"];
                $output[] = array(
                    'iata' => $iata,
                    'name'  => $row["name"],
                    'city'  => $row["city"],
                );
            }
            echo json_encode($output);
        }
    }
}