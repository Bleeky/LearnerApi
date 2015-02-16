<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Diapo;

class DiapoAdminController extends AdminController {

    public function getHome($id)
    {
        $diapos = Diapo::where("module_id", "=", $id)->get();
        $i = 0;
        foreach ($diapos as $diapo)
        {
            $tab_content[$i] = json_decode($diapo->content);
            $i++;
        }
        return view('diapos.diapo')->with('diapos', $tab_content);
    }

}