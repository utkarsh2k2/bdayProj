{% extends "::base1.html.twig" %}

{% block title %}register university{% endblock %}

{% block body %}
    <div class="col-sm-6 col-sm-offset-3">
        <div class="register-container">
            <div class="row">
                <div class="register span6">
                    {{ form_start(form, {attr:{novalidate: 'novalidate'}}) }}
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
{% endblock %}


