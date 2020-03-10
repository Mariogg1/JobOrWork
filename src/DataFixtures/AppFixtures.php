<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Empresa;
use App\Entity\Oferta;
use App\Entity\Candidat;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $emp1 = new Empresa();
        $emp1->setCorreu("em1@giam.cat")
             ->setLogo("logo1.png")
             ->setTipus("tecnològica");
        $manager->persist($emp1);

        $emp2 = new Empresa();
        $emp2->setCorreu("em2@giam.cat")
             ->setLogo("logo2.png")
             ->setTipus("administratiu");
        $manager->persist($emp2);

        $emp3 = new Empresa();
        $emp3->setCorreu("em3@giam.cat")
             ->setLogo("logo3.png")
             ->setTipus("social");
        $manager->persist($emp3);

        $of1=new Oferta();
        $of1->setDataPub(new \DateTime())
            ->setDescripcio("desenvolupador web")
            ->setEmpresa($emp1);
        $manager->persist($of1);

        $of2=new Oferta();
        $of2->setDataPub(new \DateTime())
            ->setDescripcio("area espanyola")
            ->setEmpresa($emp2);
        $manager->persist($of2);

        $of3=new Oferta();
        $of3->setDataPub(new \DateTime())
            ->setDescripcio("psicoleg")
            ->setEmpresa($emp3);
        $manager->persist($of3);

        $ca1=new Candidat();
        $ca1->setNom("Mario")
            ->setCognoms("Ruiz")
            ->setTelefon("1111")
            ->addOfertum($of1);
        $manager->persist($ca1);

        $ca2=new Candidat();
        $ca2->setNom("Federico")
            ->setCognoms("Lopez")
            ->setTelefon("2222")
            ->addOfertum($of2);
        $manager->persist($ca2);

        $ca3=new Candidat();
        $ca3->setNom("Antonnio")
            ->setCognoms("Fernandez")
            ->setTelefon("3333")
            ->addOfertum($of3);
        $manager->persist($ca3);

        $manager->flush();
    }
}
