  @extends('layouts.main')

  @section('content')

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="{{asset('assets/img/intro/11.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h1 class="animated fadeInDown">Teaching Factory</h1>
                <!-- <h3 class="animated fadeInDown">Rekayasa Perangkat Lunak</h3> -->
                <h4 class="animated fadeInUp">Rekayasa Perangkat Lunak</h4>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro/55.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Teaching Factory</span></h2>
                <p class="animated fadeInUp">RPL Studio adalah program yang didukung oleh Djarum Foundation dan mitranya di SMK Raden Umar Said Kudus, Indonesia. Kurikulum program dikembangkan untuk mempersiapkan tenaga kerja yang terampil.

                </p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="carousel-background"><img src="{{asset('assets/img/intro/33.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Teaching Factory</span></h2>
                <p class="animated fadeInUp">Kehadiran kami bertujuan untuk membuat aplikasi, web, game yang dapat membawa kearifan lokal Indonesia kepada perusahaan di seluruh dunia.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
  <!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About us</h2>
            <div class="heading-line"></div>
            <p>Kami adalah grup kecil yang terdiri dari beberapa pengembang. Kami melayani pembuatan situs web untuk semua kebutuhan Anda.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="{{asset('assets/img/potato.jpeg')}}" alt="">
        </div>

        <div class="col-md-6 content">
          <h2>APA ITU JURUSAN RPL?</h2>
        
          <p>
            Tefa marupakan singkatan dari Teaching Factory yang berarti pembelajaran yang berorientasi produksi dan bisnis. Pembelajaran melalui tefa merupakan proses penguasaan keahlian atau keterampilan yang dilaksanakan berdasarkan prosedur dan standar bekerja.

            Tefa sendiri telah diterapkan di kancah pendidikan menengah, khususnya SMK. Penerapan teaching factory di SMK merupakan wujud dari salah satu upaya Direktorat Pembinaan SMK untuk lebih mempererat kerjasama atau sinergi antara SMK dengan industri.
            
            Di SMKN RADEN UMAR SAID KUDUS terutama jurusan RPL juga membuka Teaching Factory Rekayasa Perangkat Lunak. Di antara teaching factory itu, salah satunya adalah menerima jasa pembuatan website,aplikasi, dan game yang dikerjakan oleh para siswa RPL, baik kelas 10, 11, maupun 12 SMKN RADEN UMAR SAID KUDUS.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Detail adalah kunci untuk kesempurnaan</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Platform</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Mobile Apps</h4>
                      <p>Mobile Apps merupakan proses pengembangan aplikasi untuk perangkat genggam seperti PDA, telepon genggam atau asisten digital perusahaan. Aplikasi ini sudah terdapat di telepon pada proses manufaktur atau didownload pelanggan dari toko aplikasi dan juga distribusi perangkat lunak mobile platform lainnya.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Web</h4>
                      <p>Website adalah sebuah kumpulan halaman pada suatu domain di internet  yang dibuat dengan tujuan tertentu dan saling berhubungan serta dapat diakses secara luas melalui halaman depan (home page) menggunakan sebuah browser menggunakan URL website.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="https://images.pexels.com/photos/326424/pexels-photo-326424.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Game</h4>
                      <p>Game Developer merupakan bisnis yang ditujukan untuk menciptakan dan atau mengembangkan Game. Game tersebut dapat dijual melalui internet ataupun melalui penjualan dengan fasilitas CD dan DVD. Selain untuk dijual, Game yang diproduksi dapat dijadikan lahan penyedia iklan. </p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.T0vlEEY6bM094vmI_CUWlQHaF2%26pid%3DApi&f=1" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Works</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12">
          <ul id="og-grid" class="og-grid">
            @foreach ($products as $product)
                
            <li>
              <a href="{{ $product->link }}" data-largesrc="{{ $product->image }}" data-title="{{ $product->name }}" data-description="{{ $product->description }}">
                <img src="{{ $product->icon }}" width="250" height="250"/>
              </a>
            </li>

            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  
<!-- form -->
  <section id="form" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>form</h2>
            <div class="heading-line"></div>
            <p>silakan isi formulir di bawah ini untuk memesan dan kami akan menghubungi Anda dalam waktu 24 jam. </p>
          </div>
        </div>
      </div>

      <div class="row">
        @if (session('status'))
          <strong class="alert alert-success m-2">{{ session('status') }}</strong>
        @endif
          <form action="{{ url ('/order') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required/>
                <!-- <div class="validation"></div> -->
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
                <!-- <div class="validation"></div> -->
                <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="telp" id="telp" placeholder="No.telepon" required/>
                <!-- <div class="validation"></div> -->
                <span class="text-danger">{{ $errors->first('telp') }}</span>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required/>
                <!-- <div class="validation"></div> -->
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="nampro" id="nampro" placeholder="Nama Product" required/>
                <!-- <div class="validation"></div> -->
                <span class="text-danger">{{ $errors->first('nampro') }}</span>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <select class="form-control" name="platform" required>
                  <option value="Application">Application</option>
                  <option value="Website">Website</option>
                  <option value="Game">Game</option>
                </select>
                <div class="validation"></div>
              </div>
            </div>
            
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea type="text" class="form-control" name="description" id="description" placeholder="description" required></textarea>
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-primary"> ORDER </button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  <section id="contact" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              Jalan Sukun Raya 9, Besito,,<br />Gebog, Kudus, Jawa Tengah 59333
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              +62 858 6764 3801<br>

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              tefarpl@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>Kami berada di jejaring sosial

          </h5>
          <ul class="social-network">
            <!-- <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a> 
            </li> -->
            <li><a href="https://t.me/zack412">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-telegram fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <!-- <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li> -->
            <li><a href="https://wa.me/+6285867643801">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  @endsection