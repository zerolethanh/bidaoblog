@can('edit',$blog)
    <a href="{{ url('/blog/edit/'.$blog->id) }}">Edit
    </a>
@endcan