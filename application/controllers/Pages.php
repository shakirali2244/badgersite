<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
{
        $this->load->helper('url');
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                
        	    if(strcmp($page,'crawler') ==0){
        	    	redirect('https://github.com/shakirali2244/crawler');
        	    }else if(strcmp($page,'osm') ==0){
        	    	redirect('http://badgerw0rks.tumblr.com/post/119086912847/reverse-geocoding-function-in-pgsql-for-postgis');
        	    }else{// Whoops, we don't have a page for that!
        	    	show_404();
        	    }
                
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['companyName'] = 'BadgerWorks';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}
}