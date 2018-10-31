<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Controller\JSONRequestController;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller 
{
	
	public function indexAction()
	{
		return $this->render('index/index.twig');
	}

	public function categoriesAction()
	{
		$allCategories = (new JSONRequestController)->getCategoriesAllAction();
		
		return $this->render('categories/index.twig', [
			'categories' => $allCategories
		]);
	}

	public function activitiesAction()
	{
		$allActivities = (new JSONRequestController)->getActivitiesAllAction();
		$allComments = (new JSONRequestController)->getCommentsAllAction();

		return $this->render('activities/index.twig', [
			'activities' => $allActivities,
			'commets' => $allComments,
		]);
	}
}