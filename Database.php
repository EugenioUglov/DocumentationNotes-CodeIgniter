
// Example: get_row('*', 'myTable', array('id' => $id), false);
function get_row($slector, $table, $condition, $is_take_multi_rows) {
    $this->db->select($slector);
    $query = $this->db->get_where($table, $condition);
    if ($is_take_multi_rows) {
      $this->db->get()->result_array();
    }
    else {
      $row = $query->row();
    }
}

function insert_row() {
    $table = 'myTable';

    $data = array(
        'id' => $id
    );

    $this->db->insert($table, $data);

    return $this->db->affected_rows();
}

function update_row() {
    $data = array(
        'email' => $email
    );

    $this->db->where('id', $id);
    $this->db->update('myTable', $data);
}

function delete_row() {
  $this->db->delete('mytable', array('id' => $id)); 
}


Sources:
[1] https://codeigniter.com/userguide3/database/query_builder.html
[2] https://stackoverflow.com/questions/36035575/codeigniter-selecting-data-from-database
