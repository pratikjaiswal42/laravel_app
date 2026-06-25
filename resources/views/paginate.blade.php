@foreach ($file as $post)
    <p>{{$post->title}}</p>
@endforeach

{{ $file->links() }}