@php
    $nav = array(
        array('title' => 'Overview', 'view' => 'schools/'. $school->id),
        array('title' => 'Tickets', 'view' => 'schools/'. $school->id .'/tickets')
    );
@endphp


<div class="card {{$class}}">
    <div class="card-body flex-column p-5">
        <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
            <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                <h1 class="fw-bolder fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10"> {{$school->EnglishName}} </h1>
                <div class="position-relative w-100">
                    <span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
                        @include('common._search-icon')
                    </span>
                    <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question" />
                </div>
            </div>
            <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                <img src="{{asset(theme()->getIllustrationUrl('20.png'))}}" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
            </div>
        </div>
        <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
            <ul class="nav flex-wrap border-transparent fw-bolder">
                @foreach($nav as $each)
                    <li class="nav-item">
                        <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}" href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                            {{ $each['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bolder fs-8 fs-lg-base">Create Ticket</a> --}}
        </div>
    </div>
</div>
