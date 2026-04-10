@extends('Frontend.Layouts.main')

@section('meta_title', $project->title . ' - Portfolio Details')
@section('section')
    <style>
        .portfolio-details.section {
            background: transparent !important;
        }

        /* also fix the main background if its white */
        .main {
            background: transparent !important;
        }

        /* swiper pagination dots to match theme */
        .swiper-pagination-bullet {
            background: #a0a0b0 !important;
        }

        .swiper-pagination-bullet-active {
            background: #7c3aed !important;
        }
    </style>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">{{ $project->title }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="/#portfolio">Portfolio</a></li>
                        <li class="current">{{ $project->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    {{-- Image Slider --}}
                    <div class="col-lg-8">
                        @if ($project->images->count() > 0)
                            <div class="portfolio-details-slider swiper init-swiper">
                                <script type="application/json" class="swiper-config">
                                    {
                                        "loop": true,
                                        "speed": 600,
                                        "autoplay": { "delay": 5000 },
                                        "slidesPerView": "auto",
                                        "pagination": {
                                            "el": ".swiper-pagination",
                                            "type": "bullets",
                                            "clickable": true
                                        }
                                    }
                                </script>
                                <div class="swiper-wrapper align-items-center">
                                    @foreach ($project->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $image->file->file_name) }}"
                                                alt="{{ $project->title }}"
                                                style="width:100%; height:420px; object-fit:cover; border-radius:12px;">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        @else
                            <div class="d-flex align-items-center justify-content-center rounded"
                                style="height:420px; background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px;">
                                <p style="color:#666;">No images available</p>
                            </div>
                        @endif
                    </div>

                    {{-- Project Info --}}
                    <div class="col-lg-4 d-flex flex-column gap-4">

                        {{-- Meta Info Card --}}
                        <div data-aos="fade-up" data-aos-delay="200"
                            style="border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.08); background:#1a1a2e;">

                            <div
                                style="background:rgba(255,255,255,0.05); padding:16px 20px; border-bottom:1px solid rgba(255,255,255,0.08);">
                                <h3
                                    style="font-size:0.85rem; font-weight:600; color:#a0a0b0; margin:0; letter-spacing:1px; text-transform:uppercase;">
                                    Project Details
                                </h3>
                            </div>

                            <div style="padding:0;">

                                @if ($project->client)
                                    <div
                                        style="display:flex; align-items:center; gap:14px; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.06);">
                                        <div
                                            style="width:38px; height:38px; border-radius:8px; background:rgba(124,58,237,0.15);
                                            display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                            <i class="bi bi-person-fill" style="color:#7c3aed; font-size:1rem;"></i>
                                        </div>
                                        <div>
                                            <p
                                                style="font-size:0.68rem; color:#666; margin:0; text-transform:uppercase; letter-spacing:0.8px;">
                                                Client</p>
                                            <p style="font-size:0.9rem; font-weight:600; color:#e0e0e0; margin:0;">
                                                {{ $project->client }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($project->project_date)
                                    <div
                                        style="display:flex; align-items:center; gap:14px; padding:14px 20px; border-bottom:1px solid rgba(255,255,255,0.06);">
                                        <div
                                            style="width:38px; height:38px; border-radius:8px; background:rgba(22,163,74,0.15);
                                            display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                            <i class="bi bi-calendar-event-fill" style="color:#16a34a; font-size:1rem;"></i>
                                        </div>
                                        <div>
                                            <p
                                                style="font-size:0.68rem; color:#666; margin:0; text-transform:uppercase; letter-spacing:0.8px;">
                                                Project Date</p>
                                            <p style="font-size:0.9rem; font-weight:600; color:#e0e0e0; margin:0;">
                                                {{ \Carbon\Carbon::parse($project->project_date)->format('d M, Y') }}
                                            </p>
                                        </div>
                                    </div>
                                @endif

                                @if ($project->project_url)
                                    <div style="display:flex; align-items:center; gap:14px; padding:14px 20px;">
                                        <div
                                            style="width:38px; height:38px; border-radius:8px; background:rgba(234,88,12,0.15);
                                            display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                            <i class="bi bi-globe2" style="color:#ea580c; font-size:1rem;"></i>
                                        </div>
                                        <div style="min-width:0; flex:1;">
                                            <p
                                                style="font-size:0.68rem; color:#666; margin:0; text-transform:uppercase; letter-spacing:0.8px;">
                                                Live URL</p>
                                            <a href="{{ $project->project_url }}" target="_blank"
                                                style="font-size:0.9rem; font-weight:600; color:#7c3aed; text-decoration:none;
                                                display:block; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                                                {{ $project->project_url }}
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>

                        {{-- Description Card --}}
                        @if ($project->description)
                            <div data-aos="fade-up" data-aos-delay="300"
                                style="border-radius:12px; border:1px solid rgba(255,255,255,0.08); background:#1a1a2e; overflow:hidden;">

                                <div
                                    style="background:rgba(255,255,255,0.05); padding:16px 20px; border-bottom:1px solid rgba(255,255,255,0.08);">
                                    <h3
                                        style="font-size:0.85rem; font-weight:600; color:#a0a0b0; margin:0; letter-spacing:1px; text-transform:uppercase;">
                                        About this Project
                                    </h3>
                                </div>

                                <div style="padding:20px; font-size:0.875rem; color:#a0a0b0; line-height:1.8;">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        @endif

                        {{-- Back Button --}}
                        <div data-aos="fade-up" data-aos-delay="400">
                            <a href="/#portfolio"
                                style="display:inline-flex; align-items:center; gap:8px; font-size:0.875rem;
                                color:#7c3aed; text-decoration:none; font-weight:600; padding:10px 0;">
                                <i class="bi bi-arrow-left-circle-fill" style="font-size:1.1rem;"></i>
                                Back to Portfolio
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
