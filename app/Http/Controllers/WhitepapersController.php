<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:37
 */

namespace App\Http\Controllers;


use App\Models\Whitepapers;

class WhitepapersController extends Controller
{
    public function whitepapers(Whitepapers $whitepapersRepository){

        $whitepapers = $whitepapersRepository->findAllActive();
        return view('front.whitepapers.whitepapers',[
            'whitepapers' => $whitepapers,
        ]);

    }
    public function detail(Whitepapers $whitepapersRepository, $slug){

        $whitepaper = $whitepapersRepository->findBySlug($slug);
        return view('front.whitepapers.detailWhitepaper',[
            'whitepaper' => $whitepaper,
        ]);

    }
}