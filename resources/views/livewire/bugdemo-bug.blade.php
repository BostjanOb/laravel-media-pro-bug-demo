<div>
    <form method="POST" wire:submit.prevent="submit">
        <x-grid>
            @csrf

            <x-field label="name">
                <x-input name="name" autocomplete="off" id="name" wire:model.debounce.500ms="name"
                         placeholder="Your first name"/>
            </x-field>
            <x-field label="file">
                <x-media-library-attachment name="media" rules="mimes:png,jpeg,pdf"/>
            </x-field>

            @include('uploads.bug-demo.partial')

            <x-button dusk="submit">Submit</x-button>
        </x-grid>
    </form>
</div>
