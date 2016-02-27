<?php
class Members extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('members_model');
                $this->load->helper('url_helper');
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $data['members'] = $this->members_model->get_members();
        		$data['title'] = 'Regisztrált tagok';

		        $this->load->view('templates/header', $data);
		        $this->load->view('members/index', $data);
		        $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
		{
		        $data['members_item'] = $this->members_model->get_members($slug);

		        if (empty($data['members_item']))
		        {
		                show_404();
		        }

		        $data['title'] = $data['members_item']['title'];

		        $this->load->view('templates/header', $data);
		        $this->load->view('members/view', $data);
		        $this->load->view('templates/footer');
		}

		public function create()
		{
		    $this->load->helper('form');
		    $this->load->library('form_validation');

		    $data['title'] = 'Regisztráció';

		    $this->form_validation->set_rules('name', 'Name', 'required');
		    $this->form_validation->set_rules('email', 'Email', 'required');
		    $this->form_validation->set_rules('acc_ans', 'Acc_ans', 'required');
		   // $this->form_validation->set_rules('acc_a', 'Acc_No', 'required');
		    $this->form_validation->set_rules('uni', 'Uni', 'required');
		    $this->form_validation->set_rules('phone', 'Phone', 'required');
		    $this->form_validation->set_rules('work', 'Work', 'required');
		    $this->form_validation->set_rules('pub_ans', 'Pub_ans', 'required');
		  //  $this->form_validation->set_rules('pub_no', 'Pub_no', 'required');
		    $this->form_validation->set_rules('Text1', 'Text1', 'required');
		    $this->form_validation->set_rules('tem_name', 'Tem_name', 'required');
		    $this->form_validation->set_rules('tem_email', 'Tem_email', 'required');




		    if ($this->form_validation->run() === FALSE)
		    {
		        $this->load->view('templates/header', $data);
		        $this->load->view('members/create');
		        $this->load->view('templates/footer');

		    }
		    else
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
		        $this->load->view('members/success');
		    }
		}

		public function upload()
	    {
	        //set preferences
	        $config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'docx|pdf';
	        $config['max_size']    = '100';

	        //load upload class library
	        $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('filename'))
	        {
	            // case - failure
	            $upload_error = array('error' => $this->upload->display_errors());
	            $this->load->view('upload_file_view', $upload_error);
	        }
	        else
	        {
	            // case - success
	            $upload_data = $this->upload->data();
	            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
	            $this->load->view('upload_file_view', $data);
	        }
	    }
}
