<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="Title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="R40,000" />
        <x-forms.input label="Location" name="location" placeholder="Stellenbosch, South Africa" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="ceo, education, et" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
