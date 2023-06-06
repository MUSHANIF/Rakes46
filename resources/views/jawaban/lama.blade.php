@extends('layouts.dashboard')
@section('isi')
    <div class="main-content">
        <main>
            @if ($jawabans->isNotEmpty())
                <div class="swiper">

                    <div class="swiper-wrapper">
                        {{-- Pertanyaan Type 1 Group A --}}
                        @if (!empty($jawabans['1']['a']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2 class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">REKAM
                                            MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <h3 class="text-capitalize -mt-2 mb-3 text-xl md:text-2xl">Type 1</h3>
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    A</h3>
                                                @foreach ($jawabans['1']['a'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group B --}}
                        @if (!empty($jawabans['1']['b']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    B</h3>
                                                @foreach ($jawabans['1']['b'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group C --}}
                        @if (!empty($jawabans['1']['c']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    C</h3>
                                                @foreach ($jawabans['1']['c'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group D --}}
                        @if (!empty($jawabans['1']['d']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    D</h3>
                                                @foreach ($jawabans['1']['d'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group E --}}
                        @if (!empty($jawabans['1']['e']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    E</h3>
                                                @foreach ($jawabans['1']['e'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group F --}}
                        @if (!empty($jawabans['1']['f']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    F</h3>
                                                @foreach ($jawabans['1']['f'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak</p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 1 Group G --}}
                        @if (!empty($jawabans['1']['g']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    G</h3>
                                                @foreach ($jawabans['1']['g'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            @if ($jawaban->jawaban == 'false')
                                                                <p class="text-danger mr-1.5 text-sm md:text-base">Tidak
                                                                </p>
                                                            @else
                                                                <p class="text-primary ml-1.5 text-sm md:text-base">Ya</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Pertanyaan Type 2 Group A --}}
                        @if (!empty($jawabans['2']['a']))
                            <div class="swiper-slide">
                                <div href="#"
                                    class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                                    <div>
                                        <h2
                                            class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                            REKAM MEDIS KESEHATAN SISWA
                                            <br>
                                            SMKN 46 JAKARTA
                                        </h2>
                                        <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                            {{ $tahun }}</h5>
                                        <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                                    </div>

                                    <div>
                                        <div class="ml-4 text-black">
                                            <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Type 2
                                            </h3>
                                            <div class="mb-8">
                                                <h3 class="text-capitalize -mt-2 mb-3 text-xl text-black md:text-2xl">Group
                                                    A</h3>
                                                @foreach ($jawabans['2']['a'] as $jawaban)
                                                    <div class="mb-3 flex justify-between">
                                                        <h5 class="text-base font-normal md:text-xl">
                                                            {{ $jawaban->pertanyaan->pertanyaan }}</h5>
                                                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                                                            <p class="ml-1.5 text-sm !text-blue-600 md:text-base">
                                                                {{ $jawaban->jawaban }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            @else
                <div id="error">
                    <div href="#"
                        class="block max-w-full rounded-lg border border-gray-200 bg-white p-6 shadow-md hover:bg-gray-100">
                        <div>
                            <h2 class="mb-2 text-center text-xl tracking-tight text-gray-900 md:text-3xl">
                                REKAM MEDIS KESEHATAN SISWA
                                <br />
                                SMKN 46 JAKARTA
                            </h2>
                            <h5 class="text-center text-lg font-semibold tracking-tight text-gray-900">HISTORY
                                {{ $tahun }}</h5>
                            <div class="border-bottom-0 mb-4 border border-slate-800"></div>
                            <h6 class="text-secondary text-center text-sm md:text-base">Kamu Tidak Memiliki Jawaban Tahun
                                {{ $tahun }}!</h6>
                        </div>
                    </div>
                </div>
            @endif
        </main>
    </div>

    <script>
        window.onload = function() {
            const swiper = new Swiper(".swiper", {
                spaceBetween: 50,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
            });
        }
    </script>
@endsection
