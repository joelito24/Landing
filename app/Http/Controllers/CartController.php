<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Services\EcommerceService;
use App\Models\Products;
use App\Services\EmailServices;
use App\Models\Carts;
use App\Models\OrdersDetails;
use App\Models\Orders;
use App\Models\Coupons;
use App\Models\ShippingCountries;
use App\Models\ShippingCosts;
use Input;
use Session;
use Log;
use Auth;
use Validator;
use GeoIP;

class CartController extends Controller
{

    public function stepOne( CartService $cartServices, EcommerceService $ecommerceServices, Coupons $Coupons)
    {
        $coupon = Session::get('coupons', FALSE);
        $couponvalue = 0;
        $coupontitle = "";
        $ships = 0;
        $total =0;

        $subtotal = $cartServices->total();

        //GET SHIPS COSTS
        $location = GeoIP::getLocation('37.14.192.213');
        $country = $location['isoCode'];
        $ships = $cartServices->getShipCost($country);

        //GET COUPON VALUE
        if ($coupon !== false):
            $coupontitle = $coupon['code'];
            if($coupon->ships == 1){
                $couponvalue = $ships;
            }else{
                if ($coupon->percentage == 1){
                    $couponvalue = ($subtotal * $coupon->discount) / 100;
                }else {
                    $couponvalue = $coupon->discount;
                }
            }
        else:
            $couponvalue = 0;
        endif;

        if($subtotal != null){
            $total = $ships + ($subtotal - $couponvalue);
        }

        return view('front.cart.step1', [
            'data' => $cartServices->content(),
            'subtotal' => $subtotal,
            'coupontitle' => $coupontitle,
            'couponvalue' => $couponvalue,
            'total' => $total,
            'ships' =>  $ships
        ]);
    }

    public function stepTwo( CartService $cartServices )
    {
        $products = $cartServices->content();
        if (count($products) > 0) {
            if (Auth::User() != null && Auth::User()->isAdmin()) {
                Auth::logout();
            }
            return View('front.cart.step2', [
                'user' => Auth::User(),
                'orders_details' => Session::get('order_details', false)
            ]);
        } else {
            return redirect()->intended(route('cart.step.one'));
        }
    }

    public function postStepTwo( EcommerceService $ecommerceServices )
    {
        $user = Auth::User();
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'postalcode' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country_id' => 'required|integer',
            'telephone' => 'required',
        ];

        if (empty($user)) {
            $rules['email'] = 'required|email|unique:users,email';
            $rules['password'] = 'required|min:3|confirmed';
            $rules['password_confirmation'] = 'required|min:3';
        } else {
            $rules['email'] = 'required|email|unique:users,email,' . $user->id;
        }

        $validations = Validator::make(Input::All(), $rules);
        if ($validations->fails() == true) {
            return back()->withInput()->withErrors($validations->errors()->toArray());
        }


