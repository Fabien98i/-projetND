<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Individus;
use App\Entity\Entreprises;
use App\Entity\Individusformation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/individu", name="individu")
     */
    public function index (EntityManagerInterface $em){
        $repository = $em->getRepository('App\Entity\Individus');
        $liste_individus= $repository -> findAll();
        return $this->render('home/index.html.twig', ['individus' => $liste_individus]);
    }

    /**
     * @Route("/formation", name="formation")
     */
    public function index2 (EntityManagerInterface $em): Response{
        $repository = $em->getRepository('App\Entity\Formation');
        $liste_formations = $repository -> findAll();
        return $this->render('home/index2.html.twig', ['formations' => $liste_formations]);
    }

    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function index3 (EntityManagerInterface $em): Response{
        $repository = $em->getRepository('App\Entity\Entreprises');
        $liste_entreprises = $repository -> findAll();
        return $this->render('home/index3.html.twig', ['entreprises' => $liste_entreprises]);
    }

    /**
     * @Route("/insert", name="insert", methods={"GET","POST"})
     */
    public function insert (Request $request, EntityManagerInterface $em){
        if($request -> isMethod('POST')){
            $data = $request->request->all();
            $formation = new Individusformation;
            $individu = new Individus;
            $individu ->setNomIndividu($data['nom_individu']);
            $individu ->setPrenomIndividu($data['prenom_individu']);
            $individu -> setAdresseIndividu($data['adresse']);
            $individu -> setTypeIndividu($data["type"]);
            $formation -> setFidForm($data["formation"]);
            $em -> persist($individu);
            $em -> flush();
            return $this->render('base.html.twig');
        }
        return $this->render('home/insert.html.twig');
    }

    /**
     * @Route("/insertent", name="insertent", methods={"GET","POST"})
     */
    public function insertent (Request $request, EntityManagerInterface $em){
        if($request -> isMethod('POST')){
            $data = $request->request->all();
        
           $entreprise = new Entreprises;
            $entreprise ->setNomEntreprise($data['nom_entreprise']);
            $entreprise ->setAdresseEntreprise($data['adresse_entreprise']);
            $em -> persist($entreprise);
            $em -> flush();
            return $this->render('base.html.twig');
        }
        return $this->render('home/insertentreprise.html.twig');
    }

    /**
     * @Route("/insertf", name="insertf" , methods={"GET","POST"})
     */
    public function insertf (EntityManagerInterface $em){
        $formation1 = new Formation;
        $formation2 = new Formation;
        $formation3 = new Formation;
        $formation4 = new Formation;
        
        $formation1 ->setFiliere('Developpement Informatique');
        $formation4 ->setFiliere('Cybersecurite');
        $formation2 ->setFiliere('Marketing');  
        $formation3 ->setFiliere('Réseaux et SI');   
        $em -> persist($formation1);
        $em -> persist($formation2);
        $em -> persist($formation3);
        $em -> persist($formation4);
        $em -> flush();
        return $this->render('base.html.twig');
    }
}