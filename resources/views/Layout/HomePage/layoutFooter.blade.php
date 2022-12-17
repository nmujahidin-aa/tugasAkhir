<footer class="bg-light border-top pt-5 pb-2">
  <div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-3 text-center text-lg-start" style="margin-bottom: 40px;">
            <img class="mb-2" src="{{URL::to('/')}}/image/logo.png" alt="" height="40">
            <br>
            <a style="margin-left: 3px; margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-facebook fs-5"></i></a>
            <a style="margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-instagram fs-5"></i></a>
            <a style="margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-twitter fs-5"></i></a>
            <br>
            <small>Email: </small><a class="text-decoration-none link-dark" target="_blank" href="">rumahpustaka@gmail.com</a>
          </div>
          <div class="col-4 col-md-4 col-lg-3">
              <p><small>PERUSAHAAN</small></p>
              <ul class="list-unstyled">
                  <li><a class="text-decoration-none link-dark" href="{{route('about.index')}} ">Tentang Rumah Pustaka</a></li>
                  <li><a class="text-decoration-none link-dark" href="{{route('team.index')}} ">Team</a></li>
              </ul>
          </div>
          <div class="col-4 col-md-4 col-lg-3">
            <p><small>BANTUAN</small></p>
              <ul class="list-unstyled text-small">
                  <li><a class="text-decoration-none link-dark" href="{{route('contact.index')}} ">Hubungi Kami</a></li>
                  <li><a class="text-decoration-none link-dark" href="{{route('faq.index')}} ">FAQ</a></li>
              </ul>
          </div>
          <div class="col-4 col-md-4 col-lg-3">
              <p><small>LEGAL</small></p>
              <ul class="list-unstyled text-small">
                  <li><a class="text-decoration-none link-dark" href="{{route('ketentuan.index')}} ">Ketentuan</a></li>
                  <li><a class="text-decoration-none link-dark" href="{{route('kebijakan.index')}} ">Kebijakan Privasi</a></li>
              </ul>
          </div>
    </div>
        <div class="border-top pt-2 pb-2">
            <small class="mt-3 text-muted">Hak Cipta &copy 2022 Rumah Pustaka. Seluruh hak dilindungi undang-undang.</small>
        </div>
    </div>
  </div>   
</footer>