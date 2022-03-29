

<x-base-layout :page="$page">

    {{ theme()->getView('settings/profile/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('settings/profile/_profile_info', array('class' => 'mb-5 mb-xl-10', 'info' => $info, 'user' => $user)) }}


    {{ theme()->getView('settings/profile/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}


</x-base-layout>
