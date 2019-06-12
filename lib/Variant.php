<?php
/**
 * Created by PhpStorm.
 * @author Jan Myszkier <jan@codingmice.com>
 *
 * @see https://help.shopify.com/api/reference/products/product-variant Shopify API Reference for Product
 */

namespace PHPShopify;


/*
 * --------------------------------------------------------------------------
 * Product -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read ShopifyResource $Metafield
 *
 * @method ShopifyResource Metafield(integer $id = null)
 *
 */
class Variant extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    public $resourceKey = 'variant';

    protected $childResource = array(
        'Metafield'
    );
}