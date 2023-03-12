@extends('template.default')

@section('product')
@foreach ($product as $data)
<section class="projects-section bg-light" id="projects">
        @if ($loop->odd)
        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src={{ $data ['img'] }} alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">{{ $data ['type']}}</h4>
                            <p class="mb-0 text-white-50">{{ $data ['desc']}}</p>
                            <hr class="d-none d-lg-block mb-0 ms-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src={{ $data ['img'] }} alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">{{ $data ['type']}}</h4>
                            <p class="mb-0 text-white-50">{{ $data ['desc']}}</p>
                            <hr class="d-none d-lg-block mb-0 me-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endif
</section>
@endforeach
@endsection
