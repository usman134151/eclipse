<div>

    <form wire:submit.prevent="save">

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
                    <button type="button" class="btn btn-outline-dark rounded"
                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
                        wire:click="$emit('switch','requester-info')">Back</button>
                @endif
                <button type="submit" class="btn btn-primary rounded" >Save
                    Information</button>
                <button type="submit" class="btn btn-primary rounded">Request from User</button>
                @if ($lastForm)
                    <button type="button" class="btn btn-primary rounded"
                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });"
                        wire:click="$emit('switch','payment-info')">Proceed to Payment Info</button>
                @endif
            </div>
        @endif
    </form>



</div>
