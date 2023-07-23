{{--TODO: Fix Large and Small layouts proper formating--}}

<x-app-layout>
    <x-main-layout>
        <x-card class=" flex h-10 w-full mt-4 items-center">
            <x-dropdown align="right" width="48" class="right-0">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-m leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <p class="font-bold">Filter</p>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content" >
                    <x-dropdown-link href="#">
                        Hot
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        Top
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        New
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        Rising
                    </x-dropdown-link>

                    </form>
                </x-slot>
            </x-dropdown>
        </x-card>
        <x-feed :posts="$posts" />
    </x-main-layout>
</x-app-layout>
