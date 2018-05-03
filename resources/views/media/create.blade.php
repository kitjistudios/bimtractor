
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $("#MyImage").hide();
        $("#MyPhoto").hide();
        $("#SubmitMyPhoto").hide();
        $("#CancelMyPhoto").hide();
        $("#Description").hide();

        $("#MyPhoto").change(function () {
            var input = document.querySelector('input[type=file]'); // see Example 4
            var file = input.files[0];
            //upload(file);
            //drawOnCanvas(file);   // see Example 6
            displayAsImage(file); // see Example 7

        });
        $("#CamIcon").click(function () {
            //alert('hello');
            $("#MyPhoto").trigger('click');
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
            $("#PicFrame").append(img);
        }

        function displayAsImage(file) {
            var imgURL = URL.createObjectURL(file),
                    //img = document.createElement('img');
                    img = document.getElementById("MyImage");
            img.onload = function () {
                URL.revokeObjectURL(imgURL);
            };

            img.src = imgURL;
            img.height = 200;
            img.width = 200;
            $("#PicFrame").append(img);
            $("#MyImage").show();
            $("#Description").show();
            $("#SubmitMyPhoto").show();
            $("#CancelMyPhoto").show();
            $("#Logo").hide();
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
@extends('layouts.app')
@section('content')    
<div class="container-fluid">
    <div class="content">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <div class="form-control" >

                    <div class="form-row">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6">
                            <form action="../media/store" method="POST" id="PhotoForm" >
                                @csrf 
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="row center" id="PicFrame">
                                            <img class="center" alt="MyImage" id="MyImage">
                                        </div>
                                        <img src="{{asset('bimtractor_logo.jpg')}}" alt="{{ config('app.name') }}" height="150" id="Logo" name="Logo" > 
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>    
                                <div class="row mt-3">
                                    <div class="col-sm-5"><button type="submit" id="SubmitMyPhoto" class="btn btn-light center text-uppercase" style="font-size: large;"><i class="fa fa-thumbs-up"></i>Keep it</button> </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-5"><button type="submit" id="CancelMyPhoto" class="btn btn-light center text-uppercase" style="font-size: large;"><i class="fa fa-thumbs-down"></i>Toss it</button> </div>
                                </div>                           
                        </div>
                        <div class="col-sm-3">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">

            </div>
        </div> 

        <div class="row mt-2">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">

                <div class="form-control">
                    <button class="btn btn-light center text-uppercase center"><i class="fa fa-camera" style="color: #000000; font-size: 30px" id="CamIcon"></i></button>
                    <input class=" form-control-file" type="file"  accept="audio/*,video/*,image/*" capture="user" id="MyPhoto" name="MyPhoto"> 
                    <div class="form-row details">
                        <input class="form-control" type="text" id="Description" name="Description" autocomplete="off" placeholder="Tell us about your pic">                        
                    </div> 
                   </form>
                </div>


            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
</div> 
@endsection
