<ul class="category__menu__dropdown">
@foreach($children as $subcategory)
            <li><a href="#">{{$subcategory->title}}</a></li>
@endforeach
</ul>
