@forelse ($teams as $t)
    @php

        // Vérifie si la photo existe réellement dans le disque public
        $photoExists = $t->photo && Storage::disk('public')->exists($t->photo);

        // Génère l'URL de l'image selon la logique suivante :
        $photoUrl = $photoExists
            ? asset('storage/' . $t->photo)
            : match(true) {
                $t->fonction->fonction != 'Assistant administratif' ||
            ($t->fonction->fonction != 'Administrative assistant' && $t->genre === 'H' )=> asset('assets/images/p2.png'),
                $t->fonction->fonction != 'Assistant administratif' ||
            ($t->fonction->fonction != 'Administrative assistant' && $t->genre === 'F') => asset('assets/images/p3.png'),
                default => asset('assets/images/avatar-default.png'),
            };
    @endphp

    <div class="modal fade modal-detail" id="modal-detail-team{{ $t->id }}" data-backdrop="static"
        data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Bouton de fermeture -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- Profil avec avatar et informations -->
                    <div class="mb-3 d-flex align-items-center mb-lg-4">
                        <div class="avatar-team" style="flex: 0 0 auto">
                            <img src="{{ $photoUrl }}" alt="image" class="img-fluid">
                        </div>
                        <div class="ml-2 info-name-team ml-lg-3">
                            <div class="mb-1 d-flex align-items-center">
                                <h4 class="mb-0">{{ $t->nom . ' ' . $t->prenom }}</h4>
                            </div>
                            <p class="mb-0">{{ $t->fonction->fonction }}</p>

                            <!-- Affiche les adresses de tous les bureaux -->
                            @forelse ($t->bureau as $b)
                                <div class="flex-wrap mb-1 d-flex location align-items-center">
                                    <a href="">
                                        <p class="mb-0">
                                            <i class="fa-solid fa-location-dot"></i>
                                            {{ $b->adresse }}
                                        </p>
                                    </a>
                                </div>
                            @empty
                            @endforelse

                            <br>

                            <!-- Lien de téléchargement du CV s'il existe -->
                            @if ($t->pdfbio)
                                <a href="#" class="link" onclick="downloadCV(this)"
                                    data-file="{{ asset('storage/' . $t->pdfbio) }}">
                                    Télécharger CV
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Biographie -->
                    <div class="mb-2 block-biographie mb-lg-3">
                        <h6>Biographie</h6>
                        <p>{!! $t->biographie !!}</p>
                    </div>

                    <!-- Publications -->
                    <div class="block-articles">
                        <h6 class="mb-lg-3">Publications</h6>
                        <div class="row">
                            <div class="col-12">
                                @if ($t->publication->count() > 0)
                                    {{ $t->publication->count() . ' Article(s) publié(s)' }}
                                    <a href="">@lang('info.apropo.accueilBtn')</a>
                                @else
                                    {{ 'Aucune publication disponible.' }}
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@empty
@endforelse
e
