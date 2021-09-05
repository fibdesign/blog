# Article

{% api-method method="get" host="https://api.cakes.com" path="/apiClient/articles/{article}" %}
{% api-method-summary %}
Get Article
{% endapi-method-summary %}

{% api-method-description %}
This endpoint allows you to get an Article.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-path-parameters %}
{% api-method-parameter name="article" type="number" required=true %}
ID of the article. \(controller using Model Bining\)
{% endapi-method-parameter %}
{% endapi-method-path-parameters %}

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
{
    "data": {
        "id": 1,
        "title": "some title",
        "subtitle": "short description",
        "description": "Lorem Ipsome ...",
        "thumbnail": "https://example.com/image.jpg",
        "tags": "['tag-1','tag-2']",
        "popular": true,
        "registered": "1 ساعت پیش",
        "category": {
            "id": 1,
            "label": "label"
        },
        "comments": [
            {
                "name": "user name",
                "content": "Lorem Ipsome",
                "registered": "5 دقیقه پیش"
            }
        ]
    }
}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=404 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```javascript
{    "message": "مطلب پیدا نشد."    }
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



