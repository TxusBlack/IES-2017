@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding: 0px;">
    <div class="parallax">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                <img class="img-responsive" src="/img/logo_ies.png" alt="Logo IES" width="300px" height="100%" style="padding-top: 40px; margin-left: 20px;">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 img_banner">
                <img src="/img/Info.png" alt="IES" class="img-responsive" width="762px" height="295px" style="padding-top: 40px;">
                <a href="https://play.google.com/store/apps/details?id=com.unisangil.ies" target="__blank"><img class="margin-playstore playstore" src="/img/playstore.png" alt="PlayStore" class="img-responsive" width="236px" height="100%" border="none"></a>
            </div>
        </div>
    </div>
</div>

@endsection