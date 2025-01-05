@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Atualizar dados do usuário</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{ route('admin.index') }}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.account.index') }}">
                        <div class="text-tiny">Candidatos</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Editando usuário: <strong>{{ $user->name }}</strong></div>
                </li>
            </ul>
        </div>

        <form class="tf-section-2 form-add-product" method="POST" action="{{ route('admin.account.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $user->id }}" />
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Nome <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Digite o nome do candidato" name="name" tabindex="0" value="{{ $user->name }}" aria-required="true" required="">
                </fieldset>
                @error('name') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror
                
                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Tipo</div>
                        <div class="select mb-10">
                            <select class="" name="utype">
                                <option value="USR" <?= $user->utype == 'USR' ? 'selected' : '' ?>>Usuário comum</option>
                                <option value="ADM" <?= $user->utype == 'ADM' ? 'selected' : '' ?>>Administrador</option>
                            </select>
                        </div>
                    </fieldset>
                    @error('utype') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror
                </div>
            

            <div class="wg-box">
                <div class="cols gap10">
                    <button class="tf-button w-full" type="submit">Salvar</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection