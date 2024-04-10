@section('content')
    @extends('site.layout.app')
    <main>

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Terms And Condition</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayTerms') }}">Terms And Condition</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>Terms And Condition</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="content">
                            {!! $term->terms !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @stop
