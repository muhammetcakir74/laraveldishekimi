
@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist();
    $setting = \App\Http\Controllers\HomeController::getSettings();
@endphp



<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all" style="background-color: #1c345d;">
                        <i class="fa fa-bars"></i>
                        <span>Tedavilerimiz</span>
                    </div>
                    <nav class="category__menu">
                        <ul class="category_b">
                            @foreach($parentCategories as $rs)
                                <li class="category_a">
                                    <a href="#">{{$rs->title}}</a>

                                    @if(count($rs->children))
                                        @include('home.categorytree',['children' => $rs->children])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form" style="margin-left: 70px;">
                        <form action="{{route('gettreatment')}}" method="post">
                            @csrf
                            @livewire('search')
                            <button type="submit" class="site-btn" style="background-color: #1c345d;">ARA</button>
                        </form>

                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>{{$setting->phone}}</h5>
                            <span>7/24 Arayabilirsiniz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
