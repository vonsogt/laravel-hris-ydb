<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $li_1 }}</a></li>
                    @if(isset($title) && !isset($li_end))
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    @elseif(isset($title) && isset($li_end))
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $title }}</a></li>
                        <li class="breadcrumb-item active">{{ $li_end }}</li>
                    @endif
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
