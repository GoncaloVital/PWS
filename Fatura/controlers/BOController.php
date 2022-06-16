<?php


class BOController extends BaseAuthController
{
    public function index($estado)
    {
        $this->loginFilterByRole(['administrador', 'funcionario']);
        $faturas = Fatura::all();
        $users = User::all();
        $total = 0;
        $totalClientes = 0;
        $totalFuncionarios = 0;
        $totalMes = 0;
        $month = date('m', strtotime("-1 month"));

        foreach ($faturas as $fatura)
        {
            if($fatura->estado == 'Emitida')
            {
                $total++;
            }
        }
        foreach ($faturas as $fatura)
        {
            $date = strtotime($fatura->data);
            $faturaMonth = date("m", $date);

            if($fatura->estado == 'Emitida' && $faturaMonth == $month)
            {
                $totalMes++;
            }
        }
        foreach ($users as $cliente)
        {
            if($cliente->role == 'cliente')
            {
                $totalClientes++;
            }
        }
        foreach ($users as $funcionario)
        {
            if($funcionario->role == 'funcionario')
            {
                $totalFuncionarios++;
            }
        }
        $this->makeView('dashboardBO', 'index', [ 'totalFuncionarios' => $totalFuncionarios,'totalClientes' => $totalClientes,'users' => $users,'faturas' => $faturas, 'estado' => $estado, 'total' => $total, 'totalMes' => $totalMes, 'month' => $month]);
    }
}