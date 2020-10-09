<?php
$merk = [
    ["Speda Montor", "Hayabusa", 8000000000,"hayabusa.jpeg"],
    ["Mobil", "Ranger", 10000000000,"ranger.jpg"],
    ["Speda Montor", "CBR 600 f4i", 6000000000,"cbr.jpg"],
    ["Mobil", "Sport",10000000000,"sport.png"],
    ["Speda Montor", "Kawasaki H2",15000000000,"kawasaki.jpg"],
    ["Mobil", "Pajero", 10000000000,"pajero.jpg"],
    ["Speda Montor", "RX-KING",15000000000,"king.jpg"],
    ["Mobil", "Merchendes", 10000000000,"mc.jpg"],
    ["Speda Montor", "GL PRO",15000000000,"gl.jpg"],
    ["Mobil", "Sport", 10000000000,"mo.jpg"],
    ["Speda Montor", "CB",15000000000,"cb.png"],
    ["Mobil", "Sport",10000000000,"mob.jpg"],
    ["Speda Montor", "CB",15000000000,"c.jpg"],
    ["Mobil", "Sport",10000000000,"mobi.jpg"],
    ["Speda Montor", "custom",15000000000,"cu.png"],
    ["Mobil", "Sport",10000000000,"mobil.jpg"],
    ["Speda Montor", "Custom",15000000000,"cus.jpg"],
    ["Mobil", "Kijang",10000000000,"kijang.jpg"],
    ["Speda Montor", "Choper",15000000000,"custom.jpeg"]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($merk as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <form action="index.php" method="post">

        <select name="filter">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
    </form>
    <table class="table">
      <div class="container">
        <div class="col">
  <thead class="thead-dark">
    <tr>
      <th scope="col">GAMBAR</th>
      <th scope="col">TYPE</th>
      <th scope="col">MEREK</th>
      <th scope="col">HARGA</th>

    </tr>
  </thead>
        </div>
      </div>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody>
    <tr>
      <td><b><img src="gambar/<?php echo $value[3]; ?>" alt="" width="200px"  height="200px"></b></td>
      <td><b><?php echo $value[0]; ?></b></td>
      <td><b><?php echo $value[1]; ?></b></td>
      <td><b><?php echo $value[2]; ?></b></td>
      
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>

    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>



