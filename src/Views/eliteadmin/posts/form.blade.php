@extends($layout)

@push('styles')
<link href="{{ asset('assets/eliteadmin/plugins/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/eliteadmin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css') }}" />
@endpush

@push('scripts')
<script src="{{ asset('assets/eliteadmin/plugins/bower_components/switchery/dist/switchery.min.js') }}"></script>
<script src="{{ asset('assets/eliteadmin/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ asset('assets/eliteadmin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.textarea_editor').wysihtml5();
    });
</script>
<script>
    jQuery(document).ready(function () {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function () {
            new Switchery($(this)[0], $(this).data());
        });
    });
</script>
@endpush

@section('content')
<form>
    <div class="row">
        <div class="col-md-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Básico</h3>
                <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">

                        <div class="form-group">
                            <label for="title">Título</label>
                            <div class="input-group">                            
                                <input name="title" type="text" class="form-control" placeholder="Título"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <div class="input-group">                            
                                <input name="slug"  type="text" class="form-control" placeholder="Slug"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="white-box">
                <h3 class="box-title m-b-0">Configurações da postagem</h3>
                <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">

                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group">
                                <div class="switchery-demo m-b-30">
                                    <input name="status" type="checkbox" checked class="js-switch" data-color="#99d683" value="1"/>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Conteúdo</h3>
                <p class="text-muted m-b-30">Bootstrap html5 editor</p>
                <form method="post">
                    <div class="form-group">
                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
@endsection