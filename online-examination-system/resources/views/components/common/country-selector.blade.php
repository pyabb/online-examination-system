<div class="modal fade" id="country-selector">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">Choose Country</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                            <span class="country-selector">
                                <img alt="" src="{{ asset('assets/images/flags/us_flag.jpg') }}" class="me-3 language">
                            </span>USA
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector">
                                <img alt="" src="{{ asset('assets/images/flags/spain_flag.jpg') }}" class="me-3 language">
                            </span>Spain
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
