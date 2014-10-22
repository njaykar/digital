<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Main:index.html.twig', array(
                // ...
            ));    }
		
	public function aboutAction()
    {
        return $this->render('AcmeDemoBundle:Main:about.html.twig', array(
                // ...
            ));    }
	
	public function teacherAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare("SELECT * FROM program_links order by rating DESC");
		$statement->execute();
		$results = $statement->fetchAll();
		
		
		return $this->render('AcmeDemoBundle:Main:teacher.html.twig',
		array('results' => $results));
	}
	
	public function advisorAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$results = $em->getRepository('AcmeDemoBundle:Career')->findAll();
		
		
		return $this->render('AcmeDemoBundle:Main:advisor.html.twig',
		array('results' => $results));
	}
	
	public function contactAction()
    {
        return $this->render('AcmeDemoBundle:Main:contact.html.twig', array(
                // ...
            ));    }	
	
	public function testimonialAction()
    {
        return $this->render('AcmeDemoBundle:Main:testimonial.html.twig', array(
                // ...
            ));    }	
	
	public function parentAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare("SELECT * FROM program_links order by rating DESC");
		$statement->execute();
		$results = $statement->fetchAll();
			
		
		return $this->render('AcmeDemoBundle:Main:parent.html.twig',
		array('results' => $results));
	}
	
	public function advisorInfoAction()
	{
		$request = $this->container->get('request');
		
		$em = $this->getDoctrine()->getEntityManager();
		$connection = $em->getConnection();
		$statement = $connection->prepare("SELECT * FROM career where jobType = :type");
		$statement->bindValue('type', $type);
		$statement->execute();
		$results = $statement->fetchAll();
		
		$response = $results;		
		
		return  new Response(json_encode($response)); 
	}
}
