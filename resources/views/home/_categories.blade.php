<!-- Categories Section Begin -->
<section class="categories" style="margin-top: 4rem;margin-bottom: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Doktorlarımız</h2>
                </div>
            </div>
            <div class="categories__slider owl-carousel">


                @foreach($doctors as $dr)
                    @if($dr->role->pluck('name')->contains('doctor'))
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($dr->profile_photo_path)}}">
                                <h5><a href="#">{{$dr->name}}</a></h5>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
