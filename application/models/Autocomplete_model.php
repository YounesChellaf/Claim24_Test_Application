<?php
/**
 * Created by PhpStorm.
 * Date: 8/19/19
 * Time: 1:12 AM
 */

class Autocomplete_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $query
     */

//*****
//    Fetch data and make comparaison with data introduced at the airport input to make the fuzzy search
//    and show the autocomplete suggestion
//*****
    function fetch_data($query)
    {
        $q = metaphone($query);
        $p = metaphone('name');
        $this->db->like('name',$query);
        $query = $this->db->get('airports');
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