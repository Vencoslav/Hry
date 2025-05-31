<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelTvurci;

class ControllerTvurci extends BaseController
{
    var $tvurci;

    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->tvurci = new ModelTvurci();
    }

    public function loadTvurci()
    {
        $itemsPerPage = $this->config->itemsPerPage;
        $data['tvurci'] = $this->tvurci->paginate($itemsPerPage);
        $data['pager'] = $this->tvurci->pager;
        $data['title'] = 'Tvůrci her';
        return view('ViewTvurci', $data);
    }
}
