# Categories

{% api-method method="get" host="http://127.0.0.1:8000" path="/apiClient/categories" %}
{% api-method-summary %}
Get Categories
{% endapi-method-summary %}

{% api-method-description %}
This endpoint allows you to get all Categories.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-headers %}
{% api-method-parameter name="Accept" type="string" %}
application/json
{% endapi-method-parameter %}
{% endapi-method-headers %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```javascript
[
    {
        "id": 1,
        "label": "label"
    },
    .
    .
    .
]
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



