<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelZanry;

class ControllerZanry extends BaseController
{
    var $zanry;

     public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->zanry = new ModelZanry();
    }

     public function loadZanry()
    {
        $genresPerpage = $this->config->genresPerpage;
        $data['zanry'] = $this->zanry->orderBy('nazev', 'asc')->paginate($genresPerpage);
        $data['pager'] = $this->zanry->pager;
        $data['title'] = 'Žánry her';
        return $this->renderView('ViewZanry', $data);
    }
}
