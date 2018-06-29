<?php

namespace App\Services;

use App\Http\Controllers\CartController;
use App\Models\Products;
use App\Models\ShippingCosts;
use App\Models\ShippingCountries;
use Cart;

class CartService
{

    public function __construct( Products $productsRepo, ShippingCosts $shippingsRepo,  ShippingCountries $countriesRepo)
    {
        $this->productsRepo = $productsRepo;
        $this->shippingsRepo = $shippingsRepo;
        $this->countriesRepo = $countriesRepo;
    }

    public function add( $data = [] )
    {
        //EJ de data: ['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large']]
        Cart::add($data);
    }

    public function updateCantbyId( $rowId, $cant )
    {
        return Cart::update($rowId, $cant);
    }

    public function remove( $rowId )
    {
        return Cart::remove($rowId);
    }

    public function destroy()
    {
        return Cart::destroy();
    }

    public function total()
    {
        return Cart::total();
    }

    public function count()
    {
        return Cart::count();
    }

    public function search( $data )
    {
        //EJ data: ['id' => 1, 'options' => ['size' => 'L']]
        return Cart::search($data);
    }

    public function content()
    {
        return Cart::content();
    }

    public function getTotalbyKey( $key )
    {
        $data = Cart::get($key);
        return $data->subtotal;
    }

    public function getShipCost( $country ){

        $subtotal = $this->total();

        //Buscamos si hay algun producto con marca con gastos de envio adicionales
        $extra_pvp = 0;
        foreach ($this->content() as $item){
            if ($this->productsRepo->haveExtraShippings($item->options->reference)){
                $extra_pvp = 1;
            }
        }
        //Identificamos la zona en base al código de país (IP)
        $shippingZone = $this->countriesRepo->getZoneByCountryCode($country);

        //En base al total del pedido, marcas con costes extra y zona de envio buscamos el envío en BBDD
        return $this->shippingsRepo->getShippingCost($subtotal, $extra_pvp, $shippingZone);
    }

}
