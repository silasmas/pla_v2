
@forelse ($presence as $b)
<div class="modal fade modal-detail" id="modal-detail-office{{ $b->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="mb-3 d-flex align-items-center mb-lg-4">
                <div class="avatar-team" style="flex: 0 0 auto">
                    <img src="{{ asset('storage/'.$b->photo) }}" alt="image"
                        class="img-fluid">
                </div>
                <div class="ml-2 info-name-team ml-lg-3">
                    <div class="mb-1 d-flex align-items-center">
                        <h4 class="mb-0">{{ $b->titre}}</h4>
                    </div>
                    {{-- <p class="mb-0">{{ $b->}}</p> --}}
                    <div class="flex-wrap mb-1 d-flex location align-items-center">
                        <a href="#">
                            <p class="mb-0">
                                <i class="fa-solid fa-phone"></i>
                                {{ $b->telephone}}
                            </p>
                        </a>
                        <a href="#">
                            <p class="mb-0">
                                <i class="fa-solid fa-envelope"></i>
                                {{ $b->email}}
                            </p>
                        </a>
                        <a href="#">
                            <p class="mb-0">
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $b->adresse}}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mb-2 block-biographie mb-lg-3">
                <ul class="mb-4 nav nav-tabs mb-lg-2 aos-init aos-animate" id="tabs-posts" role="tablist"
                    data-aos="fade-up" data-aos-duration="700">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 14px" id="home-tab" data-toggle="tab"
                            href="#detail" role="tab" aria-controls="popular" aria-selected="true">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 14px" id="profile-tab" data-toggle="tab" href="#team"
                            role="tab" aria-controls="featured" aria-selected="false">Teams</a>
                    </li>
                    <!--nav-tabs-->
                </ul>
                <div class="tab-content aos-init aos-animate" id="tabs-posts-content" data-aos="fade-up"
                    data-aos-duration="700">
                    <div class="tab-pane fade active show" id="detail" role="tabpanel">
                       <p>
                        {{ $b->detail}}
                    </p>
                    </div>
                    <div class="tab-pane fade" id="team" role="tabpanel">
                        <div class="row">
                            @forelse ($b->avocat as $t)
                            <div class="mb-2 col-lg-4">
                                <div class="p-2 text-center content-team">
                                    <a href="#">
                                        <div class="mb-1 avatar-team sm">
                                            <img src="{{ asset('storage/'.$t->photo) }}" alt="image"
                                            class="img-fluid">
                                        </div>
                                    </a>
                                    <a href="#" class="d-block">
                                        <h5 class="mb-0" style="line-height: 100%">{{ $t->prenom." ".$t->nom }}</h5>
                                        <p style="font-size: 12px" class="mb-0">
                                        {{ $t->fonction->fonction }}
                                    </p>
                                    </a>
                                </div>
                            </div>

                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@empty

@endforelse

