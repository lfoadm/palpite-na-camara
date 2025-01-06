@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Slides</h3>
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
                        <div class="text-tiny">Slides</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.slides.create') }}"><i class="icon-plus"></i>Novo</a>
                </div>
                <div class="wg-table table-all-user">
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Imagem</th>
                                <th class="text-center">Tagline</th>
                                <th class="text-center">Título</th>
                                <th class="text-center">Subtítulo</th>
                                <th class="text-center">Link</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $slides as $slide)
                            <tr>
                                <td class="text-center">{{ $slide->id }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('uploads/slides') }}/{{ $slide->image }}" alt="{{ $slide->title }}"  width="64" height="64" >
                                </td>
                                <td class="text-center">{{ $slide->tagline }}</td>
                                <td class="text-center">{{ $slide->title }}</td>
                                <td class="text-center">{{ $slide->subtitle }}</td>
                                <td class="text-center">{{ $slide->link }}</td>
                                <td class="text-center">
                                    <div class="list-icon-function">
                                        <a href="{{ route('admin.slides.edit', ['slide' => $slide->id]) }}">
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                        </a>
                                        <form action="{{ route('admin.slides.destroy', ['slide' => $slide->id]) }}" method="POST">
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
                    {{ $slides->links('pagination::bootstrap-5') }}
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