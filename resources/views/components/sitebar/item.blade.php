
{{ $child_category->title }}
@if ($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('child_category', ['child_category' => $childCategory])
    @endforeach
@endif
