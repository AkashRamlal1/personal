@extends('layouts.master')

@section("content")
    <h1 class="text-center text-2xl mb-3 mt-3">dit zijn mijn projecten</h1>
    <table class="mr-auto ml-auto w-2/6 border-2 border-gray-500">
        <thead>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Datum</th>
            <th class="border border-gray-400 px-4 py-2">Naam</th>
            <th class="border border-gray-400 px-4 py-2">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr class="text-center">
                <td class="border border-gray-400 px-4 py-2">{{ $project->datum }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $project->naam }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $project->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <section class="flex justify-center mt-8">
        <form action="{{ url('form') }}" method="post" class="border border-gray-400 p-6 rounded-lg w-full max-w-2xl flex flex-wrap items-center justify-between">
            @csrf
            <div class="w-full mb-4">
                <h2 class="text-lg font-semibold text-center">Project Formulier</h2>
            </div>
            <div class="flex flex-wrap w-full mb-4">
                <input name="assignment" type="text" placeholder="opdracht" class="border border-gray-300 px-4 py-2 m-2 w-full md:w-auto flex-grow">
                <input name="name" type="text" placeholder="naam" class="border border-gray-300 px-4 py-2 m-2 w-full md:w-auto flex-grow">
                <input name="company" type="text" placeholder="bedrijf" class="border border-gray-300 px-4 py-2 m-2 w-full md:w-auto flex-grow">
                <input name="deadline" type="date" placeholder="deadline" class="border border-gray-300 px-4 py-2 m-2 w-full md:w-auto flex-grow">
                <input name="difficulty" type="text" placeholder="punten" class="border border-gray-300 px-4 py-2 m-2 w-full md:w-auto flex-grow">
            </div>
            <div class="w-full text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </section>

    <table class="mr-auto ml-auto w-2/6 border-2 border-gray-500 mt-10 mb-10">
        <thead>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Datum</th>
            <th class="border border-gray-400 px-4 py-2">Naam</th>
            <th class="border border-gray-400 px-4 py-2">Status</th>
            <th class="border border-gray-400 px-4 py-2">deadline</th>
            <th class="border border-gray-400 px-4 py-2">moeilijkheid score</th>

        </tr>
        </thead>
        <tbody>
        @foreach($visitors as $request)
            <tr class="text-center">
                <td class="border border-gray-400 px-4 py-2">{{ $request->assignment}}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $request->name}}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $request->company}}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $request->deadline}}</td>
                <td class="border border-gray-400 px-4 py-2">{{ $request->difficulty}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

