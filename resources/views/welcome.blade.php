@extends('_layout.cork');
@section('content')
<div class="fq-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 align-self-center order-md-0 order-1">
                                <div class="faq-header-content">
                                    <h1 class="mb-4">Добредојдовте во Леонид Библиотека ! </h1>
                                    <div class="row">
                                        <div class="col-lg-5 mx-auto">
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">Слободно побарајте кои книги ги имаме достапно, прочитајте повеќе <br/>
                                                информации за авторите и нашата библиотека ! 
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq container">

                    <div class="faq-layouting layout-spacing">

                        <div class="kb-widget-section">

                            <div class="row justify-content-center">

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                            </div>
                                            <a href="http://localhost/biblioteka-app/public/books"><h5 class="card-title mb-0">Сите наши книги</h5></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            </div>
                                            <a href="http://localhost/biblioteka-app/public/authors"><h5 class="card-title mb-0">Сите автори</h5></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                            </div>
                                            <a href="http://localhost/biblioteka-app/public/biblioteka/book/1"><h5 class="card-title mb-0">Најпозната книга сега</h5>
                                        </div>
                                    </div>
                                </div>


                        <div class="fq-tab-section">
                            <div class="row">
                                <div class="col-md-12">

                                    <h2 class="text-center">Повеќе информации за нашата библиотека</h2>

                                    <div class="accordion" id="pagesKnowledgeBase">
                                        <div class="card">
                                            <div class="card-header" id="fqheadingOne">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseOne" aria-expanded="false" aria-controls="fqcollapseOne">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">Каде се наоѓа?</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">65</span></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne" data-bs-parent="#pagesKnowledgeBase">
                                                <div class="card-body">
                                                    <p>Се наоѓа на улица Октомвриска Револуција 12/2 Куманово, Македонија.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="fqheadingTwo">
                                                <div class="mb-0" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapseTwo" aria-expanded="true" aria-controls="fqcollapseTwo">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> <span class="faq-q-title">Каде можам да нарачам книга?</span> <div class="like-faq"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> <span class="faq-like-count">20</span></div>
                                                </div>
                                            </div>
                                            <div id="fqcollapseTwo" class="collapse show" aria-labelledby="fqheadingTwo" data-bs-parent="#pagesKnowledgeBase">
                                                <div class="card-body">
                                                    <p>Сите тие опции ќе бидат достапни на нашата страна за многу кратко време, Благодариме.</p>
                                                </div>
                                            </div>
                                        </div>

                                    

@endsection