@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Partidos</h3>
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
                    <div class="text-tiny">Partidos</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Buscar..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="tf-button style-1 w208" href="{{ route('admin.parties.create') }}"><i class="icon-plus"></i>Novo</a>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Nº Legenda</th>
                                <th class="text-center">Sigla</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $parties as $party )
                                <tr>
                                    <td class="text-center">{{ $party->id }}</td>
                                    <td class="pname">
                                        <div class="image">
                                            <img src="{{ asset('uploads/parties') }}/{{ $party->image }}" alt="{{ $party->name }}" class="image">
                                        </div>
                                        <div class="name">
                                            <a href="#" class="body-title-2">{{ $party->name }}</a>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $party->slug }}</td>
                                    <td class="text-center"><a href="#" target="_blank">{{ $party->number }}</a></td>
                                    <td class="text-center">{{ $party->acronym }}</td>
                                    <td>
                                        <div class="list-icon-function text-center">
                                            <a href="{{ route('admin.parties.edit', ['party' => $party->id]) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <form action="{{ route('admin.parties.destroy', ['party' => $party->id]) }}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <div class="item text-danger delete">
                                                    <i class="icon-trash-2"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    {{ $parties->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function(){
            $('.delete').on('click', function(e){
                e.preventDefault();
                var form = $(this).closest('form');
                swal({
                    title: "Tem certeza?",
                    text: "Você quer apagar este registro?",
                    type: "warning",
                    buttons: ["Não", "Sim"],
                    confirmButtonColor: '#dc3545'
                }).then(function(result){
                    if(result){
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush