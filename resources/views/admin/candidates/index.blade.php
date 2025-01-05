@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Todos os candidatos</h3>
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
                    <div class="text-tiny">Todos Candidatos</div>
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
                <a class="tf-button style-1 w208" href="{{ route('admin.candidates.create') }}"><i class="icon-plus"></i>Novo</a>
            </div>
            <div class="table-responsive">
                @if (Session::has('status'))
                    <p class="alert alert-success">{{ Session::get('status') }}</p>
                @endif
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Apelido</th>
                            <th class="text-center">Número</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Partido</th>
                            <th class="text-center">Eleito?</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $candidates as $candidate )
                            <tr>
                                <td class="text-center">{{ $candidate->id }}</td>
                                <td class="pname">
                                    <div class="image">
                                        <img src="{{ asset('uploads/candidates/thumbnails') }}/{{ $candidate->image }}" alt="{{ $candidate->name }}" class="image">
                                    </div>
                                    <div class="name">
                                        <a href="#" class="body-title-2">{{ $candidate->name }}</a>
                                        {{-- <div class="text-tiny mt-3">{{ $candidate->slug }}</div> --}}
                                    </div>
                                </td>
                                <td class="text-center">{{ $candidate->short_name }}</td>
                                <td class="text-center">{{ $candidate->caption_number }}</td>
                                <td class="text-center">
                                    @if($candidate->status == 1)
                                        <span class="badge bg-success">Concorrendo</span>
                                    @else
                                        <span class="badge bg-danger">Indeferido</span>
                                    @endif
                                </td>
                                <td class="text-center">{{ $candidate->city->name }}</td>
                                <td class="text-center">{{ $candidate->party->acronym }}</td>
                                <td class="text-center">
                                    {{-- @if($candidate->elected == 1)
                                        <span class="badge bg-success">Sim</span>
                                    @else --}}
                                        <span class="badge bg-info">Não apurado</span>
                                    {{-- @endif --}}
                                </td>
                                <td>
                                    <div class="list-icon-function">
                                        <a href="#" target="_blank">
                                            <div class="item eye">
                                                <i class="icon-eye"></i>
                                            </div>
                                        </a>
                                        <a href="{{ route('admin.candidates.edit', ['candidate'=> $candidate->id]) }}">
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                        </a>
                                        <form action="{{ route('admin.candidates.destroy', ['candidate'=> $candidate->id]) }}" method="POST">
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
                {{ $candidates->links('pagination::bootstrap-5') }}
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
                    confirmButtonColor: '#dc3555'
                }).then(function(result){
                    if(result){
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush