

<x-base-layout :page="$page">
    {{ theme()->getView('students/view/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info, 'student' => $student)) }}

    {{ theme()->getView('students/view/_profile_info', array('class' => 'mb-5 mb-xl-10', 'info' => $info, 'student' => $student)) }}



   {{-- {{ theme()->getView('settings/profile/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }} --}}


</x-base-layout>
