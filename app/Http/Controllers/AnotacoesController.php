<?php

namespace App\Http\Controllers;

use App\Models\Anotacoes;
use Illuminate\Http\Request;

class AnotacoesController extends Controller
{

    public function index()
    {
        $anotacoes = Anotacoes::all();
        return view('anotacoes.index', compact('anotacoes'));
    }



    public function create()
    {
        return view('anotacoes.create');
    }


    public function store(Request $request)
    {
        // Validação dos dados, incluindo o arquivo de imagem
        $validatedData = $request->validate([
            'titulo' => 'required|min:5|max:100',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,svg', // validação para o arquivo de imagem
        ]);

        try {
            // Verifica se há um arquivo de imagem no request
            if ($request->hasFile('imagem')) {
                $imagem = $request->file('imagem');
                $imagemName = time() . '_' . $imagem->getClientOriginalName();
                $imagem->storeAs('public/imagens', $imagemName);
                $validatedData['imagem'] = $imagemName;
            }

            // Cria a anotação com os dados validados, incluindo o nome da imagem
            Anotacoes::create($validatedData);

            // Define uma mensagem de sucesso na sessão
            session()->flash('status', 'Anotação criada com sucesso!');
            return redirect()->route('anotacoes.index');
        } catch (\Exception $e) {
            // Define uma mensagem de erro na sessão
            session()->flash('error', 'Ocorreu um erro ao criar a anotação: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }



    public function listAnotacoes()
    {
        $anotacoes = Anotacoes::all();
        return view('anotacoes.listAnotacoes', compact('anotacoes'));
    }



    public function edit($id)
    {
        $anotacoes = Anotacoes::findOrFail($id);
        return view('anotacoes.edit', compact('anotacoes'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|min:5|max:100',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,svg',
        ],[
            'titulo.required' => 'Informe o título da anotação.',
            'descricao.required' => 'Insira uma descrição.',
            'imagem.mimes' => 'A imagem deve ser um arquivo JPEG, PNG ou SVG.',
            'imagem.image' => 'O arquivo enviado deve ser uma imagem.',
        ]);




        try {
            // Busca a anotação existente
            $anotacoes = Anotacoes::findOrFail($id);

            // Verifica se há um arquivo de imagem no request
            if ($request->hasFile('imagem')) {
                $imagem = $request->file('imagem');
                $imagemName = time() . '_' . $imagem->getClientOriginalName(); // Adiciona um timestamp para garantir nomes únicos
                $imagem->storeAs('public/imagens', $imagemName); // Salva o arquivo no diretório 'public/imagens'
                $validatedData['imagem'] = $imagemName; // Adiciona o nome da imagem aos dados validados
            }

            // Atualiza a anotação com os dados validados
            $anotacoes->update($validatedData);

            // Define uma mensagem de sucesso na sessão
            session()->flash('status', 'Anotação atualizada com sucesso!');
            return redirect()->route('anotacoes.index');
        } catch (\Exception $e) {
            // Define uma mensagem de erro na sessão
            session()->flash('error', 'Ocorreu um erro ao atualizar a anotação: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            $anotacao = Anotacoes::findOrFail($id);
            $anotacao->delete();
            session()->flash('status', 'Anotação excluída com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Ocorreu um erro ao excluir a anotação: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
