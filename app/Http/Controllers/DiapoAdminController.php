<?php

namespace LearnerApi\Http\Controllers;

use LearnerApi\Diapo;

class DiapoAdminController extends AdminController
{

    public function getHome($id)
    {
        $diapos = Diapo::where("module_id", "=", $id)->get();
        $i = 0;
        $tab_content = array();
        if ($diapos) {
            foreach ($diapos as $diapo) {
                $tab_content[$i] = json_decode($diapo->content);
                $tab_content[$i]['id'] = $diapo->id;
                $i++;
            }
        }
        return view('diapos.diapo')->with('diapos', $tab_content);
    }

    public function getEditDiapo($id)
    {
        $diapo = Diapo::find($id);

        $json = array();
        $json['content'] = json_decode($diapo->content);
        $json['id'] = $diapo->id;
        return view('diapos.edit')->with('diapo', $json);
    }


    public function getInsertDiapo($id)
    {
        return view('diapos.insert')->with('diapo', Diapo::find($id));
    }


    public function getDeleteDiapo($id_diapo)
    {
        $curr = Diapo::find($id_diapo);
        if (!empty($curr))
        {
            $module_id = $curr->module_id;
            if (!$curr->prev_id)
            {
                if ($curr->next_id)
                {
                    $next = Diapo::find($curr->next_id);
                    $next->prev_id = null;
                    $next->save();
                }
            }
            else if (!$curr->next_id)
            {
                if ($curr->prev_id)
                {
                    $prev = Diapo::find($curr->prev_id);
                    $prev->next_id = null;
                    $prev->save();
                }
            }
            else
            {
                $prev = Diapo::find($curr->prev_id);
                $next = Diapo::find($curr->next_id);
                $prev->next_id = $next->id;
                $next->prev_id = $prev->id;
                $next->save();
                $prev->save();
            }
            $curr->module()->dissociate();
            $curr->delete();

        }
        $diapos = (empty($module_id)) ? null : Diapo::where("module_id", "=", $module_id)->get();
        $i = 0;
        $tab_content = array();
        if ($diapos) {
            foreach ($diapos as $diapo)
            {
                $tab_content[$i] = json_decode($diapo->content);
                $tab_content[$i]['id'] = $diapo->id;
                $i++;
            }
        }
        return view('diapos.diapo')->with('diapos', $tab_content);
   }
}