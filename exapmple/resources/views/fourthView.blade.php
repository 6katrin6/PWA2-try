<h1>hodnota premennej: {{$variable}}</h1>
<p>vypisanie pola</p>

<ul>
@foreach ($array as $key => $value)
    <li>{{$key}}:{{$value}}</li>
@endforeach
</ul>