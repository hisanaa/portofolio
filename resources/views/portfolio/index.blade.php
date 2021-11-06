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
    <div class="container mx-auto">
        <div class="py-5">
            <p class="text-center text-purple-500">
                <a href="/">Back Home</a>
            </p>
            <h1 class="text-center text-3xl font-bold">All Data Portfolio</h1>
        </div>

        <div>
            <h1>Active Portfolio</h1>
        </div>
        <table class="table-auto w-full text-center">
            <thead>
                <tr class="flex">
                    <th class="w-24 border text-sm border-r-0 border-gray-500 px-4 py-2 text-gray-600">#</th>
                    <th class="w-full border border-r-0 border-gray-500 px-4 py-2 text-gray-600">Project On</th>
                    <th class="w-full border border-r-0 border-gray-500 px-4 py-2 text-gray-600">Tools</th>
                    <th class="w-full border  border-gray-500 px-4 py-2 text-gray-600">Url</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($active as $item)
                <tr class="flex">
                    <td class="w-24 border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $loop->iteration }}</td>
                    <td class="w-full border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $item->project_on }}</td>
                    <td class="w-full border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $item->tools }}</td>
                    <td class="w-full border-t-0 border  border-gray-500 px-4 py-2 text-purple-600">
                        <a target="_blank" href="{{ $item->url }}">
                            {{ Str::replace('https://', ' ', $item->url) }}    
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pt-2">
            <h1>Not Active Portfolio</h1>
        </div>
        <table class="table-auto w-full text-center mb-5">
            <thead>
                <tr class="flex">
                    <th class="w-24 border text-sm border-r-0 border-gray-500 px-4 py-2 text-gray-600">#</th>
                    <th class="w-full border border-r-0 border-gray-500 px-4 py-2 text-gray-600">Project On</th>
                    <th class="w-full border border-r-0 border-gray-500 px-4 py-2 text-gray-600">Tools</th>
                    <th class="w-full border  border-gray-500 px-4 py-2 text-gray-600">Url</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($not_active as $item)
                <tr class="flex">
                    <td class="w-24 border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $loop->iteration }}</td>
                    <td class="w-full border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $item->project_on }}</td>
                    <td class="w-full border-t-0 border border-r-0 border-gray-500 px-4 py-2 text-gray-600">{{ $item->tools }}</td>
                    <td class="w-full border-t-0 border text-purple-600 border-gray-500 px-4 py-2">
                        <a target="_blank" href="{{ $item->url }}">
                            {{ Str::replace('https://', ' ', $item->url) }}    
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>