<div>
    @livewire('app.common.forms.provider-form', ['user' => $user, 'isProvider' => true]) {{-- Show Add / Edit Form With Provider Restrictions --}}
</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {
            if (attrName == 'select-days')
                Livewire.emit('updateDay', val);
            else
                // Livewire.emit('updateVal', attrName, val);
                Livewire.emit('updateVal', attrName, val);
            Livewire.emit('refreshFilters', attrName, val);
        }

    </script>
    <script src="/tenant-resources/js/form-functions.js"></script>
@endpush
