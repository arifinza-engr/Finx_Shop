<div class="container-fluid">

    <h3> <i class="fas fa-edit"></i>EDIT DATA USER</h3>



    <?php 

        foreach ($user as $usr) :

    ?>

        <form method="post" action="<?php echo base_url().'admin/data_user/update' ?>"> 

                <div>

                    <label>Nama User</label>

                    <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>"> 

                </div>



                <div>

                    <label>Username</label>

                    <input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">

                    <input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>"> 

                </div>



                <div>

                    <label>Password</label>

                    <input type="text" name="password" class="form-control" value="<?php echo $usr->password ?>"> 

                </div>





                <button type="submit" class="btn btn-primary btm-sm mt-3">Simpan</button>

        </form>

    <?php 

        endforeach;

    ?> 



</div>