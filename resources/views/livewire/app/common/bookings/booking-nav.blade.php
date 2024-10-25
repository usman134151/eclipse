@php  $uuid=\Illuminate\Support\Str::random(5); @endphp
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
                    <button class="page-link" wire:click="nextPage">Next</button>
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

    @if($paginator->currentPage() > $paginator->lastPage())
        {{$this->gotoPage(1)}}
        <script>
            @this.call('gotoPage', 1);
        </script>
    @endif
    @php
        $isDisabled = ($paginator->currentPage() == 1) ? ' disabled' : '';
    @endphp
    <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-start justify-content-lg-end ">
            <li class="page-item {{$isDisabled}}">
                <a class="page-link" wire:click="previousPage" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($i <=2 || $i>= $paginator->lastPage() - 1 || ($i >=$paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1))
                    <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" href="#" wire:click="gotoPage({{$i}})">{{ $i }}</a>
                    </li>
                    @elseif (($i == 3 && $paginator->currentPage() > 4) || ($i == $paginator->lastPage() - 2 &&
                    $paginator->currentPage() < $paginator->lastPage() - 3))
                    <li class="page-item disabled">
                        <span class="page-link">...</span>
                    </li>
                @endif
            @endfor
            <li
                class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a class="page-link" wire:click="nextPage" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            &nbsp;
            &nbsp;
            <small>
                <li class="input-group input-group-sm">
                    <input type="text" id="pageNumberInput_{{$uuid}}" class="form-control form-control-sm text-center"
                           size="1" placeholder="{{$paginator->currentPage()}}">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-sm btn-primary" onclick="gotoLivewirePage('{{$uuid}}')"
                        >Go</button>
                    </span>
                </li>
            </small>
        </ul>
        <ul>
            <small id="errorMessage_{{$uuid}}" class="text-danger" style="display: none;"></small>
        </ul>
    </nav>
    @endif
    <input type="hidden" id="lastPageNumber_{{$uuid}}" name="lastPage" value="{{$paginator->lastPage()}}">
    <button type="button" id="gotobtn_{{$uuid}}" class="btn btn-sm btn-outline-secondary hidden"
            wire:click="gotoPage(1)">Next
    </button>
</div>
@push('scripts')
<script>
    function gotoLivewirePage(uuid) {
        //javascript change the gotobtn attribute value wire:click  and clicked the button
        let pageNumber = parseInt(document.getElementById('pageNumberInput_' + uuid).value);
        let lastPage = parseInt(document.getElementById('lastPageNumber_' + uuid).value);
        if (pageNumber < 1 || isNaN(pageNumber)) {
            let errorMessage = document.getElementById('errorMessage_' + uuid);
                errorMessage.textContent = 'Please enter a valid page number.';
                errorMessage.style.display = 'block';
        } else if (pageNumber > lastPage) {
            let errorMessage = document.getElementById('errorMessage_' + uuid);
            errorMessage.textContent = 'Page number exceeds the last page.';
            errorMessage.style.display = 'block';
        } else {
            console.log(pageNumber, lastPage, pageNumber > lastPage);
            var btn = document.getElementById('gotobtn_' + uuid);
            btn.setAttribute('wire:click', 'gotoPage(' + pageNumber + ')');
            btn.click();
            return true;
        }
        return false;
    }
</script>
@endpush
