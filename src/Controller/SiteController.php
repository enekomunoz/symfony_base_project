<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of SiteController
 *
 * @author emunoz
 */
class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        return $this->render('site/index.html.twig', [
            'props' => ['name' => 'eneko']
        ]);
    }
}
