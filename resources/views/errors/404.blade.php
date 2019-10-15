@extends('layouts.master')

@section('title', '404')

@section('content')
<style>
    #notfound {
    position: relative;
    height: 100vh;
    }

    #notfound .notfound {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    }

    .notfound {
    max-width: 520px;
    width: 100%;
    line-height: 1.4;
    text-align: center;
    }

    .notfound .notfound-404 {
    position: relative;
    height: 240px;
    }

    .notfound .notfound-404 h1 {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 252px;
    font-weight: 900;
    margin: 0px;
    color: #262626;
    text-transform: uppercase;
    margin-left: -20px;
    }
</style>


<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h3>Oops! Page not found</h3>
            <h1><span>4</span><span>0</span><span>4</span></h1>
        </div>
        
        <h2>We are sorry, but the page you requested was not found.</h2>
        <a href="/" class="btn btn-primary btn-round ml-auto"><span>Home</span></a>
    </div>
</div>

@endsection