@extends('layouts.app')
@section('content')
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {

        $("#MyPhoto").change(function () {
            var input = document.querySelector('input[type=file]'); // see Example 4
            var file = input.files[0];   
            //upload(file);
            drawOnCanvas(file);   // see Example 6
            displayAsImage(file); // see Example 7

        });
        function upload(file) {
            var form = new FormData(),
                    xhr = new XMLHttpRequest();

            form.append('image', file);
            xhr.open('post', 'server.php', true);
            xhr.send(form);
        }

        function drawOnCanvas(file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var dataURL = e.target.result,
                        c = document.querySelector('canvas'), // see Example 4
                        ctx = c.getContext('2d'),
                        img = new Image();
               

                img.onload = function () {
                    c.width = img.width;
                    c.height = img.height;
                    ctx.drawImage(img, 0, 0);
                };

                img.src = dataURL;
            };

            reader.readAsDataURL(file);
        }

        function displayAsImage(file) {
            var imgURL = URL.createObjectURL(file),
                    img = document.createElement('img');

            img.onload = function () {
                URL.revokeObjectURL(imgURL);
            };

            img.src = imgURL;
            document.body.appendChild(img);
        }
    });

    /*  $("#MyPhoto").change(function () {
     //alert("im changed");
     bannerImage = document.getElementById('MyPhoto');
     Image = document.getElementById('MyLogo');
     // fullPath = bannerImage.value;
     // filename = fullPath.replace(/^.*[\\\/]/, '');
     bannerImage.type = "image";
     imgData = getBase64Image(bannerImage);
     localStorage.setItem("imgText", $("#text1").val());
     localStorage.setItem("imgData", imgData);
     });
     function getBase64Image(img) {
     var canvas = document.createElement("canvas");
     canvas.width = img.width;
     canvas.height = img.height;
     
     var ctx = canvas.getContext("2d");
     ctx.drawImage(img, 150, 150);
     
     var dataURL = canvas.toDataURL("image/png");
     
     return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
     }*/

</script>
<div class="flex-center position-ref full-height">     
    <div class="content">
        <div class="title m-b-md center-block">
            <img height="90px" src="{{ asset('/bimtractor_logo.jpg') }}" id="MyLogo">   Bimtractor
            <canvas id="mycanvas" name="mycanvas"></canvas>
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
                        <input class=" form-control-file" type="file"  accept="image/*" capture="user" id="MyPhoto" name="MyPhoto">
                    </div>
                    <caption> 


                        <button type="submit" id="SubmitMyPhoto" class="btn btn-link">Store Snapshot</button>                      
                </div>
            </form>
            <a href="../media/show">Show my pic</a>
        </div>
        <footer class="flex-center">
            <p>Powered by<a  href="">Kitji Studios</a></p>
        </footer>
    </div>

</div>   


@endsection
