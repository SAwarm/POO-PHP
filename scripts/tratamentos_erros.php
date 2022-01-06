<?php
 
    // tente uma lógica
    try {
        echo 'Try';

        //$sql = "SELECT * FROM clientes";
        //mysqli_query($sql); // ERRO

        if (!file_exists('require_arquivo_a.php')){
            throw new Exception('O arquivo em questão deveria estar disponível');
            // throw new Error('O arquivo em questão deveria estar disponível');
        }

    } catch (Error $e) {
        echo '<p style="color: red;">' . $e . '</p>';
    } catch (Exception $e) {
        echo '<p style="color: red;">' . $e . '</p>';
    } finally {
        echo 'Finally';
    }
