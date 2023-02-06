<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raffle extends CI_Controller
{
    public function index()
    {
        $random = "";
        if($this->session->userdata('winner') >= 0)
        {
            if($this->input->post('submit'))
            {
                $number = $this->session->userdata('winner');
                $number++;
                $random = rand(1023424, 9918295);
                $this->session->set_userdata('winner', $number);
            }
            else if($this->input->post('reset'))
            {
                $this->session->set_userdata('winner', 0);
            }
            $number = $this->session->userdata('winner');
            echo "Winner";
        }
        else
        {
            echo "not winner";
            $number = 0;
            $this->session->set_userdata('winner', 0);
        }

        $view_data = array(
            "winner" => $number,
            "random" => $random
        );
        $this->load->view('raffle/index', $view_data);
    }
}
?>