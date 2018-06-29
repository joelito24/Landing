<?php

use App\Models\Languages;
use App\Models\Categories;
use App\Models\UserStatus;
use App\Models\OrdersStatus;
use App\Models\ShippingZones;
use App\Models\ShippingCountries;
use App\Models\FaqsCategories;
use App\Models\Payments;
use App\Models\Products;
use App\Models\Colours;
use App\Models\Sizes;
use App\Models\NewsCategories;
use App\Models\Brands;


function current_lang()
{
    return 'es';
}

function all_langs()
{
    $repo = app(Languages::class);
    return $repo->all();
}

function admin_asset( $path )
{
    return asset('admin/' . $path);
}

function current_route_is( $name )
{
    return Route::currentRouteNamed($name);
}

function last_word( $text )
{
    $text = explode(' ', $text);

    return end($text);
}

function subsection_is_active( $subsections )
{
    foreach ($subsections as $section) {
        if (current_route_is($section['route'])) {
            return true;
        }
    }

    return false;
}

function current_route_has_create( $currentKey = 'menu' )
{
    return current_route_has('create', $currentKey);
}

function current_route_has_edit( $currentKey = 'menu' )
{
    return current_route_has('edit', $currentKey);
}

function current_route_has_changeactive( $currentKey = 'menu' )
{
    return current_route_has('changeactive', $currentKey);
}

function current_route_has_delete( $currentKey = 'menu' )
{
    return current_route_has('delete', $currentKey);
}

function current_route_has( $thing, $currentKey = 'menu' )
{
    $currentRoute = Route::currentRouteName();
    $config = config($currentKey);

    foreach ($config as $key => $section) {
        if (array_key_exists('dropdown', $section)) {
            $currentValue = current_route_has(
                    $thing, 'menu.' . $key . '.childs'
            );

            if ($currentValue) {
                return $currentValue;
            }

            continue;
        }

        if ($section['route'] == $currentRoute) {

            return array_key_exists($thing, $section) ? $section[$thing] : false;
        }
    }

    return false;
}

function get_rules_from( $from )
{
    $fields = config('form.' . $from . '.fields');

    $rules = [];
    foreach ($fields as $fieldsName => $field) {
        if (array_key_exists('rules', $field)) {
            $rules[$fieldsName] = $field['rules'];
        }
    }

    $langs = all_langs();
    foreach ($langs as $lang) {
        $fields = config('form.' . $from . '.lenguages.' . $lang->code . '.fields');
        if (!empty($fields)) {
            foreach ($fields as $fieldsName => $field) {
                if (array_key_exists('rules', $field)) {
                    $rules[$lang->code][$fieldsName] = $field['rules'];
                }
            }
        }
    }

    $dataExtra = config('form.' . $from . '.dataShow');
    if (is_array($dataExtra)) {        
        foreach ($dataExtra as $key => $data) {
            $fieldsAll = config('form.' . $from . '.' . $data . '');
            foreach ($fieldsAll as $subkey => $fields) {
                foreach ($fields["fields"] as $fieldsName => $field) {
                    if (array_key_exists('rules', $field)) {
                        $rules[$data][$subkey][$fieldsName] = $field['rules'];
                    }
                }
            }
        }
    }

    return $rules;
}

function get_slug_from( $from )
{
    return config('form.' . $from . '.slug');
}

function get_autocomplete_from( $from )
{
    return config('form.' . $from . '.autocomplete');
}

function resource_home( $resource )
{
    $route = 'admin.home';
    foreach (config('menu') as $field) {
        if (array_key_exists('resource', $field) && $field['resource'] == $resource) {
            return route($field['route']);
        }
        if (!empty($field['childs'])) {
            foreach ($field['childs'] as $child) {
                if (array_key_exists('resource', $child) && $child['resource'] == $resource) {
                    return route($child['route']);
                }
            }
        }
    }
    return route($route);
}

function all_categories()
{
    App::setLocale('es');
    $repo = app(Categories::class);
    $toReturn = [];
    foreach ($repo->parents()as $category) {

        $toReturn[$category->id] = $category->title;
        foreach ($repo->childsByParent($category->id)as $child) {
            $toReturn[$child->id] = '-- ' . $child->title;
        }
    }
    return $toReturn;
}

function all_categories_parent()
{
    $repo = app(Categories::class);
    $toReturn = [];
    foreach ($repo->parents() as $category) {
        $toReturn[$category->id] = $category->title;
    }
    return $toReturn;
}

function all_categories_soons()
{
    $repo = app(Categories::class);
    $toReturn = [];
    foreach ($repo->childs() as $category) {
        $toReturn[$category->id] = $category->title;
    }
    return $toReturn;
}

