<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollectionController extends AbstractController
{

/**
     * Testing site for trouble shooting
         *
         * @Route("/test", name="test")
         */
        public function test()
        {
            return $this->render('collection/test.html.twig', [
                ''
                ]);
        }

/**
     * Start page of Website displaying an overview of all published interviews.
     *
     * @Route("/placeholder", name="placeholder")
     */
    public function placeholder()
    {
        return $this->render('collection/placeholder.html.twig', [
            ''
            ]);
    }

    /**
     * Start page of Website displaying an overview of all published interviews.
     *
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('collection/home.html.twig', [
            ''
            ]);
    }

    /**
         * Map view of all places mentioned in the Interviews.
         *
         * @Route("/map", name="map")
         */
        public function map()
        {
            return $this->render('collection/map.html.twig', [
                ''
                ]);
        }

    // TODO: even though it will not be used, add a generic function to load data from json for purpose of potential reuse
    /**
     * Single view for an interview containing video, meta data and short summary of content of the interview
     *
     * @Route("/interview/{slug}", name="interview")

    public function interview($slug)
    {

        return $this->render('interviews/template.html.twig', [
            'person' => ucwords(str_replace('-', ' ', $slug)),
        ]);
    }
      */

    /**
     * Information about the project and the partners.
     *
     * @Route("/ueber-das-projekt", name="about")
     */
    public function about()
    {
        return $this->render('collection/about.html.twig');
    }

    /**
     * Information on (historical) context.
     *
     * @Route("/das-juedische-hamburg", name="context")
     */
    public function context()
    {
        return $this->render('collection/context.html.twig');
    }

    /**
     * Information on usage of interviews and data: licensing and further information.
     *
     * @Route("/nutzung", name="usage")
     */
    public function usage()
    {
        return $this->render('collection/usage.html.twig');
    }

    /**
     * Imprint.
     *
     * @Route("/impressum", name="imprint")
     */
    public function imprint()
    {
        return $this->render('collection/imprint.html.twig');
    }

    /**
     * JSON API of Interviews and metadata.
     *
     * @Route("/api/json", name="json")
     */
    public function jsonapi()
    {
        $jsonData = file_get_contents(__DIR__ . '/interviews.json');
        return JsonResponse::fromJsonString($jsonData);
    }

    /**
     * Interview template
     *
     * @Route("/interview/template", name="template")
     */
    public function template()
    {
        return $this->render('interviews/template.html.twig');
    }

    /**
     * Interview Fenyes
     *
     * @Route("/interview/fenyes", name="fenyes")
     */
    public function fenyes()
    {
        return $this->render('interviews/fenyes.html.twig');
    }

    /**
     * Interview Camargo
     *
     * @Route("/interview/camargo", name="camargo")
     */
    public function camargo()
    {
        return $this->render('interviews/camargo.html.twig');
    }

    /**
         * Interview Guenther
         *
         * @Route("/interview/guenther", name="guenther")
         */
        public function guenther()
        {
            return $this->render('interviews/guenther.html.twig');
        }

    /**
     * Interview Guggenheim
     *
     * @Route("/interview/guggenheim", name="guggenheim")
     */
    public function guggenheim()
    {
        return $this->render('interviews/guggenheim.html.twig');
    }

    /**
     * Interview Heimann
     *
     * @Route("/interview/heimann", name="heimann")
     */
    public function heimann()
    {
        return $this->render('interviews/heimann.html.twig');
    }

    /**
     * Interview Horwitz
     *
     * @Route("/interview/horwitz", name="horwitz")
     */
    public function horwitz()
    {
        return $this->render('interviews/horwitz.html.twig');
    }

    /**
         * Interview Korn
         *
         * @Route("/interview/korn", name="korn")
         */
        public function korn()
        {
            return $this->render('interviews/korn.html.twig');
        }

    /**
     * Interview Lahnstein
     *
     * @Route("/interview/lahnstein", name="lahnstein")
     */
    public function lahnstein()
    {
        return $this->render('interviews/lahnstein.html.twig');
    }

    /**
     * Interview Landshut
     *
     * @Route("/interview/landshut", name="landshut")
     */
    public function landshut()
    {
        return $this->render('interviews/landshut.html.twig');
    }

    /**
         * Interview Lohse
         *
         * @Route("/interview/lohse", name="lohse")
         */
        public function lohse()
        {
            return $this->render('interviews/lohse.html.twig');
        }

    /**
     * Interview Lubinska
     *
     * @Route("/interview/lubinska", name="lubinska")
     */
    public function lubinska()
    {
        return $this->render('interviews/lubinska.html.twig');
    }

    /**
     * Interview Melamed
     *
     * @Route("/interview/melamed", name="melamed")
     */
    public function melamed()
    {
        return $this->render('interviews/melamed.html.twig');
    }

    /**
     * Interview Nasirzadeh
     *
     * @Route("/interview/nasirzadeh", name="nasirzadeh")
     */
    public function nasirzadeh()
    {
        return $this->render('interviews/nasirzadeh.html.twig');
    }

     /**
      * Interview Parnass
      *
       * @Route("/interview/parnass", name="parnass")
       */
         public function parnass()
         {
             return $this->render('interviews/parnass.html.twig');
          }

    /**
         * Interview Pestov
         *
         * @Route("/interview/pestov", name="pestov")
         */
        public function pestov()
        {
            return $this->render('interviews/pestov.html.twig');
        }

    /**
         * Interview Rosenblum
         *
         * @Route("/interview/rosenblum", name="rosenblum")
         */
        public function rosenblum()
        {
            return $this->render('interviews/rosenblum.html.twig');
        }

    /**
     * Interview Trebitsch
     *
     * @Route("/interview/trebitsch", name="trebitsch")
     */
    public function trebitsch()
    {
        return $this->render('interviews/trebitsch.html.twig');
    }

    /**
     * Interview Wallenstein
     *
     * @Route("/interview/wallenstein", name="wallenstein")
     */
    public function wallenstein()
    {
        return $this->render('interviews/wallenstein.html.twig');
    }

    /**
         * Interview Wittenberg
         *
         * @Route("/interview/wittenberg", name="wittenberg")
         */
        public function wittenberg()
        {
            return $this->render('interviews/wittenberg.html.twig');
        }

    /**
     * Interview Zunik
     *
     * @Route("/interview/zunik", name="zunik")
     */
    public function zunik()
    {
        return $this->render('interviews/zunik.html.twig');
    }

}