<?php

namespace CV\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CvController extends Controller
{


    /**
     * @Route("/", name="accueil")
     */
    public function accueilAction()
    {

        return $this->render('@Cv/Cv/accueil.html.twig');

    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cvAction(Request $request)
    {

        $pdf = $this->get('knp_snappy.pdf');
        $cv = $this->renderView('@Cv/Cv/displayCV.html.twig',['base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()]);
        $fileName = 'cv';
        //$pdf->setOption('viewport-size','1024x768','page-size','A4');

        return new Response(
            $pdf->getOutputFromHtml($cv),
            200,
            [   'Content-Type' => 'application/pdf',
                'Content-Disposition'=> 'inline; filename = "'.$fileName.'.pdf"',



            ]
        );

    }


    /**
     * @Route("/cvTest", name="cvTest")
     */
    public function cvTestAction(Request $request)
    {

      return $this->render('@Cv/Cv/cvTest.html.twig');

    }


    /**
     * @Route("/cvTheme3", name="cvTheme3")
     */
    public function cvTheme3Action(Request $request)
    {

        return $this->render('@Cv/Cv/cvTheme3.html.twig');
    }

    /**
     * @Route("/vueJsTest", name="vueJsTest")
     */
    public function vueJsTestAction(Request $request)
    {

        return $this->render('@Cv/Cv/vueJsTest.html.twig');
    }
    
     /**
     * @Route("/newThem", name="newThem")
     */
    public function newThemAction(Request $request)
    {

        
        $pdf = $this->get('knp_snappy.pdf');
        $cv = $this->renderView('@Cv/Cv/newThem.html.twig',['base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()]);
        $fileName = 'cv';
        //$pdf->setOption('viewport-size','1024x768','page-size','A4');

        return new Response(
            $pdf->getOutputFromHtml($cv),
            200,
            [   'Content-Type' => 'application/pdf',
                'Content-Disposition'=> 'inline; filename = "'.$fileName.'.pdf"',



            ]
        );
       
    }
    
    
}
