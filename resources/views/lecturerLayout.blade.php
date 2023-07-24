<?php $user = session('user');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <!-- menu -->
    <div id="menu" class="w-full py-3 flex">
        
    </div>
    <div class="w-full h-36 overflow-y-hidden">
        <div class="w-full absolute overflow-y-hidden h-36">
            <img src="{{asset('images/campus.jpg')}}" alt="" class="w-full">
        </div>
        <div class="w-full absolute overflow-y-hidden h-36 bg-black bg-opacity-70 flex justify-center items-center">
            <h1 class="text-center text-2xl text-white font-semibold">@yield('page')</h1>
        </div>
    </div>
    <div id="content" class="p-2">
        @yield('content')
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '.mytextarea',           
    height: 300,

    menubar: false,

    plugins: [

        'advlist autolink lists link image charmap print preview anchor',

        'searchreplace visualblocks code fullscreen',

        'insertdatetime media table paste code help wordcount', 'image'

    ],

    toolbar: 'undo redo | formatselect | ' +

        'bold italic backcolor | alignleft aligncenter ' +

        'alignright alignjustify | bullist numlist outdent indent | ' +

        'removeformat | help',
  });
</script>
</body>
</html>