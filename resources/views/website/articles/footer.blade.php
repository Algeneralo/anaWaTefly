<footer>
    <div class="container">
        <div class="row footer-items justify-content-center">
            <div class="footer-item col-md-3 text-center">
                <div class="row">
                    <div class="col-1 align-self-center">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-10">
                        <span dir="ltr">{{$config->phone}}</span>
                        <br>
                        <span dir="ltr">{{$config->telephone}}</span>
                    </div>
                </div>
            </div>
            <div class="footer-item col-md-3 text-center align-self-center">
                <div class="row">
                    <div class="col-1">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="col-10">
                        iandmychild1@hotmail.com
                    </div>
                </div>
            </div>
            <div class="footer-item col-md-3 text-center ml-5">
                <div class="row">
                    <div class="col-1 align-self-center">
                        <i class="fas fa-location-arrow"></i>
                    </div>
                    <div class="col-10">
                        @if(App::getLocale()=="ar")
                            {{$config->location_ar}}
                        @else
                            {{$config->location_en}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr id="fade-line">
        <div class="row">
            <div class="col-12 text-center mt-3 mb-3">
                <a href="{{$config->facebook??"#"}}" target="_blank">
                    <i class="fab fa-facebook-square fa-2x mr-md-5 ml-2"></i>
                </a>
                <a href="{{$config->twitter??"#"}}" target="_blank">
                    <i class="fab fa-twitter fa-2x mr-md-5 ml-md-5 ml-2"></i>
                </a>
                <a href="{{$config->instagram??"#"}}" target="_blank">
                    <i class="fab fa-instagram fa-2x mr-md-5 ml-md-5 ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <hr id="full-line">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3 mb-0">
                Copyright &copy; 2019 All Rights Reserved.Powered by SkylineLeaders
            </div>
        </div>
    </div>
</footer>