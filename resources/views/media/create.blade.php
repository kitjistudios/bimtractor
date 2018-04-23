@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">     
    <div class="content">
        <div class="title m-b-md center-block">
            <img height="90px" src="{{ asset('/bimtractor_logo.jpg') }}">   Bimtractor

        </div>

        <div >
            <form action="../media/store" method="POST" id="PhotoForm" >
                @csrf 
                <div class="form-group-sm">
                    <div class="form-row ">
                        <label class="text-center">Tell us about your snapshot</label>
                        <input class="form-control" type="text" id="text1" name="text1" >                        
                    </div> 
                    <div class="form-inline">
                        <label class="text-center"> <i class="fa fa-camera"></i>   Take a snapshot</label>
                        <input class="form-control-file form-group-sm" type="file" accept="image/*" capture="camera" id="MyPhoto" name="MyPhoto">
                    </div>
                    <caption> 


                        <button type="submit" id="SubmitMyPhoto" class="btn btn-link">Store Snapshot</button>                      
                </div>
            </form>

        </div>
        <footer class="flex-center">
            <p>Powered by<a  href="">Kitji Studios</a></p>
        </footer>
    </div>

</div>   


@endsection
