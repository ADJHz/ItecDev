@props(['title', 'icon' => 'default'])

<div
    {{ $attributes->merge(['class' => 'p-6 bg-white rounded-xl border border-gray-100 shadow-sm dark:bg-gray-800 dark:border-gray-700 hover:shadow-md transition-shadow group']) }}>
    <div
        class="flex justify-center items-center mb-4 w-12 h-12 rounded-lg bg-blue-50 dark:bg-blue-900/30 group-hover:bg-blue-600 transition-colors">
        @if ($icon === 'web')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">language</span>
        @elseif($icon === 'support')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">support</span>
        @elseif($icon === 'chart')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">analytics</span>
        @elseif($icon === 'consulting')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">support_agent</span>
        @elseif($icon === 'training')
            <span class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">school</span>
        @elseif($icon === 'infrastructure')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">cloud_queue</span>
        @elseif($icon === 'database')
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">database</span>
        @else
            <span
                class="material-symbols-outlined text-blue-600 dark:text-blue-300 group-hover:text-white">lightbulb</span>
        @endif


    </div>
    <h3 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h3>
    <p class="font-light text-gray-500 dark:text-gray-400">
        {{ $slot }}
    </p>
</div>
