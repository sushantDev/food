@extends('backend.layouts.app')

@section('content')
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1">
            <div class="md-card">
                <div class="md-card-toolbar">
                    <div class="md-card-toolbar-actions">
                        <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                        <i class="md-icon material-icons">&#xE5D5;</i>
                        <div class="md-card-dropdown" data-uk-dropdown>
                            <i class="md-icon material-icons">&#xE5D4;</i>
                            <div class="uk-dropdown uk-dropdown-flip">
                                <ul class="uk-nav">
                                    <li><a href="#">Action 1</a></li>
                                    <li><a href="#">Action 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h1 class="md-card-toolbar-heading-text">
                        Dashboard
                    </h1>
                </div>
                <div class="md-card-content">
                    You are logged in!
                    <div class="md-card-fullscreen-content">
                        <h4 class="heading_a uk-margin-bottom">You are Logged in as Admin.!!!</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
