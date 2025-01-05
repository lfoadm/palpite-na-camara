@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Informação do partido</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{route('admin.index') }}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{ route('admin.parties.index') }}">
                        <div class="text-tiny">Partidos</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Novo partido</div>
                </li>
            </ul>
        </div>
        <!-- new-category -->
        <div class="wg-box">
            <form class="form-new-product form-style-1" action="{{ route('admin.parties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="name">
                    <div class="body-title">Nome do partido <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Nome partido" name="name" tabindex="0" value="{{ old('name') }}" aria-required="true" required="">
                </fieldset>
                @error('name')<span class="alert alert-danger text-center">{{ $message }}</span>@enderror

                <fieldset class="name">
                    <div class="body-title">Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Slug auto" name="slug" tabindex="0" value="{{ old('slug') }}" aria-required="true" required="">
                </fieldset>
                @error('slug')<span class="alert alert-danger text-center">{{ $message }}</span>@enderror

                <fieldset class="name">
                    <div class="body-title">Sigla <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" type="text" placeholder="Sigla" name="acronym" tabindex="0" value="{{ old('acronym') }}" aria-required="true" required="">
                </fieldset>
                @error('slug')<span class="alert alert-danger text-center">{{ $message }}</span>@enderror

                <fieldset>
                    <div class="body-title">Carregar imagem <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" style="display:none">
                            <img src="upload-1.html" class="effect8" alt="">
                        </div>
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Para selecionar a imagem <span class="tf-color">clique aqui para procurar</span></span>
                                <input type="file" id="myFile" name="image" accept="image/*">
                            </label>
                        </div>
                    </div>
                </fieldset>
                @error('image')<span class="alert alert-danger text-center">{{ $message }}</span>@enderror

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
            $("input[name='name']").on("change", function(){
                $("input[name='slug']").val(StringToSlug($(this).val()));
            });
        });

        function StringToSlug(Text)
        {
            const map = {
            "ã": "a", "á": "a", "à": "a", "ä": "a", "â": "a",
            "é": "e", "è": "e", "ë": "e", "ê": "e",
            "í": "i", "ì": "i", "ï": "i", "î": "i",
            "õ": "o", "ó": "o", "ò": "o", "ö": "o", "ô": "o",
            "ú": "u", "ù": "u", "ü": "u", "û": "u",
            "ç": "c", "ñ": "n",
            "ý": "y", "ÿ": "y",
        };

        return Text.toLowerCase()
            .replace(/[^\w ]+/g, function (char) {
                return map[char] || "";
            }) // Substitui caracteres especiais pelo mapeamento
            .replace(/ +/g, "-"); // Substitui espaços por hífen
        }
    </script>
@endpush