@php $page = ""; @endphp
@if ($page == "")
    {!! getCrumbs($page) !!}
@else()
{!! getCrumbs($page) !!}
    @endif

