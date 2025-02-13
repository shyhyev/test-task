<div x-cloak x-show="isOpen" x-data="{ isOpen: false}" x-on:open-modal.window="isOpen = true;" class="fixed inset-0 z-50 flex items-center transition-all">
    <div x-transition.opacity x-show="isOpen" class="absolute inset-0" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.50)0%, rgba(0, 0, 0, 0.50)100%)"></div>
    <div class="container mx-auto flex items-center justify-center w-full">
        <div class="bg-white w-[32rem] relative rounded-2xl mx-auto p-5 pt-8 sm:p-10" x-show="isOpen" @click.away="isOpen = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <img src="{{ asset("assets/icons/x.svg") }}" class="absolute right-2 top-2 w-5 h-5 sm:right-5 sm:top-5 sm:w-6 sm:h-6 cursor-pointer" @click="isOpen = false">
            <div>
                <livewire:auth-form/>
            </div>
        </div>
    </div>
</div>
