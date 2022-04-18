<?php
namespace Controllers;

use Entity\Emotion;

class EmotionController extends Controller

{
  
  public function liste($params) //envoie la liste des emotions de ma table Emotion
  {
    
    $em=$params["em"];
    $dql = "select e from Entity\Emotion e";
    $query = $em->createQuery($dql);
    $emotions=$query->getArrayResult();
    //var_dump($emotions);die;
    
    
   echo $this->twig->render('emotionListe.twig',['emotions' => $emotions]);
    
    
   
  
  }

}