function this_category_has_childs($idcategory)
{
    $repo = app(Categories::class);
    //Checking if this category has subcategories
    $childs = $repo->childsByParent($idcategory);
    if(count($childs) < 1){
        return false;
    }

    return true;
}

function slugify( $text )
{
    $clean = trim($text);
    //$clean = utf8_encode($clean);

    $unwanted_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A',
        'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
        'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B',
        'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a',
        'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o',
        'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', '’' => '-');
    $clean = strtr($clean, $unwanted_array);

    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

    $array = explode('-', $clean);
    $last = (int) array_pop($array);

    if ($last > 0) {
        $array[] = "{$last}a";
        return implode('-', $array);
    }

    return $clean;
}

function preg_array_key_exists( $pattern, $array )
{
    $keys = array_keys($array);
    return preg_grep($pattern, $keys);
}

function users_status()
{
    $toReturn = [];
    foreach (UserStatus::all() as $status) {
        $toReturn[$status->id] = $status->name;
    }
    return $toReturn;
}

function langs_array()
{
    $langs = all_langs();
    $data = [];
    foreach ($langs as $lang) {
        $data[$lang->id] = $lang->code;
    }

    return $data;
}

function orders_status()
{
    $repo = app(OrdersStatus::class);
    $status = $repo->all();
    $data = [];
    foreach ($status as $state) {
        $data[$state->id] = $state->description;
    }

    return $data;
}

function all_zones()
{
    $repo = app(ShippingZones::class);
    $status = $repo->all();
    foreach ($status as $state) {
        $data[$state->id] = $state->name;
    }
    return $data;
}

function all_countries()
{
    $repo = app(ShippingCountries::class);
    $countries = $repo->all();
    foreach ($countries as $country) {
        $data[$country->id] = $country->name;
    }
    return $data;
}

function all_faqs_categories()
{
    App::setLocale('es');
    $repo = app(FaqsCategories::class);
    $categories = $repo->all();
    $data = [];
    foreach ($categories as $category) {
        $data[$category->id] = $category->title;
    }
    return $data;
}

function all_method_payment()
{
    $repo = app(Payments::class);
    $payments = $repo->all();
    foreach ($payments as $payment) {
        $data[$payment->id] = $payment->name;
    }
    return $data;
}

function all_products_backend()
{
    $repoCategories = app(Categories::class);
    $repoProducts = app(Products::class);

    $data = [];
    $categories = $repoCategories->where('parent', "")->get();
    $i = 0;
    foreach ($categories as $category) {
        $products = [];

        foreach ($repoProducts->findByCategoryId($category->id) as $product) {
            $products[$product->id] = $product->title;
        }

        $data[$i] = [
            'id' => $category->id,
            'name' => $category->title,
            'products' => $products,
        ];


        foreach ($category->getChildren() as $children) {

            $productsAux = [];
            foreach ($repoProducts->findByCategoryId($children->id) as $product) {
                $productsAux[$product->id] = $product->title;
            }

            $data[$i]["child"][] = [
                'id' => $children->id,
                'name' => $children->title,
                'products' => $productsAux,
            ];
        }
        $i++;
    }
  
    return $data;
}

function all_colours()
{
    App::setLocale('es');
    $repo = app(Colours::class);
    $colors = $repo->all();
    $data = [];
    foreach ($colors as $color) {
        $data[$color->id] = $color->title;
    }
    return $data;
}

function all_sizes()
{
    App::setLocale('es');
    $repo = app(Sizes::class);
    $sizes = $repo->all();
    $data = [];
    foreach ($sizes as $size) {
        $data[$size->id] = $size->title;
    }
    return $data;
}

function getMaxPostSize(){

    return return_bytes(ini_get('upload_max_filesize'));
}

function getMaxPostSizeMb(){

    return (return_bytes(ini_get('upload_max_filesize'))/1024)/1024;
}

function return_bytes ($size_str)
{
    switch (substr ($size_str, -1))
    {
        case 'M': case 'm': return (int)$size_str * 1048576;
        case 'K': case 'k': return (int)$size_str * 1024;
        case 'G': case 'g': return (int)$size_str * 1073741824;
        default: return $size_str;
    }
}

function all_brands()
{
    App::setLocale('es');
    $repo = app(Brands::class);
    $brands = $repo->all();
    $data = [];
    foreach ($brands as $brand) {
        $data[$brand->id] = $brand->name;
    }
    return $data;
}
function all_news_categories()
{
    App::setLocale('es');
    $repo = app(NewsCategories::class);
    $categories = $repo->all();
    $data = [];
    foreach ($categories as $category) {
        $data[$category->id] = $category->title;
    }
    return $data;
}
