<!-- Footer Section Begin -->
<footer class="footer spad" style="background-color: #1c345d;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="{{asset('assets')}}/img/logo.png" alt="" style="border-radius: 10px;"></a>
                    </div>
                    <ul>
                        <li><b style="color: white;">Adres : </b><span style="color: white;">{{$setting->address}}</span></li>
                        <li><b style="color: white;">Telefon : </b><span style="color: white;">{{$setting->phone}}</span></li>
                        <li><b style="color: white;">E-mail : </b><span style="color: white;">{{$setting->email}}</span></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{$setting->company}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="{{asset('assets')}}/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
@livewireScripts
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/js/mixitup.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
