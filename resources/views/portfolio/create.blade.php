<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="font-poppins bg-custom-gray">
    <div class="w-1/2 mx-auto py-5">
        <h5 class="text-2xl">Add Data Portfolio</h5>
        <form action="/portfolio" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Project On</label>
                <input type="text" name="project_on" class="w-full h-10 border px-2 rounded">
            </div>
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Tools</label>
                <input type="text" name="tools" class="w-full h-10 border px-2 rounded">
            </div>
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Url</label>
                <input type="text" name="url" class="w-full h-10 border px-2 rounded">
            </div>
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Status</label>
                <select name="status" class="w-full h-10 border px-2 rounded" id="">
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>
                </select>
            </div>
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Featured</label>
                <select name="featured" class="w-full h-10 border px-2 rounded" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="flex flex-col justify-center mb-1">
                <label class="pb-1" for="">Image Thumbnail</label>
                <input type="file" name="thumbnail" class="w-full h-10 px-2 rounded">
            </div>
            
            <button class="h-10 text-white bg-blue-700 text-center w-full rounded">Submit</button>
        </form>
    </div>
</body>
</html>