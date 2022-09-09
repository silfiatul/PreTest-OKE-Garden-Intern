@extends('layouts.app')

@section('content')

<!-- Page Content-->
<div class="container px-4 px-lg-5">
  <div class="title-head">
  <h1>Konsultasi Teman</h1>
  <p>klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
  </div>  
  <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7">
        <div class="light">
          <div class="calendar">
                <div class="calendar-header">
                    <span class="month-picker" id="month-picker">February</span>
                    <div class="year-picker">
                        <span class="year-change" id="prev-year">
                            <pre><</pre>
                        </span>
                        <span id="year">2021</span>
                        <span class="year-change" id="next-year">
                            <pre>></pre>
                        </span>
                    </div>
                </div>
                <div class="calendar-body">
                    <div class="calendar-week-day">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="calendar-days"></div>
                </div>
                <div class="month-list"></div>
            </div>
        </div>
        </div>
            <div class="col-lg-5">
              <div class="time">
                <div class="title-time">
                <h3 class="font-weight-light day">Friday</h3>
                <p>September 9, 2022</p>
                </div>
                <h5 class="font-weight-light choose-time">Pilih Waktu</h5>
                <p>Durasi Konsultasi 30 Menit</p>
                <table class="durasi">
                  <tr>
                    <td><a class="btn btn-primary" href="#!">09.00</a></td>
                    <td><a class="btn btn-primary" href="#!">13.00</a></td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-primary" href="#!">10.00</a></td>
                    <td><a class="btn btn-primary" href="#!">14.00</a></td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-primary" href="#!">11.00</a></td>
                    <td><a class="btn btn-primary" href="#!">15.00</a></td>
                  </tr>
                  <tr>
                    <td><a class="btn btn-primary" href="#!">12.00</a></td>
                    <td><a class="btn btn-primary" href="#!">16.00</a></td>
                  </tr>
                </table>
              </div>
                
            </div>
        </div>
  <!-- main -->
  <div class="cont-main">
    <div class="data-diri">
      <h3>Informasi Data Diri</h3>
      <table class="info-diri">
        <tr>
          <td>Nama Lengkap</td>
          <td>No HP</td>
        </tr>
        <tr>
          <td><input class="diri" type="text" placeholder="Yudha Wahyu"></td>
          <td><input class="diri" type="text" placeholder="+62 852 2324 4747"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="Alamat" id="" cols="50" rows="5"></textarea>
        </tr>
      </table>
    </div>
    <div class="data-taman">
    <h3>Informasi Konsultasi Taman</h3>
    <h5>Lahan Taman</h5>
    <p>Pilih jumlah lahan taman yang akan dibuat</p>
    <tr>
      <td><a class="btn btn-primary" href="#!">1 Lahan Taman</a></td>
      <td><a class="btn btn-primary" href="#!">2 Lahan Taman</a></td>
      <td><a class="btn btn-primary" href="#!">Lebih dari 2 Lahan Taman</a></td>
    </tr>
    <br>
    <br>
    <h5>Tema Taman</h5>
    <p>Pilih tema taman yang akan dibuat</p>
    <div class="catatan">
        <p><strong>Catatan : </strong> Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahapan ini, <br> konsultan kami akan memberikan rekomendasi terbaik untuk taman anda</p>
    </div>

        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><img src="{{ url('https://images.pexels.com/photos/827518/pexels-photo-827518.jpeg?auto=compress&cs=tinysrgb&w=400')}}" alt="" style="width: 100%;"></h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pilih</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><img src="{{ url('https://images.pexels.com/photos/2826787/pexels-photo-2826787.jpeg?auto=compress&cs=tinysrgb&w=400')}}" alt="" style="width: 100%;"></h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pilih</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><img src="{{ url('https://images.pexels.com/photos/2832040/pexels-photo-2832040.jpeg?auto=compress&cs=tinysrgb&w=400')}}" alt="" style="width: 100%;"></h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pilih</a></div>
                </div>
            </div>
        </div>
      <h5>Estimasi Ukuran Taman</h5>
      <tr>
        <td><a class="btn btn-primary" href="#!"><10m2</a></td>
        <td><a class="btn btn-primary" href="#!">11-20m2</a></td>
        <td><a class="btn btn-primary" href="#!">21-30m2</a></td>
        <td><a class="btn btn-primary" href="#!">31-40m2</a></td>
        <td><a class="btn btn-primary" href="#!">41-50m2</a></td>
        <td><a class="btn btn-primary" href="#!">51-60m2</a></td>
        <td><a class="btn btn-primary" href="#!">>100m2</a></td>
      </tr>

      
        </div>
        <tr>
          <td><button type="submit" class="submit-btn setuju">Oke</button></td>
          <td><button type="submit" class="submit-btn batal">Batal</button></td>
        </tr>
        </div>
</div>


@endsection
