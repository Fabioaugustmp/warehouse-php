<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= !$isUpdate ? 'Cadastrar Novo' : 'Atualizar' ?> Produto</h1>
        <a href="/product" class="d-none d-sm-inline-block btn btn-outline-primary shadow-sm"><i class="fas fa-list"></i> Produtos</a>
    </div>
    <?php
    include(TEMPLATE_PATH . '/messages.php');
    ?>

    <div class="row">
        <form class="row g-3" action="#" method="post">
            <div class="col-md-6">
                <label for="sku" class="form-label">Código</label>
                <input type="text" class="form-control" id="sku" name="sku" value="<?= isset($sku) ? $sku : null ?>" required>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div> -->
                <div class="invalid-feedback">
                    <?= $errors['sku'] ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($nome) ? $nome : null ?>" required>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div> -->
            </div>
            <div class="col-md-4">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor" value="<?= isset($valor) ? $valor : null ?>" required>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div> -->
            </div>
            <div class="col-md-4">
                <label for="estilos" class="form-label">Tipo</label>

                <select class="form-control" id="estilos" name="estilo" value="<?= isset($estilo) ? $estilo : null ?>" required>
                    <option>Unidade</option>
                    <option>Caixa</option>
                    <option>Container</option>
                    <option>Peça</option>
                    <option>Outros</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="qtd" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="qtd" name="estoque" value="<?= isset($estoque) ? $estoque : null ?>" required>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div> -->
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" rows="3" name="description"><?= isset($description) ? $description : null ?></textarea>
                <!-- <div class="valid-feedback">
                    Looks good!
                </div> -->
            </div>

            <div class="col-12 mt-4">
                <button class="btn <?= !$isUpdate ? 'btn-outline-primary' : 'btn-outline-success' ?>" 
                type="submit"><?= !$isUpdate ? 'Cadastrar' : 'Atualizar' ?></button>
            </div>
        </form>
    </div>


</div>
<!-- /.container-fluid -->