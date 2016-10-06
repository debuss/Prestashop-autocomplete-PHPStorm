<?php

class ExpeditorModule extends ObjectModel
{

    public $id_order;
    public $weight;
    public $standard_size;
    public $is_send;
    public $date_add;
    public $date_upd;
    public $product_codes = array(
        'CORE' => array(
            'ref' => 'CORE',
            'name' => 'Colissimo Service France',
            'prefix' => '8R'
        ),
        'CDS' => array(
            'ref' => 'CDS',
            'name' => 'Colissimo Expert OM',
            'prefix' => '7A'
        ),
        'COP' => array(
            'ref' => 'COP',
            'name' => 'Colissimo Expert Interne',
            'prefix' => '8O'
        ),
        'COLI' => array(
            'ref' => 'COLI',
            'name' => 'Colissimo Expert Inter',
            'prefix' => 'CD,CY'
        ),
        'COL' => array(
            'ref' => 'COL',
            'name' => 'Colissimo Expert France',
            'prefix' => '8V'
        ),
        'COM' => array(
            'ref' => 'COM',
            'name' => 'Colissimo Access OM',
            'prefix' => '8Q'
        ),
        'COLD' => array(
            'ref' => 'COLD',
            'name' => 'Colissimo Access France',
            'prefix' => '8L'
        ),
        'COE' => array(
            'ref' => 'COE',
            'name' => 'Colissimo Economique OM',
            'prefix' => '8M'
        ),
        'SO' => array(
            'ref' => 'SO',
            'name' => 'SoColissimo',
            'prefix' => ''
        )
        /* D�but Fix So Colissimo Libert� */
    ,
        'SOL' => array(
            'ref' => 'SOL',
            'name' => 'SoColissimo Libert&eacute;',
            'prefix' => ''
        )
        /* Fin Fix So Colissimo Libert� */
    );
    protected $fieldsRequired = array('id_order');
    protected $fieldsSize = array(
        'weight' => 16,
        'standard_size' => 1
    );
    protected $fieldsValidate = array(
        'id_order' => 'isUnsignedId',
        'weight' => 'isFloat',
        'standard_size' => 'isBool'
    );
    protected $table = 'expeditor';
    protected $identifier = 'id_expeditor';

    static public function getByIdOrder($id_order)
    {
    }

    static function getOrders()
    {
    }

    static function getList()
    {
    }

    public function getFields()
    {
    }
}

?>
