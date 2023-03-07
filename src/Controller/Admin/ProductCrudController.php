<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField as FieldCollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField as FieldMoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField as FieldSlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField as FieldTextareaField;
use Symfony\Component\Form\Extension\Core\Type\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\MoneyField;
use Symfony\Component\Form\Extension\Core\Type\SlugField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nomBoutique'),
            TextField::new('titreArticle'),
            FieldSlugField::new('slug')->setTargetFieldName('titreArticle'),
            TextField::new('discount'),
            FieldMoneyField::new('prix')->setCurrency('XAF'),
            FieldMoneyField::new('prixBefore')->setCurrency('XAF'),
            ImageField::new('photo')->setBasePath('uploads/')->setUploadDir('uploads/')->setUploadedFileNamePattern(''),
            TextField::new('descriptionCourte'),
            FieldTextareaField::new('descriptionLongue'),
            AssociationField::new('category')
        ];
    }
   
}
