<div class="modal fade" id="{{$args['id']}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bolder" id="{{$args['title_id']}}">{{$args['title']}}</h2>

                <a class="btn btn-icon btn-sm btn-active-icon-primary modal-close" data-id="{{$args['id']}}"" data-close-alert="{{$warrning}}">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="modal-body scroll-y mx-lg-5 my-7" id="{{$args['body_id']}}">
            </div>
            {{$slot}}
        </div>
    </div>
</div>
