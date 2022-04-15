<script src='https://meet.jit.si/external_api.js'></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sala') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div id="meet" class="w-full h-full"></div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const domain = 'meet.jit.si';
    const options = {
        roomName: 'LaravelJitsiExample',
        // width: 800,
        // height: 700,
        parentNode: document.querySelector('#meet'),
        lang: 'es',
        userInfo: {
            email: @json(auth()->user()->email),
            displayName: @json(auth()->user()->name),
        }
    };
    const api = new JitsiMeetExternalAPI(domain, options);
    // api.dispose();
</script>