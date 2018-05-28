<?php
class ControllerExtensionModuleOCAdwordsConversion extends Controller {
	public function index($setting) {
		//$data['description'] = html_entity_decode($setting['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
		$data['description'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
		if (isset($this->session->data['totalOrder'])) {
		$data['totalOrder'] = $this->session->data['totalOrder'];
	    } else { 
	    	$data['totalOrder'] = 0;
	    }

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/oc_adwords_conversion.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/oc_adwords_conversion.tpl', $data);
		} else {
			return $this->load->view('extension/module/oc_adwords_conversion.tpl', $data);
		}
	}
}
?>