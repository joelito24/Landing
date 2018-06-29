@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            {{ $form->name() }} <small>{{ $form->description() }}</small>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            @if(!isset($details))
            <div class="panel-heading">Completa los campos</div>
            @else
            <div class="panel-heading">Detalle del  {{ substr($form->name(), 0, -1) }} </div>
            @endif
            <div class="panel-body">
                @if (is_object($errors) && $errors->count()>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach

                    </ul>
                </div>
                @endif
                @if ($form->isForFiles())
                <form method="post" action="" enctype="multipart/form-data" > 
                    @else
                    <form method="post" action="" > 
                        @endif
                        @if(is_array($form->getDataShow()))
                        @foreach($form->getDataShow() as $datashow )    
                        <?php
                        if ($datashow["title"] === "lenguages") {
                            $languages = true;
                            ?>
                            <div class="{{$datashow["title"]}}">
                                <div class="title" style="cursor:pointer;">
                                    <ul class="nav nav-pills" id="ul-languages">
                                        <?php foreach (all_langs() as $lang) { ?>
                                            <li id="li-{{$lang->code}}" class="<?php echo ($lang->code === 'es') ? 'active' : ''; ?>"><a data-id="{{$lang->code}}" class="changeLang" >Campos en {{$lang->name}}</a></li>
                                        <?php } ?>
                                    </ul>       
                                </div>
                                <div class="content">
                                    <?php foreach (all_langs() as $lang) { ?>
                                        <div id="content-{{$lang->code}}" class="content-languages" style="display:<?php echo ($lang->code === 'es') ? 'block' : 'none'; ?>">
                                            <?php
                                            $fields = $form->fields($datashow["title"] . '[' . $lang->code . ']');
                                            $fields = empty($fields) ? [] : $fields;
                                            ?>
                                            @foreach ($fields as $field)
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group <?php echo (is_object($field) && get_class($field) == "App\Core\Form\Fields\Datetime") ? "datepicker" : ''; ?>">
                                                        {!! $field->before() !!}
                                                        {!! $field->render() !!}
                                                        {!! $field->after() !!}
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    <?php } ?>
                                    </ul>       
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="{{$datashow["title"]}}">                          
                                <div class="lenguages_title toggle <?php echo ($datashow["title"] === 'generals') ? 'active' : ''; ?>" id="div_field_{{$datashow["title"]}}" style="cursor:pointer;" data-parent="div_field_{{$datashow["title"]}}" data-class='toggle_field_{{$datashow["title"]}}'>

                                    @if($datashow["title"] === 'generals')
                                    <span>Datos generales</span> 
                                    @elseif($datashow["title"] === 'shipping')
                                    <span>Datos de envio</span> 
                                    @elseif($datashow["title"] === 'products')
                                    <span>Productos del pedido</span> 
                                    @elseif($datashow["title"] === 'productsRelated')
                                    <span>Productos Relacionados</span> 
                                    @elseif($datashow["title"] == "currencies" )
                                    <span>Precios* </span>
                                    @else
                                    <span>Datos "{{$datashow["title"]}}" </span>
                                    @endif
                                    <span class="fa arrow"></span>
                                </div>
                                <?php
                                $fields = $form->fields($datashow["title"]);
                                $fields = empty($fields) ? [] : $fields;
                                ?>
                                @foreach ($fields as $field)
                                <div class="row toggle_field_{{$datashow["title"]}}">
                                    <div class="col-lg-12">
                                        <div class="form-group <?php echo (is_object($field) && get_class($field) == "App\Core\Form\Fields\Datetime") ? "datepicker" : ''; ?>">
                                            {!! $field->before() !!}
                                            {!! $field->render() !!}
                                            {!! $field->after() !!}
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        <?php } ?>

                        @endforeach
                        @endif

                        @if(!isset($details))
                        <button class="btn btn-success">Guardar</button>
                        @endif
                        <a  href="{{ route('admin.'.$repository.'.index')}}" class="btn btn-danger">Cancelar</a>

                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    </form>

                    @if(isset($delete))
                    <form id="deleteForm" action="{{$delete}}">
                        <input type="hidden" name="id" id="id" value="{{$id}}" />
                        <button id="deleteAccion" class="btn btn-danger">DELETE</button>
                    </form>
                    @endif
            </div>

        </div>
    </div>
</div>
@stop
@section('scripts')
<script>
    $(document).ready(function () {
        $(document).on('keydown', '.slug-control', function (event) {
            if (event.keyCode == 32) {
                event.preventDefault();
            }
        });

        {{--$(".slug-control").on("change paste", function(){--}}
            {{--$.post("{{ route("admin.products.check_slug") }}" , {--}}
                {{--_token: $("#csrf-token").val(),--}}
                {{--slug: $(this).val(),--}}
            {{--},function (result) {--}}
                {{--if(result == '0'){--}}
                    {{--$(".slug-control").css("background-color","rgba(92, 184, 92, 0.49)");--}}
                {{--}else{--}}
                    {{--$(".slug-control").css("background-color","rgba(217, 83, 79, 0.49)");--}}
                {{--}--}}
            {{--}, "json");--}}
        {{--});--}}

        $('input:file').bind('change', function() {
            if (this.files[0].size >= {{ getMaxPostSize() }}) {
                alert('Estás intentando subir un fichero demasiado pesado. El tamaño máximo es de ' + {{ getMaxPostSizeMb() }} + 'MB.');
                this.value = '';
            }

        });

        $(document).on('keydown', '.onlyNumbers', function (event) {
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
                return;
            } else {
                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                    event.preventDefault();
                }
            }
        });

        $(document).on('click', '.datepicker', function () {
            $(this).datetimepicker({
                format: 'YYYY-MM-DD HH:mm',
                use24hours: true
            });
        });

        $('.deleteImage').on('click', function () {
            if (confirm('Esta seguro de borrar esta Imagen?')) {
                var elementId = '#' + $(this).data('id');
                console.log(elementId);
                $(elementId + '_prev').val('');
                $(elementId).html('');
                $(elementId + '_input').show();

            }
            return false;
        });

        $('.deleteFile').on('click', function () {
            if (confirm('Esta seguro de borrar este archivo?')) {
                var elementId = '#' + $(this).data('id');
                var elementdeleteId = '.' + $(this).data('delete');
                $(elementdeleteId).val('');
                $(elementId).html('');
                $(elementId + 'file').show();
            }
            return false;
        });

        $("body").on('change', 'select[name=status]', function () {
<?php if (isset($id)) { ?>
                $.get("changeStatus/<?php echo $id ?>",
                        {id: <?php echo $id ?>, status: $(this).val()}, function () {
                });
<?php } ?>
        });


<?php if ($form->editor() == true) { ?>
            $('.summernote').each(function () {
                $(this).summernote();
            });
<?php } ?>

        $(document).on('click', '.toggle', function () {
            var element = $(this).data('class');

            var divParent = $(this).data('parent');
            var active = $(this).hasClass('active');
            if (active === true) {
                $('#' + divParent).removeClass('active');
            } else {
                $('#' + divParent).addClass('active');
            }
            $('.' + element).toggle('slow');
        });

<?php if (isset($languages) && $languages == true) { ?>
            $(document).on('click', '.changeLang', function () {
                var currentLang = $(this).data('id');

                $("#ul-languages li").each(function (index) {
                    $(this).removeClass('active');
                });

                $('#li-' + currentLang).addClass('active');

                $(".content-languages").each(function (index) {
                    $(this).hide();
                });

                $('#content-' + currentLang).show();
            });
<?php } ?>

<?php
foreach ($form->getDataShow() as $dataHide) {
    if (null !== $dataHide["title"] && $dataHide["title"] !== 'generals') {
        ?>
                if ($("#div_field_<?php echo $dataHide["title"] ?>").length > 0) {
                    $("#div_field_<?php echo $dataHide["title"] ?>").trigger("click");
                }
        <?php
    }
}
?>
    });
</script>
@stop    