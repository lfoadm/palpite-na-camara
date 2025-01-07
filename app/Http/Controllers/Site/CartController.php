<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Candidate;
use App\Models\Admin\City;
use App\Models\Admin\Party;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $candidateId)
    {
        // Recupera o item do candidato
        $candidate = Candidate::findOrFail($candidateId);

        if (!$candidate) {
            return redirect()->back()->withErrors(['error' => 'Candidato não encontrado.']);
        }

        // Obtém o carrinho atual da sessão ou inicia um array vazio
        $cart = session()->get('cart', []);

        // Verifica se o carrinho já contém itens
        if (count($cart) > 0) {
            // Obtém a cidade do primeiro item do carrinho
            $cityIdInCart = $cart[0]['city_id'];

            // Verifica se a cidade do candidato é diferente da cidade no carrinho
            if ($candidate->city_id != $cityIdInCart) {
                // Caso as cidades sejam diferentes, retorna um erro ou mensagem
                return back()->with('error', 'Não é permitido adicionar candidatos de diferentes cidades no mesmo bilhete, conclua o bilhete antes de avançar para os candidatos de outra cidade.');
            }
        }

        // Verifica se o candidato já está no carrinho
        if (in_array($candidateId, array_column($cart, 'id'))) {
            return redirect()->back()->with('message', 'Candidato já está no carrinho.');
        }

        // Adiciona o candidato ao carrinho
        $cart[] = $candidate;

        // Atualiza a sessão com o carrinho atualizado
        session()->put('cart', $cart);

        return redirect()->back()->with('message', 'Candidato adicionado ao carrinho com sucesso.');
    }



    public function show(Request $request)
    {
        $items = session()->get('cart', []);
        $city = null;
        $party = null;

        if (!empty($items)) {
            // Sempre busca o primeiro item válido no array
            $first_item = reset($items); // Recupera o primeiro item do array, independentemente do índice

            if (isset($first_item['city_id'])) {
                $city = City::where('id', $first_item['city_id'])->first();
            }

            if (isset($first_item['party_id'])) {
                $party = Party::where('id', $first_item['party_id'])->first();
            }
        }

        $data = ['cart' => $items];
        return view('site.cart.index', $data, compact('city', 'party'));
    }

    public function remove_item($rowId)
    {
        // Recupera o carrinho da sessão
        $cart = session('cart', []);

        // Verifica se o item existe no carrinho
        if (isset($cart[$rowId])) {
            unset($cart[$rowId]); // Remove o item do carrinho
            session(['cart' => $cart]); // Atualiza o carrinho na sessão
            return redirect()->back()->with('success', 'Item removido do carrinho com sucesso.');
        }

        // Caso o item não exista, retorna com uma mensagem de erro
        return redirect()->back()->with('error', 'Item não encontrado no carrinho.');
    }

    public function empty_cart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Carrinho limpo com sucesso!');
    }
}
