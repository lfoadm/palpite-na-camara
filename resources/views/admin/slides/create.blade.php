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
                    <a href="{{ route('admin.slides.index') }}">
                        <div class="text-tiny">Slides</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Novo Slide</div>
                </li>
            </ul>
        </div>
        
        <div class="wg-box">
            <form action="{{ route('admin.slides.store') }}" method="POST" class="form-new-product form-style-1" enctype="multipart/form-data">
                @csrf
                <fieldset class="name">
                    <div class="body-title">Tagline <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Tagline" name="tagline" tabindex="0" value="{{ old('tagline') }}" aria-required="true" required="">
                </fieldset>
                @error('tagline') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title">Título <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Título" name="title" tabindex="0" value="{{ old('title') }}" aria-required="true" required="">
                </fieldset>
                @error('title') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title">Subtítulo <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Subtítulo" name="subtitle" tabindex="0" value="{{ old('subtitle') }}" aria-required="true" required="">
                </fieldset>
                @error('subtitle') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title">Link <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Link" name="link" tabindex="0" value="{{ old('link') }}" aria-required="true" required="">
                </fieldset>
                @error('link') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset>
                    <div class="body-title">Carregar imagem <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" style="display: none;">
                            <img src="sample.jpg" class="effect8" alt="" />
                        </div>
                        <div class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon"><i class="icon-upload-cloud"></i></span>
                                <span class="body-text">Solte a imagem aqui ou selecione <span class="tf-color">clique aqui para buscar</span></span>
                                <input type="file" id="myFile" name="image">
                            </label>
                        </div>
                    </div>
                </fieldset>
                @error('image') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror
                <fieldset class="category">
                    <div class="body-title">Status</div>
                    <div class="select flex-grow">
                        <select class="" name="status">
                            <option>Selecione...</option>
                            <option value="1" @if(old('status')=="1") selected @endif>Ativo</option>
                            <option value="0" @if(old('status')=="0") selected @endif>Inativo</option>
                        </select>
                    </div>
                </fieldset>
                @error('status') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror
                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function(){
            $("#myFile").on("change", function(e){
                const photoInp = $("myFile");
                const[file] = this.files;
                if(file)
                {
                    $("#imgpreview img").attr('src', URL.createObjectURL(file));
                    $("#imgpreview").show();
                }
            });
        });
    </script>
@endpush