@if ($message = \Illuminate\Support\Facades\Session::get('succes'))
    <div class="alert alert-success alert-block" style="position: fixed;top:5rem;right: 3rem;">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = \Illuminate\Support\Facades\Session::get('error'))
    <div class="alert alert-danger alert-block" style="position: fixed;top:5rem;right: 3rem;">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = \Illuminate\Support\Facades\Session::get('warning'))
    <div class="alert alert-warning alert-block" style="position: fixed;top:5rem;right: 3rem;">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = \Illuminate\Support\Facades\Session::get('info'))
    <div class="alert alert-info alert-block" style="position: fixed;top:5rem;right: 3rem;">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif
