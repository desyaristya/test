<?php

class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function display_user($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('layout/header_user', $data, TRUE);
        $data['_template'] = $this->ci->load->view('layout/template_user', $data);
		$data['_footer'] = $this->ci->load->view('layout/footer_user', $data);
    }
}
