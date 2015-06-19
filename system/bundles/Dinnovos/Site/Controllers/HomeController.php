<?php

namespace Dinnovos\Site\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Dinnovos\Site\Main\BundleController;

class HomeController extends BundleController
{
    public function indexAction(Request $request)
    {
        return $this->render('Dinnovos\Site:Home:index');
	}
}