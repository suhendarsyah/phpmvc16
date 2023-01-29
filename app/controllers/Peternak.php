<?php
class Peternak extends Controller
{

  public function index()
  {

    $data['judul'] = 'Peternak';
    $data['peternak'] = $this->model('Peternak_model')->getPeternak();


    $this->view('templates/header', $data);
    $this->view('peternak/index', $data);
    $this->view('templates/footer');
  }

  public function detail()
  {
    $data['judul'] = 'Detail';
    $data['peternak'] = $this->model('Peternak_model')->getPeternakbyid();


    $this->view('templates/header', $data);
    $this->view('peternak/detail', $data);
    $this->view('templates/footer');
  }
}
