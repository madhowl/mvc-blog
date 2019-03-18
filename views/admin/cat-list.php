{% extends "/admin/layout.php" %}


{% block content %}
<div class="row">
    <div class="col-md-12">
        <h2>{{title}}</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" action="/admin/cat-delete/">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Описание</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for cat in category %}
                        <tr class="odd gradeX">
                            <td>{{cat.name}}</td>

                            <td>{{cat.description}}</td>
                            <td class="center">
                                <a href="/admin/cat-edit/{{cat.id}}" class="btn btn-success btn-xs" role="button"><i class="fa fa-pencil fa-fw"></i></a>
                                <button class="btn btn-danger btn-xs" type="submit" value="{{cat.id}}" name="btncatdelete"><i class="fa fa-trash-o fa-fw"></i>
                                </button>
                            </td>
                        </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </form>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
{% endblock %}
