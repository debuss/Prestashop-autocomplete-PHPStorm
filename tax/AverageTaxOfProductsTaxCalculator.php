<?php

class AverageTaxOfProductsTaxCalculator
{

    public $computation_method = 'average_tax_of_products';
    private $id_order;
    private $configuration;
    private $db;

    public function __construct(Core_Foundation_Database_DatabaseInterface $db, Core_Business_ConfigurationInterface $configuration)
    {
    }

    public function setIdOrder($id_order)
    {
    }

    public function getTaxesAmount($price_before_tax, $price_after_tax = null, $round_precision = 2, $round_mode = null)
    {
    }

    private function getProductTaxes()
    {
    }
}
