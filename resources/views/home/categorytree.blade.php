<ul class="category__menu__dropdown">
@foreach($children as $subcategory)
            <li><a href="{{route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a></li>
@endforeach
</ul>
