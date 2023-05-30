<footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
    <!-- Grid container -->
    <div class="footer-area-1 p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4 text-center">
            @php $socials=['facebook','twitter','google','linkedin','youtube','instagram']; @endphp
            @foreach ($socials as $social)
                @if($config->$social!=null)
                    <a class="btn btn-outline-light btn-floating m-1" 
                    href="{{$config->$social}}" target="_blank" role="button">
                    <i class="fa fa-{{$social}}"></i></a>
                @endif
            @endforeach
        </section>
        <!-- Section: Social media -->
        <hr class="mb-4" />

                <!-- Copyright -->
                <a class="text-white" href="">© {{date('Y')}} Copyright | {{$config->title}} tüm hakları saklıdır.</a>
                <!-- Copyright -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    </footer>
<script src="{{asset('front/node_modules/@splidejs/splide/dist/js/splide.min.js')}}"></script>

<script>
    var elms = document.getElementsByClassName('splide');

    for (var i = 0; i < elms.length; i++) {
        new Splide(elms[i]).mount();
    }



    splide.mount();
</script>


<!-- JS Links -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
<!-- fancybox -->
<!-- Fancybox js -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="{{asset('front/js/index.js')}}"></script>


<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>

<script src="{{asset('front/js/jquery.sticky.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/588cf9d1e6.js" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f53c8277db.js "></script>




</body>


</html>