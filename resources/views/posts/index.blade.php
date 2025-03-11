<x-app-layout>

    <ul>
        <h1>Listado de posts</h1>

        <a href="{{route('posts.create')}}">Crear un post</a>
        
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}

</x-app-layout>
