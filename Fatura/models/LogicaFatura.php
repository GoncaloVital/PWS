<?php

class LogicaFatura
{
    public function verificarProduto($fatura, $idProduto, $qtd)
    {
        foreach ($fatura->linhafaturas as $linhaFatura) {
            if ($linhaFatura->produto_id == $idProduto) {
                $linhaFatura->quantidade = $linhaFatura->quantidade + $qtd;
                return $linhaFatura;
            }
        }
    }

    public function calcularIvaTotal($fatura)
    {
        $iva = 0;
        foreach ($fatura->linhafaturas as $linhaFatura)
        {
            $iva += $linhaFatura->valoriva * $linhaFatura->quantidade;
        }
        return $iva;
    }

    public function calcularSubTotal($fatura)
    {
        $subtotal = 0;
        foreach ($fatura->linhafaturas as $linhaFatura)
        {
            $subtotal += $linhaFatura->valorunitario * $linhaFatura->quantidade;
        }
        return $subtotal;
    }
}