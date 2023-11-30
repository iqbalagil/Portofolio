@extends('layout.form')
@section('isi')
<div class="text-[45px] flex justify-center mx-auto sm:max-w-none pb-20 pt-[200px]">
    <div class="inline-block font-[700] text-black dark:text-white">
        <h1>PROJECT</h1>
    </div>
</div>
<div class="md:grid inline-block grid-rows-1 mx-auto gap-[20px] p-[10px] grid-cols-2 md:w-[1080px]">
    <div
        class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[8px] rounded-xl h-[172px] max-w-[301px] md:h-[294px] md:max-w-[512px]">
        <div class="rounded-lg overflow-hidden h-[156px] md:h-[278px] bg-gray-800 dark:bg-gray-800">
            <div x-data="{ showDisplay1: false }">
                <div
                    @mouseover="showDisplay1 = true"
                    @mouseout="showDisplay1 = false"
                >
                    <img src="{{ asset('asset/pj1.png') }}" class="w-full">
                    <div
                        x-show="showDisplay1"
                        class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50"
                    >
                        <button class="px-4 py-2 text-white rounded-md bg-rose-500 hover:bg-rose-700 ">Link</button>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative mx-auto bg-gray-900 dark:bg-gray-700 rounded-b-xl rounded-t-sm h-[17px] max-w-[351px] md:h-[21px] md:max-w-[597px]">
            <div
                class="absolute left-1/2 top-0 -translate-x-1/2 rounded-b-xl w-[56px] h-[5px] md:w-[96px] md:h-[8px] bg-gray-800">
            </div>
        </div>
    </div>
    <div
        class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[8px] rounded-xl h-[172px] max-w-[301px] md:h-[294px] md:max-w-[512px]">
        <div class="rounded-lg overflow-hidden h-[296px] md:h-[278px] bg-gray-800 dark:bg-gray-800">
            <div x-data="{ showDisplay2: false }">
                <div
                    @mouseover="showDisplay2 = true"
                    @mouseout="showDisplay2 = false"
                >
                    <img src="{{ asset('asset/pj2r.png') }}" class="w-full">
                    <div
                        x-show="showDisplay2"
                        class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50"
                    >
                        <a target="_blank" href="https://github.com/iqbalagil/Aritmatik"><button class="px-4 py-2 text-white rounded-md bg-rose-500 hover:bg-rose-700">Link</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="relative mx-auto bg-gray-900 dark:bg-gray-700 rounded-b-xl rounded-t-sm h-[17px] max-w-[351px] md:h-[21px] md:max-w-[597px]">
            <div
                class="absolute left-1/2 top-0 -translate-x-1/2 rounded-b-xl w-[56px] h-[5px] md:w-[96px] md:h-[8px] bg-gray-800">
            </div>
        </div>
    </div>
</div>
@endsection
