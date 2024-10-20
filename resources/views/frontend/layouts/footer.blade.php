{{-- <div class="container footer-map mt-0">
    <div class="row">
        <div class="large-map">
            @if (!empty($getcontact))
            <iframe src="{{$getcontact->map}}" frameborder="0" height="240px"
width="100%">{{$getcontact->map}}</iframe>
@endif
</div>
</div>
</div> --}}
<footer id="mu-footer">
    <div class="container">
        <div class="mu-footer-area">
            <div class="row">
                <div class="col-md-6">
                    <div class="mu-footer-left text-white">
                        <p class="mu-copy-right ">&copy; <span id="currentYear"></span>  Copyright <a rel="nofollow" href="#"
                                    class="ghumgham text-white">Ghumgham Nepal</a>. All
                                right reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mu-footer-right">
                        <div>
                            <p class="text text-white">Address: Chandragiri-6,Checkpost <br>Kathmandu,Nepal.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentYear = new Date().getFullYear();
        document.getElementById("currentYear").textContent = currentYear;
    });
</script>
