  <footer id="footer" class="my-5">
    <div class="container py-5 my-5">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="logo">
            <p class="blog-paragraph fs-6 mt-3">Destinasi utama untuk koleksi perhiasan eksklusif yang memadukan keanggunan abadi dengan desain modern. Sempurnakan setiap momen berharga Anda bersama Juwellaa.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled gap-2">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Tautan Cepat</h3>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="{{ url('/') }}" class="nav-link">Beranda</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/about') }}" class="nav-link">Tentang Kami</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/offer') }}" class="nav-link">Penawaran</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/services') }}" class="nav-link">Layanan</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/contact') }}" class="nav-link">Hubungi Kami</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Pusat Bantuan</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="{{ url('/faqs') }}" class="nav-link">Tanya Jawab</a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('/payment') }}" class="nav-link">Pembayaran</a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('/returns-refunds') }}" class="nav-link">Pengembalian & Refun</a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('/checkout') }}" class="nav-link">Selesaikan Belanja</a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('/delivery-information') }}" class="nav-link">Informasi Pengiriman</a>
                </li>
              </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div>
            <h3>Buletin Kami</h3>
            <p class="blog-paragraph fs-6">Berlangganan buletin kami untuk mendapatkan pembaruan tentang koleksi terbaru dan penawaran eksklusif.</p>
            <div class="search-bar border rounded-pill border-dark-subtle px-2">
              <form class="text-center d-flex align-items-center" action="" method="">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Masukkan email Anda di sini" />
                <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>