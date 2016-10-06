<?php

/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class ProductSale
{

    /*
    ** Fill the `product_sale` SQL table with data from `order_detail`
    ** @return bool True on success
    */
    public static function fillProductSales()
    {
    }

    /*
    ** Get number of actives products sold
    ** @return int number of actives products listed in product_sales
    */
    public static function getNbSales()
    {
    }

    /*
    ** Get required informations on best sales products
    **
    ** @param integer $id_lang Language id
    ** @param integer $page_number Start from (optional)
    ** @param integer $nb_products Number of products to return (optional)
    ** @return array from Product::getProductProperties
    */
    public static function getBestSales($id_lang, $page_number = 0, $nb_products = 10, $order_by = null, $order_way = null)
    {
    }

    /*
    ** Get required informations on best sales products
    **
    ** @param integer $id_lang Language id
    ** @param integer $page_number Start from (optional)
    ** @param integer $nb_products Number of products to return (optional)
    ** @return array keys : id_product, link_rewrite, name, id_image, legend, sales, ean13, upc, link
    */
    public static function getBestSalesLight($id_lang, $page_number = 0, $nb_products = 10, Context $context = null)
    {
    }

    public static function addProductSale($product_id, $qty = 1)
    {
    }

    public static function removeProductSale($id_product, $qty = 1)
    {
    }

    public static function getNbrSales($id_product)
    {
    }
}