        $data = Input::All();
        $ecommerceServices->saveStepTwo($data);
        return redirect()->intended(route('cart.step.three'));
    }

    public function stepThree( ShippingCosts $ShippingCosts, ShippingCountries $ShippingCountries, CartService $cartServices, OrdersDetails $orderDetails, Carts $carts, EmailServices $emailService, Orders $orderRepository )
    {
        $coupon = Session::get('coupons', FALSE);
        $couponvalue = 0;
        $coupontitle = "";
        $ships = 0;
        $total = 0;

        $subtotal = $cartServices->total();

        //GET SHIPS COSTS
        $countryId = Session::get('order_details', FALSE)->shipping_country;
        $contryCode = $ShippingCountries->getCountryCodeById($countryId);
        $ships = $cartServices->getShipCost($contryCode);

        //GET COUPON VALUE
        if ($coupon !== false):
            $coupontitle = $coupon['code'];
            if($coupon->ships == 1){
                $couponvalue = $ships;
            }else{
                if ($coupon->percentage == 1){
                    $couponvalue = ($subtotal * $coupon->discount) / 100;
                }else {
                    $couponvalue = $coupon->discount;
                }
            }
        else:
            $couponvalue = 0;
        endif;

        if($subtotal != null){
            $total = $ships + ($subtotal - $couponvalue);
        }


        if (count($cartServices->content()) > 0) {
            return View('front.cart.step3', [
                'data' => $cartServices->content(),
                'total' => $total,
                'ships' => $ships,
                'subtotal' => $subtotal,
                'coupontitle' => $coupontitle,
                'couponvalue' => $couponvalue,
                'user' => Auth::User(),
                'orders_details' => Session::get('order_details', FALSE),
                'coupon' => Session::get('coupons', FALSE)
            ]);
        }else{
            return redirect()->intended(route('cart.step.one'));
        }
    }

    public function add( CartService $cartServices, Products $productsRepository )
    {
        $product = $productsRepository->find(Input::get('product_id'));

        if (is_object($product) && ($product instanceof Products )) {
            $price = (($product->pvp_discounted < $product->pvp) && $product->pvp_discounted > 0) ? $product->pvp_discounted : $product->pvp;
            $cartServices->add([
                'id' => $product->id,
                'name' => $product->title,
                'qty' => Input::get('number'),
                'price' => $price,
                'options' => ['image' => $product->image, 'slug' => $product->fullSlug, 'reference' => $product->reference]]);
            return redirect()->intended(route('cart.step.one'));
        }
        return redirect()->intended(route('error403'));
    }

    public function add_direct( CartService $cartServices, Products $productsRepository )
    {
        $product = $productsRepository->find(Input::get('product_id'));
        if (is_object($product) && ($product instanceof Products )) {
            $price = (($product->pvp_discounted < $product->pvp) && $product->pvp_discounted > 0) ? $product->pvp_discounted : $product->pvp;

            $cartServices->add([
                'id' => $product->id,
                'name' => $product->title,
                'qty' => Input::get('number'),
                'price' => $price,
                'options' => [
                    'image' => $product->image,
                    'reference' => $product->reference,
                    'slug' => $product->fullSlug
                ]
            ]);
            return json_encode([
                'success' => true,
                "count_items" => $cartServices->count()]);
        }
        return redirect()->intended(route('error403'));
    }

    public function delete( CartService $cartServices, ShippingCosts $ShippingCosts )
    {
        $cartServices->remove(Input::get('entity_id'));

        $coupon = Session::get('coupons', FALSE);
        $couponvalue = 0;
        $coupontitle = "";
        $subtotal = 0;
        $ships = 0;
        $total = 0;
        $countItems = $cartServices->content();

        $subtotal = $cartServices->total();

        if($subtotal > 0){
            // GET SHIPS COST
            $location = GeoIP::getLocation();
            $country = $location['isoCode'];
            $ships = $cartServices->getShipCost($country);

            //GET COUPON VALUE
            if ($coupon !== false):
                $coupontitle = $coupon['code'];
                if($coupon->ships == 1){
                    $couponvalue = $ships;
                }else{
                    if ($coupon->percentage == 1){
                        $couponvalue = ($subtotal * $coupon->discount) / 100;
                    }else {
                        $couponvalue = $coupon->discount;
                    }
                }
            else:
                $couponvalue = 0;
            endif;

            $total = $ships + ($subtotal - $couponvalue);
        }

        return json_encode([
            'success' => true,
            'coupontitle' => $coupontitle,
            'couponvalue' => $couponvalue,
            "subtotal" => $subtotal,
            "countItems" => $countItems,
            "ships" => $ships,
            "total" =>  $total,
        ]);
    }

    public function update( CartService $cartServices, ShippingCosts $ShippingCosts )
    {
        $key = Input::get('product_id');
        $cartServices->updateCantbyId($key, Input::get('num'));

        $coupon = Session::get('coupons', FALSE);
        $couponvalue = 0;
        $coupontitle = "";
        $subtotal = 0;
        $ships = 0;
        $total = 0;
        $countItems = $cartServices->content();


        $subtotal = $cartServices->total();

        // GET SHIPS COST
        $location = GeoIP::getLocation();
        $country = $location['isoCode'];
        $ships = $cartServices->getShipCost($country);

        //GET COUPON VALUE
        if ($coupon !== false):
            $coupontitle = $coupon['code'];
            if($coupon->ships == 1){
                $couponvalue = $ships;
            }else{
                if ($coupon->percentage == 1){
                    $couponvalue = ($subtotal * $coupon->discount) / 100;
                }else {
                    $couponvalue = $coupon->discount;
                }
            }
        else:
            $couponvalue = 0;
        endif;

        $total = $ships + ($subtotal - $couponvalue);


        return json_encode([
            'success' => true,
            'coupontitle' => $coupontitle,
            'couponvalue' => $couponvalue,
            "subtotal" => $subtotal,
            "ships" => $ships,
            "total" =>  $total,
            "countItems" => $countItems,
            "item_total" => $cartServices->getTotalbyKey($key)
        ]);
    }

    public function add_discount( Coupons $couponsRepository )
    {
        $codeDiscount = Input::get('discount');
        $validated = $couponsRepository->checkCode($codeDiscount);

        if ($validated) {
            Session::put('coupons', $validated);
        }

        return redirect()->back();
    }

    public function cleardiscount() {

        Session::forget('coupons');

        return redirect()->back();
    }


    public function clearcart( CartService $cartServices )
    {
        Session::forget('coupons');
        Session::forget('order_details');
        Session::forget('cart_bd');
        Session::forget('order');

        $cartServices->destroy();

        return json_encode(['success' => true]);
    }

}
