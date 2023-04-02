<?php

// namespace App\EventSubscriber;

// use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
// use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
// use Symfony\Component\HttpKernel\KernelInterface;

// class EasyAdminSubscriber implements EventSubscriberInterface
// {   
//     private $appKernel;

//     public function __construct(KernelInterface $appKernel)
//     {
//         $this->appKernel = $appKernel;
//     }

//     public static function getSubscribedEvents() 
//     {
//         return [
//             BeforeEntityPersistedEvent::class => ['setImage'],
//         ];
//     }

//     public function setImage(BeforeEntityPersistedEvent $event) {

//         $entity = $event->getEntityInstance();

//         $tmp_name = $entity->getIllustration();
//         $filename = uniqid();

//         $extension = pathinfo($_FILES['PRODUCT']['titreArticle']['image'], PATHINFO_EXTENSION);


//         $project_dir = $this->appKernel->getProjectDir();

//         move_uploaded_file($tmp_name, $project_dir.'/public/uploads/'.$filename.'.'.$extension);
        
//         $entity->setImage($filename.'.'.$extension);
//     }
// }

