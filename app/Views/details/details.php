<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
<div class="container">
   <div class="row">
     <div class="col">
        <h1 class="mt-7">Details Device</h1>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Device ID</th>
      <th scope="col">Device Defect</th>
      <th scope="col">Device Origin</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>0</td>
      <td>Philifina</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1</td>
      <td>0</td>
      <td>Brunei</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1</td>
      <td>1</td>
      <td>Kamboja</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>0</td>
      <td>0</td>
      <td>China</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>0</td>
      <td>0</td>
      <td>Taiwan</td>
    </tr>
  </tbody>
</table>
     </div>
   </div>
 </div>

<?= $this->endSection();?>