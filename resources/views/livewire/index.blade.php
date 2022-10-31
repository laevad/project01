<div>
    <h1>Movies</h1>
    <div class="input-group mb-3">
        <label class="input-group-text" for="selectLang">Lang</label>
        <select class="form-select" id="selectLang" wire:change="changeLang($event.target.value)">
            <option value="0">Choose...</option>
            @foreach($languages as $language)
                <option value="{{ $language->id }}">{{ $language->text }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-2">
        <div wire:loading.class="text-muted">
            <ul class="list-group list-group-flush">
                @foreach($textContents as $textContent)
                    @if($ll == 0 || $ll ==  $textContent->originals->language_id)
                        <li class="list-group-item mb-2">{{ $textContent->originals->text }}</li>
                    @else
                        @if($ll == $textContent->translations->language_id )
                            <li class="list-group-item mb-2">{{ $textContent->translations->text }}</li>
                        @endif
                    @endif

                @endforeach

            </ul>
        </div>
    </div>
</div>
