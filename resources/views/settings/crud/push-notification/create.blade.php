<x-base-layout :page="$page">

    {{ theme()->getView('settings/crud/push-notification/_navbar', ['class' => 'mb-5 mb-xl-10', 'info' => $info]) }}


    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <div class="card-body pt-6">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_tempalate_details" aria-expanded="true"
                        aria-controls="kt_tempalate_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">{{ __('Create Push Notification Template') }}</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <div id="kt_tempalate_details" class="collapse show">
                        {{ Form::open(['url' => 'settings/crud/push-notification','method' => 'post','id' => 'kt_template_value_form','class' => 'form']) }}
                        @include('settings.crud.push-notification._form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>



    @section('scripts')
        <script>
            function insertAtCaret(areaId, text) {
                var txtarea = document.getElementById(areaId);
                if (!txtarea) {
                    return;
                }

                var scrollPos = txtarea.scrollTop;
                var strPos = 0;
                var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
                    "ff" : (document.selection ? "ie" : false));
                if (br == "ie") {
                    txtarea.focus();
                    var range = document.selection.createRange();
                    range.moveStart('character', -txtarea.value.length);
                    strPos = range.text.length;
                } else if (br == "ff") {
                    strPos = txtarea.selectionStart;
                }

                var front = (txtarea.value).substring(0, strPos);
                var back = (txtarea.value).substring(strPos, txtarea.value.length);
                txtarea.value = front + text + back;
                strPos = strPos + text.length;
                if (br == "ie") {
                    txtarea.focus();
                    var ieRange = document.selection.createRange();
                    ieRange.moveStart('character', -txtarea.value.length);
                    ieRange.moveStart('character', strPos);
                    ieRange.moveEnd('character', 0);
                    ieRange.select();
                } else if (br == "ff") {
                    txtarea.selectionStart = strPos;
                    txtarea.selectionEnd = strPos;
                    txtarea.focus();
                }

                txtarea.scrollTop = scrollPos;
            }



        </script>

        <script src="{{ URL::asset('pages/settings/crud/push-notification/create.js')}}"></script>
@endsection

</x-base-layout>
