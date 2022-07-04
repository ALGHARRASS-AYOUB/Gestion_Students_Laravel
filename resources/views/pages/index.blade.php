{{-- <a href={{route('pages.contact')}}>contact-page</a> --}}

{{-- <a href={{ route('pages.show', ['id'=>666]) }}> show info </a> --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Document</title>
    </head>
    <body>
        <h1 class="text-3xl p-9 ">test of TAILWINDCSS</h1>
        <h2 class="p-5 font-bold">hello , this is the index page </h2>
        {{-- {{ $res->title }} --}}
        <?php //echo htmlentities($res->title) ?>
        {{-- aid to protect from malicious script insertion --}}

        {{-- {{dump($res);}} --}}

        {{-- @if (count($res) < 100)
            dd($res);
        @elseif (count($res) === 50)
        <h1 class="text-3xl p-9 ">50 rgistration has been set </h1>
        @else
            <h1 class="text-3xl p-9"> no post </h1>
        @endif --}}


        {{-- @unless (condition) is like if(NOT condition) --}}

        {{-- @endunless --}}

    {{-- <ol>
        @forelse ($res as $item)
        <li>{{ $item->title }}</li>
        @empty
        <h1>NO POST IS SET</h1>
        @endforelse
    </ol> --}}





    <ol>
        @forelse ($res as $item)
        {{-- with the hidden propreities: $loop->[index,iteration,count,first,last,depth,parent] --}}
        <li>{{ $loop->iteration }}</li>
        @empty
        <h1>NO POST IS SET</h1>
        @endforelse
    </ol>

</body>
</html>
