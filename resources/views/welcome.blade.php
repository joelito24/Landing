@extends('front.layouts.master')
@section('content')
    <section class="content">
        <div class="container">
            <div class="content" style="color:000;">
                <div class="title">Laravel 5</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
            </div>
        </div>
    </section>
@stop