<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelHry;
use App\Models\ModelHryZanry;
use App\Models\ModelHryPlatformy;
use App\Models\ModelTvurci;
use App\Models\ModelZanry;
use App\Models\ModelPlatformy;

class ControllerHry extends BaseController
{
    var $hry;
    var $zanry;
    var $platformy;
    var $tvurci;
    var $hry_zanry;
    var $hry_platformy;

    public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->hry = new ModelHry();
        $this->zanry = new ModelZanry();
        $this->platformy = new ModelPlatformy();
        $this->tvurci = new ModelTvurci();
        $this->hry_zanry = new ModelHryZanry();
        $this->hry_platformy = new ModelHryPlatformy();
    }

    public function loadHry()
    {
        $this->addBreadcrumb('Hry', base_url('hry'));
        $itemsPerPage = $this->config->itemsPerPage;
        $data['hry'] = $this->hry->paginate($itemsPerPage);
        $data['pager'] = $this->hry->pager;
        $data['title'] = 'Hry';
        return view('ViewHry', $data);
    }

    public function loadHra($id)
    {
        //
    }

    public function editHra($id)
    {
        //
    }

    public function updateHra($id)
    {
        //
    }

    public function deleteHra($id)
    {
        $this->hry->delete($id);
        $this->hry_zanry->where('hra_id', $id)->delete();
        $this->hry_platformy->where('hra_id', $id)->delete();
        return redirect()->to('/hry');
    }

    public function newHra()
    {
        $this->addBreadcrumb('Hry', base_url('hry'));
        $this->addBreadcrumb('Nová hra', base_url('hry/new'));
        $data['zanry'] = $this->zanry->findAll();
        $data['platformy'] = $this->platformy->findAll();
        $data['tvurci'] = $this->tvurci->findAll();
        $data['title'] = 'Nová hra';
        return view('ViewAddHra', $data);
    }

    public function createHra()
    {
        $postData = $this->request->getPost();
        $newHraId = $this->hry->insert([
            'nazev' => $postData['nazev'],
            'popis' => $postData['popis'],
            'vydani' => $postData['vydani'],
            'id_tvurce' => $postData['id_tvurce']
        ], true);
        if(!empty($postData['id_zanr'])) {
            foreach ($postData['id_zanr'] as $zanrId) {
                $this->hry_zanry->insert([
                    'id_hra' => $newHraId,
                    'id_zanr' => $zanrId
                ]);
            }
        }
        if(!empty($postData['id_platforma'])) {
            foreach ($postData['id_platforma'] as $platformaId) {
                $this->hry_platformy->insert([
                    'id_hra' => $newHraId,
                    'id_platforma' => $platformaId
                ]);
            }
        }
        return redirect()->to('/hry');
    }
}
