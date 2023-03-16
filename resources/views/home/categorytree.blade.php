@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>
        <li>
            @include('home.categorytree',['children' => $subcategory->children])
        </li>

    @else
        <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    @endif
@endforeach
