<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Онлайн-запись
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow text-white">
                <form method="POST" action="{{ route('appointments.store') }}">
                    @csrf

                    @if($errors->any())
                        <div class="mb-4 p-4 bg-red-600 text-white rounded">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="mb-4">
                        <label class="block mb-2">Выберите услугу</label>

                        <select
                            name="service_id"
                            class="w-full rounded mt-2 p-2 bg-gray-900 text-white border border-gray-600"
                            required
                        >
                            <option value="">-- Выберите услугу --</option>

                            @foreach($services as $service)
                                <option value="{{ $service->id }}">
                                    {{ $service->name }}
                                    @if(isset($service->duration_min))
                                        — {{ $service->duration_min }} мин.
                                    @elseif(isset($service->duration))
                                        — {{ $service->duration }} мин.
                                    @endif
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Дата и время приёма</label>

                        <input
                            type="datetime-local"
                            name="appointment_time"
                            min="{{ now()->format('Y-m-d\TH:i') }}"
                            class="w-full rounded mt-2 p-2 bg-gray-900 text-white border border-gray-600"
                            style="color-scheme: dark;"
                            required
                        >

                        <p class="text-sm text-gray-400 mt-2">
                            Запись доступна только с 09:00 до 18:00.
                        </p>
                    </div>

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white"
                    >
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>