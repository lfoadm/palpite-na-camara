@extends('layouts.admin')
@section('content')

<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Novo candidato</h3>
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
                    <a href="{{ route('admin.candidates.index') }}">
                        <div class="text-tiny">Candidatos</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Novo candidato</div>
                </li>
            </ul>
        </div>
        <!-- form-add-product -->
        <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data" action="{{ route('admin.candidates.store') }}">
            @csrf
            <div class="wg-box">
                <fieldset class="name">
                    <div class="body-title mb-10">Nome <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Digite o nome do candidato" name="name" tabindex="0" value="{{ old('name') }}" aria-required="true" required="">
                </fieldset>
                @error('name') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Slug auto" name="slug" tabindex="0" value="{{ old('slug') }}" aria-required="true" required="">
                </fieldset>
                @error('slug') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Nome curto ou apelido<span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Digite o apelido do candidato" name="short_name" tabindex="0" value="{{ old('short_name') }}" aria-required="true" required="">
                </fieldset>
                @error('short_name') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <fieldset class="name">
                    <div class="body-title mb-10">Número de urna <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" placeholder="Digite o número de urna" name="caption_number" tabindex="0" value="{{ old('caption_number') }}" aria-required="true" required="">
                </fieldset>
                @error('caption_number') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <div class="gap22 cols">
                    <fieldset class="category">
                        <div class="body-title mb-10">Partido <span class="tf-color-1">*</span></div>
                        <div class="select">
                            <select class="" name="party_id">
                                <option>Selecione o partido...</option>
                                @foreach ($parties as $party)
                                <option value="{{ $party->id }}">{{ $party->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                    @error('party_id') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                    <fieldset class="brand">
                        <div class="body-title mb-10">Cidade <span class="tf-color-1">*</span>
                        </div>
                        <div class="select">
                            <select class="" name="city_id">
                                <option>Selecione a cidade</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                    @error('city_id') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror
                </div>
                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Status</div>
                        <div class="select mb-10">
                            <select class="" name="status">
                                <option value="1">Concorrendo</option>
                                <option value="0">Indeferido</option>
                            </select>
                        </div>
                    </fieldset>
                    @error('status') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                    {{-- <fieldset class="name">
                        <div class="body-title mb-10">Eleito?</div>
                        <div class="select mb-10">
                            <select class="" name="elected">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </fieldset>
                    @error('elected') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror --}}
                </div>
            {{-- </div>

            <div class="wg-box"> --}}
                <fieldset>
                    <div class="body-title">Foto do candidato <span class="tf-color-1">*</span></div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" style="display:none">
                            <img src="../../../localhost_8000/images/upload/upload-1.png" class="effect8" alt="">
                        </div>
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Solte a imagem aqui ou selecione <span class="tf-color">clique aqui para buscar</span></span>
                                <input type="file" id="myFile" name="image" accept="image/*">
                            </label>
                        </div>
                    </div>
                </fieldset>
                @error('image') <span class="alert alert-danger text-center">{{ $message }}</span> @enderror

                <div class="cols gap10">
                    <button class="tf-button w-full" type="submit">Adicionar candidato</button>
                </div>
            </div>
        </form>
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

            $("#gFile").on("change", function(e){
                const photoInp = $("#gFile");
                const gphotos = this.files;
                $.each(gphotos, function(key, val) {
                    $("#galUpload").prepend(`<div class="item gitems"><img src="${URL.createObjectURL(val)}" /></div>`);
                });
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
