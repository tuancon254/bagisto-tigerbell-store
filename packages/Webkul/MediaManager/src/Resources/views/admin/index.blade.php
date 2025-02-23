<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        @lang('mediamanager::app.media.index.title')
    </x-slot>

    @push('meta')
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @endpush
    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <p class="py-3 text-xl font-bold text-gray-800 dark:text-white">
            @lang('mediamanager::app.media.index.title')
        </p>
    </div>
    {{-- <div id="fm" class="h-full"></div> --}}
    <div class="input-group">
        <input type="text" id="image_label" class="form-control" name="image" aria-label="Image"
            aria-describedby="button-image">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }
        </script>
    @endpush
</x-admin::layouts>
