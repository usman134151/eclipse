<div class="btn-group">
    <button class="btn btn-outline-primary btn-sm dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
                    <span>
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
                        </svg>
                    </span>
    </button>
    <ul class="dropdown-menu">
        @if(in_array('excel', data_get($setUp, 'exportable.type')))
            <li class="d-flex">
                <div class="dropdown-item">
                    @lang('Excel')
                    <a class="text-black-50" wire:click="exportToXLS()" href="#">
                        @lang('livewire-powergrid::datatable.labels.all')
                    </a>
                    @if($checkbox)
                        /
                        <a class="text-black-50" wire:click="exportToXLS(true)" href="#">
                            @lang('livewire-powergrid::datatable.labels.selected')
                        </a>
                    @endif
                </div>
            </li>
        @endif
        @if(in_array('csv', data_get($setUp, 'exportable.type')))
            <li class="d-flex">
                <div class="dropdown-item">
                    @lang('Csv')
                    <a class="text-black-50" wire:click="exportToCsv" href="#">
                        @lang('livewire-powergrid::datatable.labels.all')
                    </a>
                    @if($checkbox)
                        /
                        <a class="text-black-50" wire:click="exportToCsv(true)" href="#">
                            @lang('livewire-powergrid::datatable.labels.selected')
                        </a>
                    @endif
                </div>
            </li>
        @endif
    </ul>
</div>
