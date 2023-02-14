<?= $cabecera ?>

<div class="card">

    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form action="<?= site_url('/actualizar') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $libro['id'] ?>">
            <div class="form-group">
                <label for="nombre">Nombre :</label>
                <input value="<?= $libro['nombre'] ?>" type="text" name="nombre" id="nombre" class="form-control" >

            </div>
            <div class="form-group">
                <label for="imagen" class="form-label">Imagen :</label>
                <br />
                <img class="img-thumbnail" src="<?= base_url() ?>/uploads/<?= $libro['imagen']; ?>" width="100">

                <?php $libro['imagen']; ?>
                <br />
                <br/>
                <input type="file" class="form-control-file" name="imagen" id="imagen">
            </div>
            <button name="" id="" class="btn btn-success" type="submit">Actualizar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
        </form>

        </p>
    </div>
</div>
<?= $pie ?>