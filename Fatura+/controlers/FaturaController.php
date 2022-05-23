<?php

class FaturaController extends BaseAuthController
{
    public function index()
    {
        //$this->loginFilter();
        $faturas = Fatura::all();
        $this->makeView('fatura', 'index', ['faturas' => $faturas]);
    }

    public function show($id)
    {
        $fatura = Fatura::find([$id]);
        if (is_null($fatura)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('fatura', 'show', ['fatura' => $fatura]);
        }
    }

    public function create()
    {
        $genres = Genre::all();
        $this->makeView('book', 'create', ['genres'=> $genres]);
    }

    public function store()
    {
        $book = new Book($_POST);

        if($book->is_valid()){
            $book->save();
            $this-> redirectToRoute('book', 'index'); //redirecionar para o index
        } else {
            $genres = Genre::all();
            $this->makeView('book', 'create',  ['book' => $book, 'genres' => $genres]);
        }
    }

    public function edit($id)
    {
        $book = Book::find([$id]);

        if (is_null($book)) {
            //TODO redirect to standard error page
        } else {
            $genres = Genre::all();
            $this->makeView('book', 'edit', ['book' => $book, 'genres' => $genres]);
        }
    }
    public function update($id)
    {

        $book = Book::find([$id]);
        $book->update_attributes($_POST);
        if($book->is_valid()){
            $book->save();
            $this-> redirectToRoute('book', 'index');
        } else {
            $genres = Genre::all();
            $this->makeView('book', 'edit', ['book' => $book, 'genres' => $genres]);
        }
    }

    public function delete($id)
    {
        $book = Book::find([$id]);
        foreach ($book -> chapters as $chapter)
            {
                $chapter->delete();
            }
        $book->delete();
        $this-> redirectToRoute('book', 'index');
    }



}