<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{{--@if(count($products))--}}
{{--@foreach($products as $product)--}}
{{--    {{$product}}--}}

{{--@endforeach--}}

{{--@else--}}
{{--<p>No any products to show</p>--}}
{{--@endif--}}

@forelse($products as $product)
    {{$product}}

@empty
    <p>No any products to show</p>
@endforelse

</body>
</html>
