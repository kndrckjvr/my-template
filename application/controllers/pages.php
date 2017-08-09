<?php
	class Pages extends CI_Controller {
		//Load view default php will be index
		public function view($page = 'index') {
			//Directs page to 404 if file not found
			if(!file_exists(APPPATH.'views/pages/'. $page .'.php')) {
				show_404();
			}

			//Title of the page
			$data['title'] = ucfirst($page);

			//Loads View (Header)
			$this->load->view('templates/header');
			//Loads View (Page) and sends the data to the page
			$this->load->view('pages/'.$page, $data);
			//Loads View (Footer)
			$this->load->view('templates/footer');
		}
	}