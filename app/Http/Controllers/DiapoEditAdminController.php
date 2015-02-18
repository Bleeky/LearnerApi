<?php
namespace LearnerApi\Http\Controllers;

use LearnerApi\Diapo;
use Symfony\Component\HttpFoundation\Request;

class DiapoEditAdminController extends AdminController
{
    public function getForm1()
    {
        return view('diapos.form.form1');
    }

    public function getForm2()
    {
        return view('diapos.form.form2');
    }

    public function getForm3()
    {
        return view('diapos.form.form2');
    }

    public function postUpdate()
    {

    }
    public function postUpdateForm1()
    {
//        $id = Request::input('id');
//        $type = Resquest::input('type');
//        $data = Request::
    }

}
