<div class="container-fluid">

<br>
<h4>Detail Invoice</h4>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Jumlah Pesanan</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Sub_total</th>
         
    </tr>
  </thead>

  <tbody>
  <?php 
 $no=1;
 foreach($pesanan as $psn):
 ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $psn->nama_brg ?></td>
      <td><?php echo $psn->jumlah ?></td>
      <td><?php echo $psn->harga ?></td>
      <td><?php echo '' ;?></td>
          </tr>
    <?php endforeach; ?>
    <tbody>
</table>

</div>
