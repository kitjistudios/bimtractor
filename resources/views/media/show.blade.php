@extends('layouts.app')

@section('content')
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {


       /* var dataImage = localStorage.getItem('imgData');
        bannerImg = document.getElementById('tableBanner');
        bannerImg.src = "data:image/png;base64," + dataImage;*/
    });
</script>
<h1>show</h1>
{{$media}} 
<img src="" id="tableBanner" name="tableBanner" />
@endsection
