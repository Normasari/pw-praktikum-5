<?= $this->extend('layout/template');?>

<?= $this->section('content');?>
 <div class="container">
   <div class="row">
     <div class="col">
         <h2>Tertarik untuk bergabung dengan kami?</h2>
         <h3>Silakan hubungi kami melalui</h3>
         <?php foreach($alamat as $a) :?>
            <ul>
                <li><?= $a['Instagram']; ?></li>
                <li><?=$a['Whatsapp']; ?></li>
                <li><?=$a['Line']; ?></li>
                    </ul>
        <?php endforeach;?>
    </div>
</div>
</div>

<?= $this->endSection();?>