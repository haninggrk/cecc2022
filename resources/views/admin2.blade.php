<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

</body>

</html>


<div class="px-4 sm:px-6 lg:px-8">

    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">

                            <tr class="divide-x divide-gray-200">
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama
                                    Team</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Email Team</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Status</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Score</th>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-6">Time
                                    Taken</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($allUser as $user)
                                <tr class="divide-x divide-gray-200">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $user->name }}</td>
                                    <td class="whitespace-nowrap p-4 text-sm text-gray-500">{{ $user->email }}</td>
                                    <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                        @if ($user->is_penyisihan_done == 1)
                                            <span class="text-green-500">Selesai Mengerjakan</span>
                                        @elseif($user->is_penyisihan_done == 0 && $user->start_penyisihan != null)
                                        @if(\Carbon\Carbon::parse($user->timetaken_penyisihan)->diffInSeconds($user->start_penyisihan)>7200)
                                        <span class="text-green-500">Selesai Mengerjakan</span>
                                        @else
                                        <span class="text-red-500">Sedang Mengerjakan</span>
                                        @endif
                                        @else
                                        <span class="text-black">Belum Mengerjakan</span>

                                        @endif
                                    </td>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                        @php($benar = 0)
                                        @php($salah = 0)
                                        @foreach ($user->answerPenyisihans as $answer)

                                        @if($answer != null)
                                            @if ($answer->jawaban == $answer->aaa->jawaban)
                                                @php($benar++)
                                            @else
                                                @php($salah++)
                                            @endif
                                            @endif
                                        @endforeach
                                        {{ $benar * 2 }}

                                    </td>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-6">
                                        @if(true)
                                        @if(\Carbon\Carbon::parse($user->timetaken_penyisihan)->diffInSeconds($user->start_penyisihan)>7200)
                                        2:00:00
                                        @else
                                        {{ \Carbon\Carbon::parse($user->timetaken_penyisihan)->diff($user->start_penyisihan)->format('%h:%i:%s')}}
                                        @endif
                                        @endif
                                    </td>
                            @endforeach

                            </tr>

                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
