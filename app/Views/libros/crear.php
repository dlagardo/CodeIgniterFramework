<?= $cabecera ?>

<div class="card">

    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form action="<?=site_url('/guardar') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre :</label>
                <input value="<?=old('nombre') ?>" type="text" name="nombre" id="nombre" class="form-control">

            </div>
            <div class="form-group">
                <label for="imagen" class="form-label">Imagen :</label>
                <input type="file" class="form-control-file" name="imagen" id="imagen">

            </div>
            <button name="" id="" class="btn btn-success" type="submit">Guardar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
        </form>
        </p>
    </div>
</div>


<?= $pie ?>