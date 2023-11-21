<div>
    <div class="row">
                                        <h3>{{$note['record_type'] == 5 ? "Assignment Discussions" : "Notes"}}</h3>
                                        <div class="col-md-6 col-12 mb-4">
                                            <label class="form-label" for="notes-column">
                                                {{$label}} {{$note['record_type'] == 5 ? "Comments" : "Notes"}}
                                            </label>
                                            <textarea class="form-control" rows="3" placeholder="" wire:model.defer="note.notes_text" name="notesColumn"
                                                id="notes-column"></textarea>
                                                   @error('note.notes_text')
												<span class="d-inline-block invalid-feedback mt-2">
													{{ $message }}
												</span>
												@enderror
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary rounded " wire:click="addNote">{{$label}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($notesArr as $note)
                                    <div class="row mb-3">
                                        <div class="col-md-8">
                                            <div class="d-inline-flex align-items-center">
                                                <div class="bg-warning rounded px-2 py-3">
                                                    <p class="mb-0">
                                                        {{$note->notes_text}}

                                                           {{-- <span class="text-primary">
                                                            @Admin @Comapny
                                                        </span> --}}
                                                    </p>
                                                    <div class="d-flex gap-2 align-items-center mt-2">
                                                        @if($note->author!=null)
                                                            <img class="round" title="{{$note->author->name}}" src="{{$note->author->userdetail->profile_pic != null ? $note->author->userdetail->profile_pic :'/tenant-resources/images/portrait/small/avatar-s-11.jpg'}}" alt="avatar" height="25" width="25">
                                                             <small>{{$note->author->name}}</small> -
                                                        @endif
                                                        <small>{{date_format(date_create($note->updated_at), "d/m/Y h:i A")}}</small>

                                                    </div>
                                                </div>
                                                <div class="d-flex actions mx-2">
                                                    <a href="#" title="Inactive" aria-label="Inactive" wire:click="editNote({{$note->id}})"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#pencil">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Inactive" aria-label="Inactive" wire:click="deleteNote({{$note->id}})"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                             
</div>
