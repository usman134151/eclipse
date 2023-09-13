<div>

    <form wire:submit.prevent="{{ $formType == 1 ? 'saveAllForms' : 'save' }}">

        <div class="col-md-12 mb-md-2">
            <h2 class="text-primary">
                {{ isset($formInfo['request_form_name']) ? $formInfo['request_form_name'] : 'No Form Available' }} </h2>
            <!-- Industry Form Begin -->
            <div class="row between-section-segment-spacing">
                @if (count($questions))
                    @csrf
                    @foreach ($questions as $index => $question)
                        <div class="col-md-6 col-12 mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="form-label" for="{{ $index }}">
                                    {{ $question['set']['title'] }}
                                    @if ($question['set']['required'])
                                        <span class="mandatory" aria-hidden="true">
                                            *
                                        </span>
                                    @endif
                                </label>
                                </a>
                            </div>
                            <div class="">
                                {!! $question['rendered'] !!}
                            </div>
                            @error('answers.'.$index .'.data_value')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror
                            @if ($question['set']['type'] == 6 && isset($answers[$index]['data_value']))
                                <div class="">
                                    @if (is_string($answers[$index]['data_value']))
                                        <a href="{{ $answers[$index]['data_value'] }}" target="_blank"
                                            aria-label="file">

                                            {{ basename($answers[$index]['data_value']) }}
                                        </a>
                                    @else
                                        <a href="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $answers[$index]['data_value']->getFilename() }}"
                                            target="_blank" aria-label="file">

                                            {{ $answers[$index]['data_value']->getClientOriginalName() }}
                                        </a>
                                    @endif

                                </div>
                            @endif
                        </div>
                    @endforeach
                @else
                    <p>No questions available for this form</p>
                @endif
            </div>

        </div>
        @if ($formType == 1)
            <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                @if ($lastForm)
                    <button wire:loading.attr="disabled" type="button" class="btn btn-outline-dark rounded"
                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
                        wire:click="$emit('switch','requester-info')">Back</button>
                @endif
                <button wire:loading.attr="disabled" type="submit" class="btn btn-primary rounded">Save
                    Information</button>
                <button type="button" wire:loading.attr="disabled" class="btn btn-primary rounded">Request from
                    User</button>
                @if ($lastForm)
                    <button type="submit" class="btn btn-primary rounded" wire:loading.attr="disabled"
                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
                        wire:click="$set('next',1)">Proceed to Payment Info</button>
                @endif
            </div>
        @endif
    </form>



</div>
