<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    private $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->objUser->all();
        return view('users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validação dos campos obrigatórios
    $validatedData = $request->validate([
        'nome' => 'required',
        'celular' => 'required',
    ]);

    // Criação do novo usuário com os dados do formulário
    $user = new User();
    $user->nome = $request->input('nome');
    $user->numero_celular = $request->input('celular');
    $user->email = $request->input('email');
    $user->endereco = $request->input('rua');
    $user->cep = $request->input('cep');
    $user->numero = $request->input('numero');
    $user->complemento = $request->input('complemento');
    $user->bairro = $request->input('bairro');
    $user->cidade = $request->input('cidade');
    $user->estado = $request->input('estado');
    $user->nota = $request->input('nota');

    $user->save();

    // Redirecionamento com mensagem de sucesso
    return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
}


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user_show', ['users'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users_edit', ['users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->objUser->where('id',$id)->update($request->except(['_token','_method']));

        return redirect()->route('users.index')->with('success', 'Usuário Editado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->objUser->where('id',$id)->delete();

        return redirect()->route('users.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Obtém o parâmetro 'query' da solicitação

        $users = User::where('nome', 'like', '%' . $query . '%')->get();
        // Realiza a pesquisa no banco de dados

        return view('users_search', ['users' => $users, 'query' => $query]);
        // Retorna a view 'users_search' com os resultados da pesquisa
    }





}
