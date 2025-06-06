<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelPlatformy;

class ControllerPlatformy extends BaseController
{
    var $platformy;

     public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->platformy = new ModelPlatformy();
    }

     public function loadPlatformy()
    {
        $platformsPerpage = $this->config->platformsPerpage;
        $data['platformy'] = $this->platformy->orderBy('nazev', 'asc')->paginate($platformsPerpage);
        $data['pager'] = $this->platformy->pager;
        $data['title'] = 'Platformy her';
        return $this->renderView('ViewPlatformy', $data);
    }
}
