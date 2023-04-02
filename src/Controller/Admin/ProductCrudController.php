<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField as FieldMoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField as FieldSlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField as FieldTextareaField;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

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
            ImageField::new('image')
            ->setBasePath('images/product')
            ->setUploadDir('public/images/product')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            TextField::new('descriptionCourte'),
            FieldTextareaField::new('descriptionLongue'),
            AssociationField::new('category'),
        ];
    }
   
}
