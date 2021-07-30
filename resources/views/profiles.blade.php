<h3>Hello WOrld</h3>
<ul>
    @foreach ($data as $item)
        <li> {{$item['title']}} 
        <p>{{$item['body']}}</p>
        </li>
        
    @endforeach
</ul>