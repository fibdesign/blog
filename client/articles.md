# Articles

{% api-method method="get" host="http://127.0.0.1:8000" path="/apiClient/articles?=page=1" %}
{% api-method-summary %}
Get Articles
{% endapi-method-summary %}

{% api-method-description %}
Articles are paginated. to get meta tags and pagination options, add `page`parameter as a query.  
By default pagination limited by showing `15` articles. You can change the limitation by adding this value to your `.env` :  
FIBDESIGN\_BLOG\_ARTICLE\_PER\_PAGE = 15
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-headers %}
{% api-method-parameter name="Accept" type="string" %}
application/json
{% endapi-method-parameter %}
{% endapi-method-headers %}

{% api-method-query-parameters %}
{% api-method-parameter name="page" type="number" required=false %}
1
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

