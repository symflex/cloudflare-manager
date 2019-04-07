<?php
/* @var $this yii\web\View */
?>
<h1>Управление аккаунтами</h1>

<?php
/* @var $this yii\web\View */
?>

<style>
    .create {
        margin: 10px 0 10px 0;
    }

    .act {
        width: 30px;
        text-align: center;
    }
</style>
<script>
    $(function() {
        $('#create').on('click', function (e) {
            e.preventDefault();

            let template = '<tr>' +
                '        <td>' +
                '        </td>' +
                '        <td>' +
                '            <input class="form-control input-sm" name="email" value="">' +
                '        </td>' +
                '        <td>' +
                '            <input class="form-control input-sm" name="apikey" value="">' +
                '        </td>' +
                '        <td class="act">' +
                '            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>' +
                '        </td>' +
                '    </tr>';
            $('table tbody').prepend(template);

        });
    });
</script>

<div class="create">
    <a id="create" class="btn btn-success btn-sm">Добавить</a>
</div>

<table class="table table-bordered table-hover table-striped">
    <thead>
    <tr>
        <th width="30">
            ID
        </th>
        <th>
            E-mail
        </th>
        <th>
            Api key
        </th>
        <th class="act">
            #
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            <input class="form-control input-sm" name="email" value="test@test.ru">
        </td>
        <td>
            <input class="form-control input-sm" name="apikey" value="129xny293ey8237xt2h873d">
        </td>
        <td class="act">
            <a class="btn btn-success btn-sm"><i class="glyphicon glyphicon-floppy-saved"></i> </a>
        </td>
    </tr>
    </tbody>

</table>


