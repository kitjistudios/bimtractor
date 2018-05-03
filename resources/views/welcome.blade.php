<style>
    .full-height {
        height: 0vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        background-color: #ffffff;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
       // padding: 0 15px;
        font-size: 10px;
        font-weight: 500;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@extends('layouts.app')

@section('content')
<div class="jumbotron img-responsive text-uppercase text-center" style="background-color:#fff;">
    <img src="{{asset('bimtractor_logo.jpg')}}" alt="{{ config('app.name') }}" height="250" >   
</div>
<div class="flex-center position-ref full-height">
    <div class="content" >
        <div class="row">
            <div class="col-sm-12"> 
                <div class="title m-b-md">
                    <label style="font-size: x-large; font-family: 'Raleway', sans-serif;font-weight: 100; margin-left: -20px">{{ config('app.name') }}</label> 
                </div>
            </div>
        </div> 
    </div>     
</div> 



@endsection
