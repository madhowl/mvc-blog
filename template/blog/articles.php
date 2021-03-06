{% extends "/blog/layout.php" %}


{% block content %}
<div class="col-md-8">

    <h1 class="my-4"> {{title}}    </h1>

<!-- Blog Post -->
{% for article in articles %}


<div class="card mb-4">
    <img class="card-img-top" src="{{article.image}}" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">{{article.title}}</h2>
        <p class="card-text">{{article.intro}}</p>
        <a href="/article/{{article.id}}" class="btn btn-primary">Читать полностью &rarr;</a>
    </div>
    <div class="card-footer text-muted">
        Posted on {{article.data}} by
        <a href="#">Start Bootstrap</a>
    </div>
</div>
{% endfor %}


<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
    </li>
    <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
    </li>
</ul>

</div>

<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Categories Widget -->
    {% include '/blog/widget/categories.php' %}
    <!-- Side Widget -->
    {% include '/blog/widget/side.php' %}
    <!-- Search Widget -->
    {% include '/blog/widget/search.php' %}

</div>
</div>
{% endblock %}

