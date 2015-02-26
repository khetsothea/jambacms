<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Content extends Admin_Controller {
		public function __construct() {
			parent::__construct();

			//load up the content model
			$this->load->model('content_model', 'content');

			//load our home tab
			$this->view_data['tab'] = 'content';
		}

		public function index() {
			$this->view();
		}

		public function view() {
			$this->view_data['content_sections'] = $this->content->get_all();
			$this->view_data['tab_content'] = 'blocks/content_view';

			$this->load->view('master', $this->view_data);
		}

		public function edit($name) {
			$section = $this->content->get($name);
			$this->view_data['content_section'] = $section;
			$this->view_data['tab_content'] = 'forms/edit_content';

			$this->load->view('master', $this->view_data);
		}

		public function update($name) { 
			$record = $this->input->post();
			$id = $this->content->get_id($name);
			$this->content->update($id, $record);

			redirect('/admin/content/view');
		}
	}
?>