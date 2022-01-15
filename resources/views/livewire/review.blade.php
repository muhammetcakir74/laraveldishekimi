<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif


        <!-- Contact Form Begin -->
        <div class="contact-form spad" style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__title">
                            <h2>Yorum yaz</h2>
                        </div>
                    </div>
                </div>
                <form wire:submit.prevent="store">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                            <input type="text" placeholder="Konu" wire:model="subject">
                        </div>
                        <div class="col-lg-12">
                            @error('review') <span class="text-danger">{{$message}}</span>@enderror
                            <textarea placeholder="Yorumunuz" wire:model="review"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <span style="float: left;margin-right: 15px;padding-top: 0.6rem;">PUAN :</span>
                                <div align="center" style="display: inline-flex;float: left;">
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" wire:model="rate"  value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                        <input type="radio" id="star4" name="rating" wire:model="rate"  value="4" /><label for="star4" title="Rocks!">4 stars</label>
                                        <input type="radio" id="star3" name="rating" wire:model="rate"  value="3" /><label for="star3" title="Rocks!">3 stars</label>
                                        <input type="radio" id="star2" name="rating" wire:model="rate"  value="2" /><label for="star2" title="Rocks!">2 stars</label>
                                        <input type="radio" id="star1" name="rating" wire:model="rate"  value="1" /><label for="star1" title="Rocks!">1 stars</label>
                                    </fieldset>
                                </div>
                            @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                            <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
                        </div>
                        @auth
                        <div class="col-lg-12 text-center" style="margin-top: 2rem;">
                            <button type="submit" class="site-btn">GÖNDER</button>
                        </div>
                        @else
                            <div class="col-lg-12 text-center" style="margin-top: 2rem;">
                                <a href="/login" class="primary-btn">YORUM YAPMAK İÇİN GİRİŞ YAPINIZ</a>
                            </div>
                        @endauth

                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Form End -->


</div>
