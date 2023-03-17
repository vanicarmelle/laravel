<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('STUDENT INFORMATION') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route ('add-student')}}">Add Student Information</a>
                <h6>List of Students</h6>
            <table class="border-separate border-spacing-5">
                    <thead>
                        <tr>
                        <th>ID No.</th>
                        <th>Full Name</th>
                        <th>Course and Year</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($studentInfo as $stuinfo)
                                <tr>
                                    <td>{{ $stuinfo->idNo}}</td>
                                    <td>{{ $stuinfo->firstName }} {{$stuinfo->middleName}} {{$stuinfo->lastName}}</td>
                                    <td>{{ $stuinfo->course }} - {{$stuinfo->year}}</td>
                                    <td>{{  date("F j, Y", strtotime($stuinfo->birthDate)) }}</td>
                                    <td>{{ $stuinfo->gender }}</td>
                                   <td>
                                    <h1>testest</h1>
                

                                   </td>
                                </tr>
                            @endforeach
                </tbody>
            </table> 
            <a href="{{ route('students')}}">back</a>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
