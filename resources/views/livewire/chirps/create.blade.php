<div>
    @guest
    <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ __('Create your account to publish on chirper') }}</p>
    </div> 
    @endguest
   
    @auth
    <form wire:submit="store"> 
        <textarea
            wire:model="message"
            placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
    </form>  
    @endauth
    
</div>
