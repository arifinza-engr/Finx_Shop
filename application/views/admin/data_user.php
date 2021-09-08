

<div class="container-fluid">



<table class="table table-bordered">

    <tr>

        <th>NO</th>

        <th>NAMA USER</th>

        <th>USERNAME</th>

        <th>PASSWORD</th>

        <th colspan="3">AKSI</th>

    </tr>



    <?php 

        $no = 1 ;

        foreach($user as $usr) : 

    ?>  

        <tr>

            <td><?php echo $no++ ?></td>

            <td><?php echo $usr->nama ?></td>

            <td><?php echo $usr->username ?></td>

            <td><?php echo $usr->password ?></td>

            <td>

                <?php echo anchor('admin/data_user/edit/'.$usr->id ,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"> </i> </div>' )?>

            </td>

            <td>

                <?php echo anchor('admin/data_user/hapus/' .$usr->id , '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"> </i> </div>') ?>

            </td>



        </tr>

    <?php endforeach ;?> 

</table>

</div>



<!-- Modal -->

<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

  <div class="modal-header">

    <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

      <span aria-hidden="true">&times;</span>

    </button>

  </div>

  <div class="modal-body">

    <form action="<?php echo base_url().'admin/data_user/tambah_aksi'?>" method="post" enctype="multipart/form-data">

        <div class ="form-group">

                <label>Nama Konsumen</label>

                <input type="text" name="nama" class="form-control">

        </div>



        <div class ="form-group">

                <label>Username</label>

                <input type="text" name="username" class="form-control">

        </div>



    



        <div class ="form-group">

                <label>Password</label>

                <input type="text" name="password" class="form-control">

        </div>

     

  </div>

  <div class="modal-footer">

    <button type="button" class="btn btn-danger" data-dismiss="modal">tutup</button>

    <button type="submit" class="btn btn-primary">Simpan</button>

  </div>



  </form>



</div>

</div>

</div>