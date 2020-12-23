<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-l-8 border-green-500 overflow-hidden sm:rounded-lg">
                <div class="p-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                      d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="text-md font-base text-gray-500 ml-2">
                                Awesome work! you have bought the course.
                            </div>
                        </div>
                        <svg class="w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-6">
                <div class="col-span-1 bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center">
                        <div class="flex items-center font-bold text-gray-900 text-4xl">
                            <svg class="w-10" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            <div class="ml-4">Thank you. The payment is successful.</div>
                        </div>
                        <a href="{{ route('dashboard') }}"
                           class="ml-6 bg-gray-900 text-white text-md px-5 py-2 rounded-md hover:bg-gray-800">View
                            Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
