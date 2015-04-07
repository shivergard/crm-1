{{-- шаблонизатор blade в действии // наследуем шаблон template\template.blade.php --}}
@extends('template.template')


{{--  все что напишем между @section('content') и @stop попадет в @yield('content') в шаблон в который мы обращаемся --}}
@section('content') {{-- здесь можно разместить контент --}}

{{--почистит класс simpleView--}}
<table id="kindCost" class="silver">
    <thead>
        <tr class="head">
            <td class="">Название</td>
            <td></td>
        </tr>
        <tr id="addKindCost">
            <td><input name="name" placeholder="вид затрат"/></td>
            <td><div class="jAdd btn">Добавить</div></td>
        </tr>
    </thead>
    <tbody id="kindCostsBox"></tbody>
</table>


<script type="text/template" id="tmplKindCost">
    <td><%=name%></td>
    <td class="btn jEdit">Ред-ть</td>
</script>

<script type="text/template" id="tmplKindCostEdit">
    <td><input class="" name="name" type="text" value="<%=name%>" /></td>
    <td>
        <button class="jCancel">Отмена</button>
        <button class="jChange">Изм-ть</button>
        <button class="jDel">Удалить</button>
    </td>
</script>


    @if (isset($kind_cost) && count($kind_cost) )
    <script>
    $(function () {
        if (!settings.cKindCosts)
            settings.cKindCosts = new App.Collections.KindCosts( {!! $kind_cost !!} )
    })
    </script>
    @endif


    <script type="text/javascript" src="js/models/m.kindCost.js" language="javascript"></script>
    <script type="text/javascript" src="js/collections/c.kindCost.js" language="javascript"></script>
    <script type="text/javascript" src="js/views/v.kindCost.js" language="javascript"></script>

@stop