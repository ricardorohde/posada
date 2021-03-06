<section class="admin">
    <h2>MODIFICAR SECCIONES</h2>
    <article>
    <?= form_open('admin/foros/modificar_seccion', array('id' => 'formadmin')) ?>
        <?= validation_errors() ?>
        <label for="seccion">Elige la sección a modificar:</label>
        <select name="seccion" id="seccion">
            <option>Elegir...</option>
            <?php foreach ($secciones as $seccion): ?>
                <option value="<?= $seccion['id'] ?>"><?= $seccion['titulo'] ?></option>
            <?php endforeach ?>
        </select>
        <!-- RECUPERAR NOMBRE Y DEDSCRIPCION CON AJAX -->
        <label for="nombre">Nombre de la sección:</label><input type="text" name="nombre" value="" id="nombre"/>
        <label for="descripcion">Descripción:</label><textarea name="descripcion" id="descripcion" rows="8" cols="40"></textarea>
        <input type="hidden" value="" id="id" />
        <input type="submit" name="enviar" value="Modificar sección" id="enviar"/>
    <?= form_close() ?></article>
</section>