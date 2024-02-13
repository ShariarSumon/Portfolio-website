<h1>header pages</h1>
{{--@foreach ($name as $key =>$value)

<p>{{$key}}--{{$value}}</p>
    
@endforeach
--}}
@forelse ($name as $key =>$value)
<p>{{$key}}--{{$value}}</p>
@empty
<p>No value found</p>
@endforelse
