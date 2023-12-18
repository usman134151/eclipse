{{-- <div class="col-xl-6 col-md-6 col-sm-12">
                    @if ($paginator->lastPage() > 1)
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" wire:click="previousPage">
                                        <span aria-hidden="true"><i class="fas fa-chevron-left" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                    <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                        <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                                    <button  class="page-link" wire:click="nextPage">Next</button>
                                </li>
                            </ul>
                        </nav>
                    @endif
                </div> --}}
                <div class="d-flex flex-column flex-md-row justify-content-end">
                <small class="text-muted d-block mb-2 my-md-2 me-1">
                        Showing
                        <span class="font-semibold">{{$paginator->currentPage()}}</span>
                        of
                        <span class="font-semibold">{{$paginator->lastPage()}}</span>
                                                Pages
                    </small>
                            
                    @if ($paginator->hasPages())
                                
                                <nav aria-label="Page Navigation">
                                    <ul class="pagination justify-content-start justify-content-lg-end ">
                                        <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}" >
                                            <a class="page-link"   wire:click="previousPage" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                            <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                                <a class="page-link" href="#" wire:click="gotoPage({{$i}})">{{ $i }}</a>
                                            </li>
                                        @endfor
                                      
                                        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                                            <a class="page-link"  wire:click="nextPage" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="input-group input-group-sm mb-2 gap-2">
                                        <input type="text" id="pageNumberInput" class="form-control form-control-sm text-center" placeholder="Enter page number">
                                        <button onclick="gotoLivewirePage()" class="btn btn-primary btn-sm">Go to Page</button>
                                    </ul>
                                    <ul>
                                        <small id="errorMessage" class="text-danger" style="display: none;"></small>
                                    </ul>
                                </nav>
                    @endif
                    </div>
@push('scripts')                        
    <script>
        function gotoLivewirePage() {
            // Get the value from the text field
            let pageNumber = document.getElementById('pageNumberInput').value; 
            if (pageNumber > {{$paginator->lastPage()}}){
                let errorMessage = document.getElementById('errorMessage');
                errorMessage.textContent = 'Page number exceeds the last page.';
                errorMessage.style.display = 'block';
            } else  if (pageNumber < 1 || isNaN(pageNumber)) {
                let errorMessage = document.getElementById('errorMessage');
                errorMessage.textContent = 'Please enter a valid page number.';
                errorMessage.style.display = 'block';
            } else {
                // Call Livewire method using wire:click and pass the page number
                @this.call('gotoPage', pageNumber);
            }
        }
    </script>
@endpush