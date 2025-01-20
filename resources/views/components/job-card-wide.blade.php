@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-emp-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-2xl mt-2 group-hover:text-green-500 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank" >
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>

    </div>
    <div class="">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
