@extends('layouts.template')
@section('style')
    <link href="{{ asset('assets/css/blog.css') }} " rel="stylesheet" type="text/css">
    <style>
        .btn-filter.active {
            background-color: #D01F19;
            color: white;
        }

        .team-box {
            transition: transform 0.3s;
        }

        .team-box:hover {
            transform: scale(1.02);
        }

        .btn-filter {
            border: 2px solid rgba(0, 0, 0, 0.08);
            border-radius: 25px;
            padding: 6px 16px;
            margin: 5px;
            /* box-shadow: 0 0 5px rgba(255, 0, 0, 0.4); */
            background-color: white;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .btn-filter.active,
        .btn-filter:hover {
            background-color: #D01F19;
            color: white;
            /* box-shadow: 0 0 10px rgba(255, 0, 0, 0.7); */
        }

        .search-bar {
            width: 50%;
            border-radius: 25px;
            padding: 10px 20px;
            border: 2px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .search-bar:focus {
            outline: none;
            border-color: darkred;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.2);
        }

        .search-bar {
            width: 50%;
            max-width: 500px;
            border-radius: 30px;
            padding: 12px 20px;
            border: 2px solid crimson;
            box-shadow: 0 0 10px rgba(220, 20, 60, 0.2);
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .search-bar:focus {
            outline: none;
            border-color: darkred;
            box-shadow: 0 0 15px rgba(220, 20, 60, 0.3);
        }

        .result-message {
            margin-top: 10px;
            padding: 8px 20px;
            border-radius: 10px;
            background-color: #ffe6e6;
            display: inline-block;
            /* box-shadow: 0 0 10px rgba(220, 20, 60, 0.1); */
        }
    </style>
@endsection
@section('contente')
    <!-- Team -->
    <section class="team-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center team_content" data-aos="fade-up">
                        <h6>Team Members</h6>
                        <h2>Team of Our Expert Lawyers</h2>
                        <p class="mx-auto mb-0 col-xl-8 col-lg-10 text-size-16">Qucimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                            sint occaecati cupiditate non provident.
                        </p>
                    </div>
                </div>
                {{-- Recherche Live --}}
                <div class="col-12">
                    <div class="mb-4 text-center">
                        <input type="text" id="searchInput" placeholder="Rechercher un avocat par son nom ou prenom ..."
                            class="form-control search-bar mx-auto">

                        <div id="resultMessage" class="result-message text-danger fw-bold fs-5">
                            <p class="mt-2">
                                <span id="resultCount" class="badge bg-danger px-3 py-2 fs-6"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog-posts blogpage-section">

            <div class="container">
                {{-- Filtres --}}
                <div class="gap-3 mb-4 d-flex justify-content-center flex-wrap mb-lg-5">
                    <button class="btn btn-filter active" data-filter="*">Tous</button>

                    {{-- Filtres par fonction --}}
                    @foreach ($fonctions as $f)
                        <button class="btn btn-filter" data-filter=".fonction-{{ Str::slug($f->fonction) }}">
                            {{ $f->fonction }}
                        </button>
                    @endforeach

                    {{-- Filtres par bureau --}}
                    @foreach ($bureaux as $b)
                        <button class="btn btn-filter" data-filter=".bureau-{{ Str::slug($b->ville) }}">
                            @lang("info.bureau.filtre") {{ $b->ville }}
                        </button>
                    @endforeach
                </div>

                {{-- Grille des avocats --}}
                <div class="row grid" data-aos="fade-up">
                    @foreach ($teams as $t)
                        @php
                            $fonctionClass = 'fonction-' . Str::slug($t->fonction->fonction);
                            $bureauxClasses = $t->bureau->map(fn($b) => 'bureau-' . Str::slug($b->ville))->implode(' ');
                        @endphp

                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item {{ $fonctionClass }} {{ $bureauxClasses }}">
                            <div class="team-box">
                                <a href="#" data-toggle="modal" data-target="#modal-detail-team{{ $t->id }}">
                                    <figure class="lawyer-image image-wrapper">
                                        <img src="{{ asset('storage/' . $t->photo) }}" alt="{{ $t->nom }}"
                                            class="img-fluid">
                                    </figure>
                                    <div class="content">
                                        <h4 class="avocat-name">{{ $t->prenom }} {{ $t->nom }}</h4>
                                        <span class="text-size-14">{{ $t->fonction->fonction }}</span>
                                        <ul class="mb-0 list-unstyled">
                                            <li class="icons"><a href="https://facebook.com" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li class="icons"><a href="https://twitter.com" target="_blank"><i
                                                        class="fab fa-x-twitter"></i></a></li>
                                            <li class="icons"><a href="https://linkedin.com" target="_blank"><i
                                                        class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </section>

    @include('parties.modalDetailTeam')
@endsection
@section('script')
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                layoutMode: 'fitRows'
            });

            function updateResultCount() {
                let visibleItems = $grid.data('isotope').filteredItems.length;
                if (visibleItems === 0) {
                    $('#resultMessage').html(
                        '<i class="fa-solid fa-triangle-exclamation me-2"></i>Aucun avocat trouvé.');
                } else {
                    $('#resultMessage').text(visibleItems + ' avocat' + (visibleItems > 1 ? 's trouvés' :
                        ' trouvé'));
                }
            }

            // Initialiser compteur
            updateResultCount();
            $('.btn-filter').on('click', function() {
                // toggle active class
                $('.btn-filter').removeClass('active');
                $(this).addClass('active');

                // combine filters
                const filters = $('.btn-filter.active')
                    .map(function() {
                        return $(this).data('filter');
                    })
                    .get()
                    .join('');

                $grid.isotope({
                    filter: filters || '*'
                });

                updateResultCount();
            });
            // Recherche live
            $('#searchInput').on('keyup', function() {
                let searchText = $(this).val().toLowerCase();
                $grid.isotope({
                    filter: function() {
                        const name = $(this).find('.avocat-name').text().toLowerCase();
                        return name.includes(searchText);
                    }
                });
                $('.btn-filter').removeClass('active');
                updateResultCount();
            });
        });
    </script>
@endsection
