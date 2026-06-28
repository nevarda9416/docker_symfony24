<?php

namespace src\salleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use src\salleBundle\Entity\Membre;
use src\salleBundle\Form\MembreType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        
        $em = $this->getDoctrine()->getManager();
        $coach = $em->getRepository('srcsalleBundle:Coach')->findAll();
        foreach ($coach as $key => $value) {
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
    
       
    $membre = new Membre();
        $form = $this->container->get('form.factory')->create(new MembreType(), $membre);
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($membre);
                $em->flush();
                return $this->redirect($this->generateUrl("srcsalle_homepage"));
            }
        }
        return $this->render('srcsalleBundle:Default:index.html.twig', array('form' => $form->createView()));
    
        
        //Swift_mail
        $Request= $this->getRequest();
        if($Request->getMethod()== "POST"){
            $Subject=$Request->get("Subject");
            $mailer=$this->container->get("mailer");
            $transport= \Swift_SmtpTransport::newInstance('smtp.gamil.com',465,'ssl')
            ->setUsername('alimtibaa2017@gmail.com')
            ->setPassword('alimtibaa1993');
            $mailer= \Swift_Mailer::newInstance($transport);
             $mesg= \Swift_Message::newInstance('test')
             ->setSubject($Subject)
             ->setFrom('alimtibaa2017@gmail.com')
             ->setTO($Request->get("Email"))
             ->setBody($Request->get("mesg"));
            // ->setContentType('text/html');
             $this->get('mailer')->send($mesg);
        }
        return $this->render('srcsalleBundle:Default:index.html.twig');
    }
}
