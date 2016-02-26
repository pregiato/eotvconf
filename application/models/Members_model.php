<?php
class Members_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_members($slug = FALSE)
		{
	        if ($slug === FALSE)
	        {
	                $query = $this->db->get('members');
	                return $query->result_array();
	        }

	        $query = $this->db->get_where('members', array('slug' => $slug));
	        return $query->row_array();
		}

		public function set_members()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('title'), 'dash', TRUE);

		    $data = array(
		    	'slug' => $slug,
		        'name' => $this->input->post('name'),
		        'email' => $this->input->post('email'),
		        'university' => $this->input->post('uni'),
		       	'phone' => $this->input->post('phone'),
		        'accomodation' => $this->input->post('acc_ans'),
		        'work_title' => $this->input->post('work'),
		        'publication' => $this->input->post('pub_ans'),
		        'summary' => $this->input->post('Text1'),
		        'leader_name' => $this->input->post('tem_name'),
		        'leader_email' => $this->input->post('tem_email')
		    );

		    return $this->db->insert('members', $data);
		}
}