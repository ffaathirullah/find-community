 <?php 
  include "koneksi.php";
            $data = mysqli_query($koneksi, "select a.firstname, a.id , b.comment, b.id_user from user a , communitas u,comment b WHERE a.id = b.id_user AND u.id = b.id_communitas AND b.id_communitas = 13'
");
            while ($d = mysqli_fetch_assoc($data)) {
             ?>
            
            <div class="col-9 mt-3 left">
                <h5> <u><?php echo $d['firstname']; ?></u> </h5>
                <p><?php echo $d['comment']; ?></p>
            </div>
          
            <?php 
          }
             ?>