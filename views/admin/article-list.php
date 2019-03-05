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
            <div class="panel-heading">
                Advanced Tables
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Интро</th>
                            <th>Псевдоним</th>
                            <th>Дата создания</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for article in articles %}
                        <tr class="odd gradeX">
                            <td>{{article.title}}</td>
                            <td></td>
                            <td>{{article.slug}}</td>
                            <td class="center">{{article.data}}</td>
                            <td class="center">
                                <a href="/admin/article-edit/{{article.id}}" class="btn btn-success" role="button"><i class="fa fa-pencil fa-lg"></i>
                                </a>
                            </td>
                        </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
{% endblock %}
