

<x-base-layout :page="$page">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            {{ theme()->getView('schools/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info, 'school' => $school)) }}

        </div>
    </div>
    {{ theme()->getView('schools/_profile_info', array('class' => 'mb-5 mb-xl-10', 'info' => $info, 'school' => $school)) }}
    @section('scripts')
        <script src="{{ URL::asset('pages/settings/users/view.js')}}"></script>
    @endsection
</x-base-layout>
