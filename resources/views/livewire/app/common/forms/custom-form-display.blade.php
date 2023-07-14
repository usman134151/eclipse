<div>
  <form class="form">
    @csrf
                            <div class="col-md-12 mb-md-2">
                                <h2 class="mb-5">{{$formInfo['request_form_name']}} </h2>
                                <!-- Industry Form Begin -->
                                <div class="row between-section-segment-spacing">
                                        @foreach($questions as $question)
                                            <div class="row mb-4">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <label class="form-label" for="ethnicity-column">
                                                        {{$question['set']['title']}}
                                                        @if($question['set']['required'])
                                                            <span class="mandatory" aria-hidden="true">
                                                                *
                                                            </span>
                                                        @endif
                                                    </label>
                                                    </a>
                                                </div>
                                                <div class="">
                                                {!!$question['rendered']!!}
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                               
                            </div>
    </form>
</div>
