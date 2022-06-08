<?php
use Carbon\Carbon;

class FaturaController extends BaseAuthController
{

    public function index()
    {
        $faturas = Fatura::all();

        $this->makeView('fatura', 'index', ['faturas' => $faturas]);
    }


    public function create($id)
    {
        $empresa = Empresa::find([$id]);
        $this->makeView('fatura', 'create', [ 'empresa' => $empresa]);
    }

    public function store($idClient)
    {
        $faturas = new Fatura($_POST);
        $dateToday = Carbon::now();

        $user = User::find([$idClient]);



       // $idFatura = Fatura::find([$id]);
        $faturas->data =  $dateToday;
        $faturas->valortotal = "0";
        $faturas->ivatotal = "0";
        $faturas->estado = 'em lancamento';
        $faturas->user_id =$user->id;


        if ($faturas->is_valid()) {
            $faturas->save();
            $this->redirectToRoute('linhaFatura', 'create', ['id' => $faturas->id]);
        } else {
            $this->makeView('fatura', 'create', ['faturas' => $faturas]);
        }
    }

    public function show($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('user', 'show', ['user' => $user]);
        }
    }

    public function  selectClient()
    {
        $users = User::all();
        $this->makeView('fatura', 'selectClient',['users' => $users]);
    }
}
