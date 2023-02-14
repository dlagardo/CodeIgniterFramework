   <?=$cabecera ?>
   <a class="btn btn-success" href="<?=base_url('crear')?>">Crear un Libro</a>
   <br/>
   <br/>
   <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($libros as $libro){ ?>
                <tr class="">
                    <td><?php echo $libro['id']; ?></td>
                   
                    <td>
                    <img class ="img-thumbnail" 
                    src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" width="100" >
                        
                    <?php $libro['imagen'];?>
                
                    </td>
                    <td><?php echo $libro['nombre']; ?></td>
                    <td>
                        <a href="<?= base_url('editar/'.$libro['id'])?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?= base_url('borrar/'.$libro['id'])?>" class="btn btn-danger" type="button">Borrar</a>
                       
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
        <?=$pie?>
