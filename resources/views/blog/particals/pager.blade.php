<ul class="pager">
    <li style="{{$blogs->currentPage() == 1 ? 'display: none' : '' }}">
        <a href="{{ $blogs->previousPageUrl() }}">Previous</a>
    </li>

    <li style="{{$blogs->hasMorePages() ? '' : 'display: none'}}">
        <a href=" {{ $blogs->nextPageUrl() }}">Next</a>
    </li>
</ul>