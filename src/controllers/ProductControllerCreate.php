<?php

session_start();

$exception = null;
$userData = [];
$isUpdate = false;

if (count($_POST) === 0 && isset($_GET['update'])) {
    $product = findProduct($_GET['update']);
    $userData = $product->getValues();
    $isUpdate = true;

} elseif (count($_POST) > 0) {
    try {
        $productId = $_GET['update'];
        $product = new Product($_POST);
        
        // Coloca o valor do produto recuperado.
        $product->id = $productId;

        if ($product->id) {
            $isUpdate = true;
            //Autalizando o produto no banco de dados;
            $product->update();

            addPrimaryMessage('Produto atualizado com sucesso!');
            header('Location: /product');
            exit();
        } else {
            // Inserindo o produto no banco de dados;        
            $product->insert();
            addSuccessMessage('Produto cadastrado com sucesso!');
            header('Location: /product');
            exit();
        }

        $_POST = [];
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
} elseif (isset($_GET['delete'])) {
    $product = findProduct($_GET['delete']);
    $product->delete();
    header('Location: /product');
    exit();
}

function findProduct($productId)
{
    $product = Product::getOne([
        'id' => $productId
    ]);

    return $product;
}

loadTemplateView('cadastrar-produto', $userData + [
    'exception' => $exception,
    'isUpdate' => $isUpdate
]);
