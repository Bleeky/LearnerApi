<?php

namespace LearnerApi\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use LearnerApi\Diapo;

class DiapoAdminController extends AdminController
{

    public function getHome($id)
    {
        $diapos = Diapo::where("module_id", "=", $id)->where("prev_id", "=", null)->get();
        $i = 0;
        $tab_content = array();
        foreach ($diapos as $diapo)
        {
            while ($diapo != null || !empty($diapo))
            {
                $tab_content[$i] = json_decode($diapo->content);
                $tab_content[$i]['id'] = $diapo->id;
                $tab_content[$i]['module_id'] = $id;
                $i++;
                $diapo = Diapo::find($diapo->next_id);
            }
        }
        $tab_content[$i]['module_id'] = $id;
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


    public function getInsertDiapo($id, $module_id)
    {
        return view('diapos.insert')->with('id', $id)
                                    ->with('module_id', $module_id);
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
        return Redirect::action('DiapoAdminController@getHome', ['id'=> $module_id]);
    }
}