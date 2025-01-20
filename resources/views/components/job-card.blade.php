
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Employer name</div>

    <div class="py-8">
        <h3 class="group-hover:text-green-500 text-xl font-bold transition-colors duration-300">Job title</h3>
        <p class="text-sm mt-4">Salary</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
        </div>

        <x-emp-logo :width="50"/>
    </div>
</x-panel>
