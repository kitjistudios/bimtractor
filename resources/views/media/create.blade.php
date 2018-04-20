@extends('layouts.app')
@section('content')
<div>
    <form action="/" method="post" id="PhotoForm" >
        <input type="file" accept="image/*" capture="camera" id="MyPhoto">
        <button type="submit" id="SubmitMyPhoto" value="Submit">Save Photo</button>

    </form>
</div>
@endsection

