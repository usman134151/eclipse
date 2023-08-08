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
                                            <a class="page-link"  href="{{ $paginator->previousPageUrl() }}" wire:click="previousPage" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                            <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                      
                                        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                                            <a class="page-link"  wire:click="nextPage" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                    @endif
                    </div>