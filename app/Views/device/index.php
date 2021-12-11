<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="container">
   <div class="row">
     <div class="col">
        <h1 class="mt-7">Daftar Device</h1>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Brand</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>Komputer</td>
      <td>Lenovo</td>
      <td>5</td>
      <td>On</td>
      <td>
      <a href="" class="btn btn-success">Details</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2.</th>
      <td>Laptop</td>
      <td>Asus</td>
      <td>10</td>
      <td>On</td>
      <td>
      <a href="" class="btn btn-success">Details</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3.</th>
      <td>Printer</td>
      <td>Canon</td>
      <td>4</td>
      <td>On</td>
      <td>
      <a href="" class="btn btn-success">Details</a>
      </td>
    </tr>
    <tr>
      <th scope="row">4.</th>
      <td>CCTV</td>
      <td>Sharp</td>
      <td>15</td>
      <td>On</td>
      <td>
      <a href="" class="btn btn-success">Details</a>
      </td>
    </tr>
    <tr>
      <th scope="row">5.</th>
      <td>Wifi</td>
      <td>Huawei</td>
      <td>5</td>
      <td>On</td>
      <td>
      <a href="" class="btn btn-success">Details</a>
      </td>
    </tr>
  </tbody>
</table>
     </div>
   </div>
 </div>

<?= $this->endSection();?>