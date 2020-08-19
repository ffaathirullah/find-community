<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/fahrul.css">
	<link rel="stylesheet" type="text/css" href="css/event.css">
	<title></title>
  <style >
    #navigation{
      padding: 15px;
     background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    }
  </style>
</head>
<body>
<div id="container">
 <div id="navigation">
  <h1>FindCommunity</h1>
  <ul>
    <li><a href="../menu.php">Komunitas</a></li>
    <li><a href="../buat_comu.php">BuatKomunitas</a></li>
    <li><a href="buat.php">Buat Even</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
 </div>
 <div id="background">
   <div id="white-bg">
     <h2>Event <span>  <br> Daftar event Terpopuler</span></h2>
     <p>Daftarnya</p>
   </div>
 </div>

<div id="section">
  <?php 
  include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from event where level='top' LIMIT 2 ");
    while($d = mysqli_fetch_array($data)){
   ?>
  <section id="img">
    <img id="img1" src="<?php echo "file/".$d['nama']; ?>" alt="">
    <h3><?php echo $d['judul'];?></h3>
    <span><?php echo $d['deskripsi'];?></span>
  <p><a href="">link pendaftaran</a></p>
  </section>
  <?php 
}
 ?>

 </div>
  
 <div id="upcoming-event">
  
   <h5>UPCOMING EVENTS</h5>
   <?php 
  include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from event LIMIT 3");
    while($d = mysqli_fetch_array($data)){
   ?>
    <div id="beijing" class="events">
      <h4 class="point"><?php echo $d['tanggal'];?></h4>
      <h4>Siap Sambut 20 Juta Kunjungan  Wisman <span>  Kemenpar Promosikan 100 Calendar of Events  <br>(CoE) Wonderful 2019</span></h4>
      <p>Events</p>
    </div>
    <?php 
    }
     ?>
 </div>
  <div id="section-container">
    <div id="border" class="section-child">
      <img src="evenet1dibawah.png" alt="">
      <h4>Blink Indonesia Siap-Siap  <span>BLACKPINK Akan Konser Januari 2019 Mendatang!</h4>
      	<p><a href="">link pendaftaran</a></p>
    </div>
    <div class="section-child">
      <img src="eventdibawah2.jpg" alt="">
      <h4>Digital Marketing Trend in <span>2019 strategi bisnis dihampir semua jenis usaha. </span></h4>
      <p><a href="">link pendaftaran</a></p>
    </div>
    <div class="section-child">
      <img src="eventdibawah3.jpg" alt="">
      <h4>INDONESIA ICE SKATING OPEN  <span>2019 @ BINTARO JAYA GREETING FROM BX RINK </span></h4>
      <p><a href="">link pendaftaran</a></p>
    </div>
    <div class="section-child">
      <img src="eventdibawah4.jpg" alt="">
      <h4>Festival kemandoran 2 <span> @ Sepanjang Jalan kemadoran 2-3 Februari 2019</span></h4>
     <p><a href="">link pendaftaran</a></p>
    </div>
    <div class="section-child">
      <img src="eventdibawah5.jpg" alt="">
      <h4>Pameran dan Bazaar <br> <span> 28 Jan-1 Feb 2019: Menara Mandiri jangan terlewat </span></h4>
     <p><a href="">link pendaftaran</a></p>
    </div>
    <div class="section-child">
      <img src="eventdibawah6.jpg" alt="">
      <h4>Indonesia Through Their Eyes 2019 <span>Datang dan dengar 22 Asisten Pengajar Bahasa Inggris Fulbright </span></h4>
     <p><a href="">link pendaftaran</a></p>
    </div>
  </div>
  <div id="button-form">
    <form action="">
     <p id="icon"></p>
      <input type="text" placeholder="Search"><input type="submit" value="&gt;">
    </form>
    <div class="calendar" id="calendar-app">
  <div class="calendar--day-view" id="day-view">
    <span class="day-view-exit" id="day-view-exit">&times;</span>
    <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
    <div class="day-view-content">
      <div class="day-highlight">
        You <span class="day-events" id="day-events">had no events for today</span>. &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date>Add a new event?</span>
      </div>
      <div class="day-add-event" id="add-day-event-box" data-active="false">
        <div class="row">
          <div class="half">
            <label class="add-event-label">
               Name of event
              <input type="text" class="add-event-edit add-event-edit--long" placeholder="New event" id="input-add-event-name">
             
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
          Start Time
              <input type="text" class="add-event-edit" placeholder="8:15" id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-start-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
          End Time
              <input type="text" class="add-event-edit" placeholder="9" id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-end-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="half">
            <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save" class="event-btn--save event-btn">save</a>
            <a tabindex="0" id="add-event-cancel" class="event-btn--cancel event-btn">cancel</a>
          </div>
        </div>
        
      </div>
      <div id="day-events-list" class="day-events-list">
        
      </div>
      <div class="day-inspiration-quote" id="inspirational-quote">
        Every child is an artist.  The problem is how to remain an artist once he grows up. –Pablo Picasso
      </div>
    </div>
  </div>
  <div class="calendar--view" id="calendar-view">
    <div class="cview__month">
      <span class="cview__month-last" id="calendar-month-last">Apr</span>
      <span class="cview__month-current" id="calendar-month">May</span>
      <span class="cview__month-next" id="calendar-month-next">Jun</span>
    </div>
    <div class="cview__header">Sun</div>
    <div class="cview__header">Mon</div>
    <div class="cview__header">Tue</div>
    <div class="cview__header">Wed</div>
    <div class="cview__header">Thu</div>
    <div class="cview__header">Fri</div>
    <div class="cview__header">Sat</div>
    <div class="calendar--view" id="dates">
    </div>
  </div>
  <div class="footer">
    <span><span id="footer-date" class="footer__link">Today is May 30</span></span>    
  </div>
</div>
  </div>
</div>
  <footer>
    <div id="footer">
    <span>&copy;FindComunitySinergi    </span>
    <ol>
      <li>Engineering &amp; Data Science</li>
      <li>About</li>
      <li></li>
      <li></li>
      <li></li>
    </ol>
   </div>   
  </footer>
</div>  
<script src="event.js"></script>

</body>
</html>>
