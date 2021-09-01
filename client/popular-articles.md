# Popular Articles

{% api-method method="get" host="http://127.0.0.1:8000" path="/apiClient/articles/popular" %}
{% api-method-summary %}
Get Popular Articles
{% endapi-method-summary %}

{% api-method-description %}
This popular articles place meant to be at `Hero` of blog page. So it limited by default to showing `5` of them. You can change the limitation by adding this value to your `.env` :  
  
FIBDESIGN\_BLOG\_ARTICLES\_POPULAR\_NUM = 5
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="Accept" type="string" %}
application/json
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```

```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

