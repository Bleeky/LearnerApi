<?php
namespace LearnerApi\Http\Controllers;

use LearnerApi\Diapo;
use Symfony\Component\HttpFoundation\Request;

class DiapoEditAdminController extends AdminController
{
    public function getEditToForm($id, $form)
    {
		$json = array();
		$json['id'] = $id;

        return view($form)->with('diapo', $json);
    }

    public function postUpdateForm1()
    {

    }
    public function postUpdateForm2()
    {

    }
    public function postUpdateForm3()
    {

    }

}
