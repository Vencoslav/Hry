<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelHry;

class ControllerHra extends BaseController
{
   var $modelHra;

     public function initController($request, $response, $logger)
    {
        parent::initController($request, $response, $logger);
        $this->modelHra = new ModelHry();
    }

    public function loadHra($id) 
    {
        $data['hra'] = $this->modelHra
            ->select('hra.*, 
                GROUP_CONCAT(tvurce.nazev ORDER BY tvurce.nazev) as tvurce, 
                GROUP_CONCAT(zanr.nazev ORDER BY zanr.nazev) as zanry')
            ->join('hra_tvurce', 'hra_tvurce.hra_id = hra.id')
            ->join('tvurce', 'tvurce.id = hra_tvurce.tvurce_id')
            ->join('hra_zanr', 'hra_zanr.hra_id = hra.id')
            ->join('zanr', 'zanr.id = hra_zanr.zanr_id')
            ->where('hra.id', $id)
            ->groupBy('hra.id')
            ->first();

        $this->addBreadcrumb('Hry', base_url('hry'));
        $this->addBreadcrumb($data['hra']->title, base_url('hry/').$id); 

        return $this->renderView('ViewHra', $data);

    }

     public function editHra($id)
    {
        $data['hra'] = $this->modelHra->find($id);
        return view('ViewEditHra', $data);
    }

    public function updateHra($id)
    {
        $postData = $this->request->getPost();
        $this->modelHra->update($id, [
            'title' => $postData['title'],
            'description' => $postData['description'],
            'published_date' => $postData['published_date']
        ]);
        return redirect()->to('/hry/' . $id);
    }
}
